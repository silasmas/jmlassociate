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
                <p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Obtenez des conseils juridiques <span
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
                    <span class="subheading">Services</span>
                    <h2 class="mb-4">Why Select Us?</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a paradisematic country, in which roasted parts of sentences fly into your.</p>
                    <p><a href="#" class="btn btn-primary py-3 px-4">Free Consultation</a></p>
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
                                <h3>Fight for Justice</h3>
                                <p>Seeking justice in the world is a sed significant emotional and investment when we
                                    follow this call.</p>
                            </div>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lawyer"></span>
                            </div>
                            <div class="text">
                                <h3>Best Case Strategy</h3>
                                <p>Seeking justice in the world is a sed significant emotional and investment when we
                                    follow this call.</p>
                            </div>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
                                    class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lawyer"></span>
                            </div>
                            <div class="text">
                                <h3>Experienced Attorney</h3>
                                <p>Seeking justice in the world is a sed significant emotional and investment when we
                                    follow this call.</p>
                            </div>
                            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span
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
                <span class="subheading">Explore Case Studies</span>
                <h2 class="mb-4">1000+ Completed Cases Successfully</h2>
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
                <a href="case.html" class="btn btn-primary px-5">See All Successful Cases</a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container-fluid px-md-5">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Our Attorney</span>
                <h2 class="mb-4">Our Legal Attorneys</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(assets/images/person_1.jpg);">
                            <div class="box">
                                <h2>Ryan Anderson</h2>
                                <p>Civil Lawyer</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="assets/images/person_1.jpg" alt="">
                                </div>
                                <div class="name align-self-center ml-3">Ryan Anderson <span class="position">Civil
                                        Lawyer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(assets/images/person_2.jpg);">
                            <div class="box">
                                <h2>Greg Washer</h2>
                                <p>Business Lawyer</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="assets/images/person_2.jpg" alt="">
                                </div>
                                <div class="name align-self-center ml-3">Greg Washer<span class="position">Business
                                        Lawyer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(assets/images/person_3.jpg);">
                            <div class="box">
                                <h2>Tony Henderson</h2>
                                <p>Criminal Defense</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="assets/images/person_3.jpg" alt="">
                                </div>
                                <div class="name align-self-center ml-3">Tony Henderson <span class="position">Criminal
                                        Defense</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(assets/images/person_4.jpg);">
                            <div class="box">
                                <h2>Jack Smith</h2>
                                <p>Insurance Lawyer</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text &rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="assetsimages/person_4.jpg" alt="">
                                </div>
                                <div class="name align-self-center ml-3">Jack Smith <span class="position">Insurance
                                        Lawyer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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