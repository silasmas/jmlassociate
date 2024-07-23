@extends("parties.template",['titre'=>__('info.titrepage.team')])


@section("content")
@include("parties.baniere")

<section class="our-team-area attorney-1">
    <!-- start team member introduction -->
    <div class="team-member-area">
        <div class="container">
            <div class="row">
                @forelse ($avocat as $av)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-description">
                        <div class="team-content">
                            <div class="team-img attorney-team-img">
                                <img src="{{ asset('storage/'.$av->photo) }}" alt="team-member">
                                <div class="attorney-content-default text-center">
                                    <h2><a href="#">{{ $av->prenom." ".$av->nom }}</a></h2>
                                    <p>{{ $av->fonction->nom }}</p>
                                </div>
                            </div>
                            <div class="about-attorney-member text-center">
                                <div class="attorney-content-default-hover">
                                    <h2><a href="#">{{ $av->prenom." ".$av->nom }}</a></h2>
                                    <p>{{ $av->fonction->nom }}</p>
                                </div>
                                <div class="social-content-box attorney-team-social">
                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    <a href="#"> <i class="fa fa-google-plus"></i> </a>
                                    <a href="#"> <i class="fa fa  fa-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse

            </div>
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
    </div>
</section>
@endsection
