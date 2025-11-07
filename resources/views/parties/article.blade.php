<section class="testimonial-area home-2-testimonial-area">
    <div class="welcome-title-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="Title-area">
                        <h3>Blog</h3>
                        <h2>Nos recentes publications</h2>
                        <p>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    @if($publication->count() > 1)
                        <div class="text-right asset-button btn-text-left top-margin">
                            <button type="button" class="btn btn-default"
                                onClick="location.href='{{ route('publication') }}'">Voir toutes nos publications</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div> <!-- end title. it will use all pages title -->
    <div class="testimonial-content-area">
        <div class="container">
            <div class="row">
                <div class="t-b-content-area">
                    @forelse($publication as $p)
                        <div class="col-md-3 col-sm-6">
                            <div class="t-b-details">
                                <div class="t-b-img">
                                    <img src="{{ asset('assets/images/testimonial-blog-post-1.png') }} "
                                        class="img-responsive" alt="blog-post">
                                    <div><span>JUNE</span><span>30</span></div>
                                </div>
                                <div class="t-b-comment">
                                    <p>Posted In: <span>Legal Advice</span></p>
                                    <p><span><a href="#"><i class="fa fa-comments"></i></a> 15</span>
                                        <span><a href="#"><i class="fa fa-eye"></i></a> 11</span>
                                    </p>
                                </div>
                                <h2><a href="#">It’s My Pleasure to graduate with excellent!</a></h2>
                                <p>We cannot expect people to have respect for laws and orders until we teach respect to
                                    those we have entrusted to enforce those laws all the time.</p>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-danger">Aucun article disponible pour le moment</p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>

</section>
