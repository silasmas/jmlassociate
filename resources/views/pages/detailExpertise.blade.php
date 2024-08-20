@extends("parties.template",['titre'=>__('info.titrepage.expertise')])


@section("content")
@include("parties.baniere")
<section class="practice-single-area">
    <div class="testimonial-content-area">
        <div class="container">
            <div class="row">
                <div class="practice-single-content">
                    <div class="col-md-9 col-sm-12 col-md-push-3 no-padding-right blog-custom-padding">
                        <div class="inner-single-practice">
                            <img src="{{file_exists('storage/'.$Onesecteur->photo)?'../storage/'.$Onesecteur->photo:asset('img/def.jpeg')}}" class="img-responsive" alt="">
                            <h2>Description :</h2>
                            <p>
                                {!! $Onesecteur->contenu !!}
                            </p>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-md-pull-9">
                        <div class="right-sidebar">
                            <div class="sidebar-category sidebar-inner">
                                <h2 class="p-s-first-child">Categories</h2>
                                <ul>
                                    @if (isset($secteurs))
                                    @forelse ($secteurs as $s)
                                    <li><a href="{{ route('detailExpertise',['id'=>$s->id]) }}"><i class="fa fa-long-arrow-right"></i>{{ $s->titre1 }}</a></li>
                                    @empty

                                    @endforelse

                                    @else
                                    @forelse ($domaine as $s)
                                    <li><a href="{{ route('detailCompetence',['id'=>$s->id]) }}"><i class="fa fa-long-arrow-right"></i>{{ $s->titre1 }}</a></li>
                                    @empty

                                    @endforelse

                                    @endif
                                </ul>
                            </div>
                            {{-- <div class="sidebar-inner">
                                <h2>Download Brochures</h2>
                                <ul class="d-brochures">
                                    <li><a href="#"><i class="fa fa-gavel"></i>All Practice Areas</a></li>
                                    <li><a href="#"><i class="fa fa-user"></i>Family Law</a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i>Criminal Defence</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-inner">
                                <h2>Tag Cloud</h2>
                                <div class="tag-cloud">
                                    <a href="#">Responsive</a>
                                    <a href="#">Modern</a>
                                    <a href="#">Corporate</a>
                                    <a href="#">Business</a>
                                    <a href="#">Fresh</a>
                                    <a href="#">Awesome</a>
                                    <a href="#">Mount</a>
                                    <a href="#">Fresh</a>
                                    <a href="#">Responsive</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end testimonial area -->


@endsection
