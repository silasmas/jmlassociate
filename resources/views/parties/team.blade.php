
    <div class="{{ Route::current()->getName()=="detailService"?"col-lg-6 col-sm-6":"col-lg-3 col-sm-6" }}">
        <div class="block-2 ftco-animate">
            <div class="flipper">
                <div class="front" style="background-image: url(../assets/images/jml.jpeg);">
                    <div class="box">
                        <h2>@lang("info.avocat.1.nom")</h2>
                        <p>@lang("info.avocat.1.titre")</p>
                    </div>
                </div>
                <div class="back">
                    <!-- back content -->
                    <blockquote>
                        <p>&ldquo;{{ Str::limit(__("info.avocat.1.detail"), 100, '...') }}&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex">
                        <div class="image align-self-center">
                            <img src="{{ asset('assets/images/jml.jpeg') }}" alt="">
                        </div>
                        <div class="name align-self-center ml-3">@lang("info.avocat.1.nom") 
                            <span class="position">@lang("info.avocat.1.titre")</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ Route::current()->getName()=="detailService"?"col-lg-6 col-sm-6":"col-lg-3 col-sm-6" }}">
        <div class="block-2 ftco-animate">
            <div class="flipper">
                <div class="front" style="background-image: url(../assets/images/person_2.jpg);">
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
                            <img src="{{ asset('assets/images/person_2.jpg') }}" alt="">
                        </div>
                        <div class="name align-self-center ml-3">Greg Washer<span class="position">Business
                                Lawyer</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-3 col-sm-6">
        <div class="block-2 ftco-animate">
            <div class="flipper">
                <div class="front" style="background-image: url(../assets/images/person_3.jpg);">
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
                            <img src="{{ asset('assets/images/person_3.jpg') }}" alt="">
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
                <div class="front" style="background-image: url(../assets/images/person_4.jpg);">
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
                            <img src="{{ asset('assets/images/person_4.jpg') }}" alt="">
                        </div>
                        <div class="name align-self-center ml-3">Jack Smith <span class="position">Insurance
                                Lawyer</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
