@extends("template")

@section("content")
@include("parties.banner")

@include("parties.about")
@include("parties.formMessage")
{{-- <section class="ftco-consultation ftco-section ftco-no-pt ftco-no-pb img"
    style="background-image: url(assets/images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-6 half p-3 py-5 pl-md-5 ftco-animate heading-section heading-section-white">
                <span class="subheading">Booking an Appointment</span>
                <h2 class="mb-4">Free Consultation</h2>
                <form action="#" class="consultation">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send message" class="btn btn-dark py-3 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> --}}


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


@endsection
