<section class="our-team-area">
    <div class="welcome-title-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="Title-area">
                        <h3>Notre equipe</h3>
                        <h2>Rencontrez Nos Avocats</h2>
                        <p>Chaque avocat du cabinet JML se concentre exclusivement sur les affaires civiles.
                            Nous avons choisi nos avocats en tenant compte de leur expérience et de leur capacité
                             à gérer tous les cas.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="asset-button btn-text-left text-right top-margin">
                        <button type="button" class="btn btn-default" onClick="location.href='{{ route('team') }}'">Voir toute l'équipe</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end title. it will use all pages title -->

    <!-- start team member introduction -->

    <div class="team-member-area">
        <div class="container">
            <div class="row">
                @forelse ($avocat->take(4) as $av)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-description">
                        <div class="team-content">
                            <div class="team-img attorney-team-img">
                                <img src="{{ asset('storage/'.$av->photo) }}" alt="team-member">
                                <div class="attorney-content-default text-center">
                                    <h2><a href="{{ route('detailTeam',["id"=> $av->id]) }}">{{ $av->prenom." ".$av->nom }}</a></h2>
                                    <p>{{ $av->fonction->nom }}</p>
                                </div>
                            </div>
                            <div class="about-attorney-member text-center">
                                <div class="attorney-content-default-hover">
                                    <h2><a href="{{ route('detailTeam',["id"=> $av->id]) }}">{{ $av->prenom." ".$av->nom }}</a></h2>
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
        </div>
    </div>
</section>  <!-- end our team area -->
