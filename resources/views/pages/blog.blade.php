@extends("parties.template",['titre'=>__('info.titrepage.publication')])


@section("content")
@include("parties.baniere")


<section class="testimonial-area home-2-testimonial-area">
    <div class="testimonial-content-area">
        <div class="container">
            <div class="row">
                <div class="t-b-content-area blog-content-area clearfix">
                    <div class="col-md-9 col-sm-9 no-padding blog-custom-padding">
                        @forelse ($publication as $p)
                        <div class="col-md-12 col-sm-12">
                            <div class="t-b-details t-b-standard">
                                <div class="t-b-img">
                                    <img src="images/testimonial-blog-post-1.png" class="img-responsive" alt="blog-post">
                                    <div><span>JUNE</span><span>30</span></div>
                                </div>
                                <div class="t-b-comment blog-post-comment">
                                    <p>Posted In: <span><a href="#">Legal Advice</a></span></p>
                                    <p>Posted By: <span><a href="#">Mahmoud Baghagho</a></span></p>
                                    <p>Tags: <span><a href="#"> law</a>, <a href="#">civil</a>, <a href="#">rights</a> , <a href="#">university</a> </span></p>
                                    <p><span><a href="#"><i class="fa fa-comments"></i></a><a href="#">15</a> </span>
                                       <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                                </div>
                                <h2><a href="#">It’s My Pleasure to graduate with excellent!</a></h2>
                                <p>We are aiming to provide high quality legal consultancy, support and results for your legal issues. Aiming to provide high quality legal consultancy, support and results for your legal issues. Using their expertise and experience, Trust law firm documents and builds their clients' cases to obtain the best results they could achieve in their particular situation. Trust has been known for doing what he says, aiming to bring favourable results for its customers as soon as possible. </p>
                                <div class="blog-read-more">
                                    <a href="#">Read More </a>
                                </div>
                            </div>
                        </div>
                        @empty

                        @endforelse

                        <div class="row">
                            <div class="col-md-12 blog-pagination text-center clearfix">
                                <nav>
                                    <ul class="pagination">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li>
                                          <a href="#" aria-label="Next">
                                            <i class="fa fa-long-arrow-right"></i>
                                          </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                   @include("parties.sidebar")
                </div>
            </div>
        </div>
    </div>
</section><!-- end testimonial area -->


@endsection
