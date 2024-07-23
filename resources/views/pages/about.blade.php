@extends("parties.template",['titre'=>__('info.titrepage.about')])


@section("content")
@include("parties.baniere")
<section class="welcome-area">
    <div class="welcome-title-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="Title-area">
                        {{-- <h3>Hello Dear</h3> --}}
                        <h2>Bienvenue chez JML</h2>
                        <p>

                            Nous fournissons des solutions juridiques hautement fiables et efficaces.

                            Pour trouver la bonne solution à vos problèmes juridiques, vous avez besoin de professionnels du droit ayant les compétences, l’intégrité et l’expérience nécessaires.                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end title. it will use all pages title -->

    <div class="wellcome-asset">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="asset-content">
                        <h2>Notre Vision <span>01.</span></h2>
                        <p>
                            Acte Uniforme relatif au droit des Sociétés Commerciales et du Groupe- ment
                             d’Intérêt Économique (AUSCGIE) ; Acte uniforme portant Organisation des Sûretés
                             (AUS) ; Acte Uniforme portant organisation des Procédures Simp¦ifiées de Recouvrement et des Voies d’Exécution (AUPSRVE) ; Acte Uniforme portant orga- nisation des Procédures Collectives d’Apurement du Passif (AUPC).
                            </p>
                        {{-- <a href="#">More <span><i class="fa fa-long-arrow-right"></i></span></a> --}}
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="asset-content">
                        <h2>Notre Mission <span>02.</span></h2>
                        <p>
                            Un accompagnement au quotidien de sa clientèle d’entreprises et de particuliers dans les domaines du droit des affaires et des sociétés, droit du travail, droit pénal, droit civil des personnes et des biens, droit des obligations et des contrats , droit de la propriété intellectuelle, et en droit des assurances.
                        </p>
                        {{-- <a href="#">More <span><i class="fa fa-long-arrow-right"></i></span></a> --}}
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="asset-content">
                        <h2>Nos Valeures<span>03.</span></h2>
                        <p>
                            Dynamisme, Innovation, Écoute, Efficacité, Transparence, Intégrité.
                        </p>

                        {{-- <a href="#">More <span><i class="fa fa-long-arrow-right"></i></span></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end welcome asset area -->

    @include("parties.team")
    @include("parties.article")
</section>
@endsection
