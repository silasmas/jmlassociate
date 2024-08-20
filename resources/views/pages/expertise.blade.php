@extends("parties.template",['titre'=>__('info.titrepage.expertise')])


@section("content")
@include("parties.baniere")


<section class="practice-area home-4-practice-area type-1-bg">
    <div class="welcome-title-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="Title-area">
                        <h3>Want Help</h3>
                        <h2>@lang('info.expertises.menu')</h2>
                        <p> businesses, individuals, and local governments too.is abusiness theme perfectly suited legal advisers and offices, lawyers, attorneys, counsels, advocates and other legal and law related services.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="asset-button btn-text-left text-right top-margin">
                        <button type="button" class="btn btn-default">View All Practice Areas</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end title. it will use all pages title -->
    <!-- start practice content area -->
    <div class="container">
        <div class="row">
            <div class="h-2-practice-content clearfix">
                @forelse ($secteur as $s)
                <div class="col-sm-6 col-md-4">
                    <div class="h-2-p-c-details">
                        <div class="h-2-p-c-default h-3-p-c-default">
                            <img src="{{asset("storage/".$s->photo) }}" class="img-responsive" alt="">
                            <h2><a href="{{ route('detailExpertise',['id'=>$s->id,'p'=>$s->titre1]) }}">{{ $s->titre1 }}</a></h2>
                            <p>{!! Str::limit($s->contenu, 100, '...')  !!}</p>
                            <a href="{{ route('detailExpertise',['id'=>$s->id,'p'=>$s->titre1]) }}">Voir en detail<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </div>
    <div class="welcome-title-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="Title-area">
                        <h3>Want Help</h3>
                        <h2>@lang('info.domaine.menu')</h2>
                        <p>In Trust, we have got a wide range of legal services. We practice general civil law for businesses, individuals, and local governments too.is abusiness theme perfectly suited legal advisers and offices, lawyers, attorneys, counsels, advocates and other legal and law related services.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="asset-button btn-text-left text-right top-margin">
                        <button type="button" class="btn btn-default">View All Practice Areas</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end title. it will use all pages title -->
    <!-- start practice content area -->

</section> <!-- end practice area -->

@endsection
