@extends("parties.template",['titre'=>__('info.titrepage.publication')])


@section("content")
@include("parties.baniere")


<section class="testimonial-area home-2-testimonial-area">
    <div class="testimonial-content-area">
        <div class="container">
            <div class="row">
                <div class="clearfix t-b-content-area blog-content-area">
                    <div class="col-md-9 col-sm-9 no-padding blog-custom-padding">
                  {{-- $publications est une LengthAwarePaginator de Publication --}}
@forelse ($publications as $p)
    <div class="col-md-12 col-sm-12">
        <article class="t-b-details t-b-standard">

            {{-- Image + date --}}
            <div class="t-b-img position-relative">
                <a href="{{ route('detailPublication', $p->id) }}">
                    <img
                        src="{{ asset('storage/'.$p->cover) }}"
                        class="img-responsive"
                        alt="{{ $p->title }}"
                        loading="lazy"
                        width="1200" height="675">
                </a>

                {{-- Pastille date --}}
                <div class="position-absolute" style="left:12px;bottom:12px;background:#111;color:#fff;padding:6px 10px;border-radius:8px;line-height:1">
                    <span style="display:block;font-weight:700;text-transform:uppercase;">
                        {{ $p->created_at->translatedFormat('MMM') }}
                    </span>
                    <span style="display:block;font-size:18px;font-weight:800;">
                        {{ $p->created_at->format('d') }}
                    </span>
                </div>
            </div>

            {{-- Métadonnées --}}
            <div class="t-b-comment blog-post-comment">
                <p>Publié dans :
                    <span>
                        @if($p->categorie)
                            <a href="">{{ $p->categorie->name }}</a>
                        @else
                            <em>Sans catégorie</em>
                        @endif
                    </span>
                </p>

                <p>Par :
                    <span>
                        @if($p->author)
                            <a href="{{ route('avocat.show', $p->avocat->prenom ?? $p->avocat->id) }}">
                                {{ $p->author->name }}
                            </a>
                        @else
                            <em>Équipe Rédaction</em>
                        @endif
                    </span>
                    <span class="mx-2">•</span>
                    <span title="{{ $p->created_at->toIso8601String() }}">
                        {{ $p->created_at->diffForHumans() }}
                    </span>
                </p>

                {{-- Tags --}}
                @if($p->relationLoaded('tags') && $p->tags->isNotEmpty())
                    <p>Tags :
                        <span>
                            @foreach($p->tags as $tag)
                                <a href="{{ route('tags.show', $tag->slug) }}" class="me-1">#{{ $tag->name }}</a>{{ !$loop->last ? ',' : '' }}
                            @endforeach
                        </span>
                    </p>
                @endif

                {{-- Compteurs --}}
                <p>
                    <span class="me-3">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        {{ number_format($p->comments_count ?? 0) }}
                    </span>
                    <span>
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        {{ number_format($p->views ?? 0) }}
                    </span>
                </p>
            </div>

            {{-- Titre + extrait --}}
            <h2 class="mt-10">
                <a href="{{ route('detailPublication', $p->id) }}">
                    {{ $p->title }}
                </a>
            </h2>

            <p>
                {{ \Illuminate\Support\Str::limit(strip_tags($p->excerpt ?? $p->content), 220) }}
            </p>

            <div class="blog-read-more">
                <a href="{{ route('detailPublication', $p->id) }}" aria-label="Lire la suite : {{ $p->title }}">
                    Lire la suite
                </a>
            </div>
        </article>
    </div>
@empty
    <div class="row">
        <div class="text-center col-12">
            <div class="alert alert-warning" role="alert" style="max-width:680px;margin:20px auto;">
                Aucune publication pour le moment. Revenez bientôt !
            </div>
        </div>
    </div>
@endforelse

{{-- Pagination Laravel --}}
@if(method_exists($publications, 'links'))
    <div class="row">
        <div class="clearfix text-center col-md-12 blog-pagination">
            {{ $publications->onEachSide(1)->links() }}
        </div>
    </div>
@endif


                    </div>
                   @include("parties.sidebar")
                </div>
            </div>
        </div>
    </div>
</section><!-- end testimonial area -->


@endsection
