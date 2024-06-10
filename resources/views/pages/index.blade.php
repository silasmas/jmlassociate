@extends("template")

@section("content")
<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/bg_1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <h2 class="subheading">Bienvenue chez {{ config('app.name') }}</h2>
                <h1>Des avocats défendant
                    <span class="txt-rotate" data-period="2000"
                        data-rotate='[ "Votre liberté.", "Vos droits.", "Vos Cas.", "Votre Garde à vue." ]'></span>
                </h1>
                {{--
                <!-- <h1 class="mb-4">Attorneys Fighting For Your Freedom</h1> --> --}}
                <p class="mb-4"> @lang("info.content.mission") </p>
                <p><a href="{{ route('contact') }}" class="btn btn-primary mr-md-4 py-2 px-4">Obtenez des conseils juridiques <span
                            class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 py-5">
                <div class="heading-section ftco-animate">
                    <span class="subheading">Nos Services</span>
                    <h2 class="mb-4">Pourquoi nous choisir?</h2>
                    <p>Nous fournissons des solutions juridiques hautement fiables et efficaces.</p>
                    <p>Pour trouver la bonne solution à vos problèmes juridiques, vous avez besoin de professionnels du droit ayant les compétences, l’intégrité et l’expérience nécessaires.</p>
                    <p><a href="{{ route('contact') }}" class="btn btn-primary py-3 px-4">Obtenez des conseils juridiques</a></p>
                </div>
            </div>
            <div class="col-lg-9 services-wrap px-4 pt-5">
                <div class="row pt-md-3">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lawyer"></span>
                            </div>
                            <div class="text">
                                <h3>@lang("info.services.droit.nom")</h3>
                                <p>{{ Str::limit(__("info.services.droit.resume"), 100, '...') }}</p>
                            </div>
                            <a href="{{ route('detailService',['slog'=>str_replace(' ', '-', __("info.services.droit.nom"))]) }}" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lawyer"></span>
                            </div>
                            <div class="text">
                                <h3>@lang("info.services.banc.nom")</h3>
                                <p>{{ Str::limit(__("info.services.banc.resume"), 100, '...') }}</p>
                            </div>
                            <a href="{{ route('detailService',['slog'=>str_replace(' ', '-', __("info.services.banc.nom"))]) }}" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lawyer"></span>
                            </div>
                            <div class="text">
                                <h3>@lang("info.services.droitf.nom")</h3>
                                <p>{{ Str::limit(__("info.services.droitf.resume"), 100, '...') }}</p>
                            </div>
                            <a href="{{ route('detailService',['slog'=>str_replace(' ', '-', __("info.services.droitf.nom"))]) }}" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include("parties.about")

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <span class="subheading">Analyser les cas d'étude</span>
                <h2 class="mb-4">1000+ Cas terminés avec succès</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-case owl-carousel ftco-owl">
                    <div class="item">
                        <div class="case img d-flex align-items-center justify-content-center"
                            style="background-image: url(assets/images/case-1.jpg);">
                            <div class="text text-center">
                                <h3><a href="#">Legal Seperation</a></h3>
                                <span>Corporate</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case img d-flex align-items-center justify-content-center"
                            style="background-image: url(assets/images/case-2.jpg);">
                            <div class="text text-center">
                                <h3><a href="#">Legal Seperation</a></h3>
                                <span>Corporate</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case img d-flex align-items-center justify-content-center"
                            style="background-image: url(assets/images/case-3.jpg);">
                            <div class="text text-center">
                                <h3><a href="#">Legal Seperation</a></h3>
                                <span>Corporate</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="case img d-flex align-items-center justify-content-center"
                            style="background-image: url(assets/images/case-4.jpg);">
                            <div class="text text-center">
                                <h3><a href="#">Legal Seperation</a></h3>
                                <span>Corporate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center mt-4">
                <a href="case.html" class="btn btn-primary px-5">Voir tous les cas réussis</a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Notre Equipe</span>
                <h2 class="mb-4">Nos avocats</h2>
            </div>
        </div>
        <div class="row">
        @include("parties.team")
    </div>
    </div>
</section>


@include("parties.formMessage")


<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(assets/images/person_1.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(assets/images/person_2.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(assets/images/person_3.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(assets/images/person_1.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(assets/images/person_2.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Blog</span>
                <h2>Recent Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text px-4 py-4">
                        <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                    </div>
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('assets/images/image_1.jpg');">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                <span class="day">18</span>
                            </div>
                            <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                <span class="yr">2019</span>
                                <span class="mos">October</span>
                            </div>
                        </div>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text px-4 py-4">
                        <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                    </div>
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('assets/images/image_2.jpg');">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                <span class="day">18</span>
                            </div>
                            <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                <span class="yr">2019</span>
                                <span class="mos">October</span>
                            </div>
                        </div>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text px-4 py-4">
                        <h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
                    </div>
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('assets/images/image_3.jpg');">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                <span class="day">18</span>
                            </div>
                            <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                <span class="yr">2019</span>
                                <span class="mos">October</span>
                            </div>
                        </div>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection