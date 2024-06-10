@extends("template")

@section("content")
@include("parties.banner")

<section class="ftco-section">
    <div class="container">
    <div class="row d-flex justify-content-center">
        {{-- <div class="col-md-3 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-family"></span>
                </div>
                <h3><a href="practice-single.html">Family Law</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-auction"></span>
                </div>
                <h3><a href="practice-single.html">Business Law</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
            </div>
        </div> --}}
        <div class="col-md-3 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-shield"></span>
                </div>
                <h3><a href="practice-single.html">@lang("info.services.droitf.nom")</a></h3>
                <p>@lang("info.services.droitf.resume")</p>
                <a href="{{ route('detailService',["slog"=>str_replace(' ', '-', __("info.services.droitf.nom"))]) }}" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
            </div>
        </div>
        {{-- <div class="col-md-3 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-handcuffs"></span>
                </div>
                <h3><a href="practice-single.html">Criminal Law</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
            </div>
        </div> --}}
        <div class="col-md-3 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-house"></span>
                </div>
                <h3><a href="practice-single.html">@lang("info.services.droit.nom")</a></h3>
                <p>@lang("info.services.droit.resume")</p>
                <a href="{{ route('detailService',["slog"=>str_replace(' ', '-', __("info.services.droit.nom"))]) }}" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-employee"></span>
                </div>
                <h3><a href="practice-single.html">@lang("info.services.droittr.nom")</a></h3>
                <p>@lang("info.services.droittr.resume")</p>
                <a href="{{ route('detailService',["slog"=>str_replace(' ', '-', __("info.services.droittr.nom"))]) }}" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
            </div>
        </div>
        {{-- <div class="col-md-3 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-fire"></span>
                </div>
                <h3><a href="practice-single.html">Fire Accident</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
            </div>
        </div> --}}
        <div class="col-md-3 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-money"></span>
                </div>
                <h3><a href="practice-single.html">@lang("info.services.banc.nom")</a></h3>
                <p>@lang("info.services.banc.resume")</p>
                <a href="{{ route('detailService',["slog"=>str_replace(' ', '-', __("info.services.banc.nom"))]) }}" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
            </div>
        </div>
        {{-- <div class="col-md-3 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-medicine"></span>
                </div>
                <h3><a href="practice-single.html">Drug Offenses</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="practice-area ftco-animate">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-handcuffs"></span>
                </div>
                <h3><a href="practice-single.html">Sexual Offenses</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
            </div>
        </div> --}}
    </div>
    </div>
</section>


@endsection
