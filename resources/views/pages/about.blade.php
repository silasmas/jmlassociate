@extends("parties.template",['titre'=>__('info.titrepage.about')])


@section("content")
@include("parties.baniere")
<section class="welcome-area">
    {{-- <div class="welcome-title-area">
        <div class="container">
         
        </div>
    </div> <!-- end title. it will use all pages title --> --}}
 <section class="home-4-story tabs-top-padding">
        <div class="container">
               <div class="row">
                <div class="col-xs-12 col-sm-6">
                        <div class="Title-area">
                            <h3>Our History</h3>
                            <h2>All About Trust</h2>
                            <p>Trust is a business theme perfectly suited legal advisers and offices, lawyers, attorneys, counsels, advocates and other legal and law related services.</p>
                        </div>
                    </div>
            </div>
          <div class="row">
    <div class="home-4-story-tab">
        <div class="col-sm-3 col-md-3 no-padding">
            <!-- Onglets -->
            <ul class="nav nav-tabs history-nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#tab-activites" aria-controls="tab-activites" role="tab" data-toggle="tab">Ce que nous faisons</a>
                </li>
                <li role="presentation">
                    <a href="#tab-histoire" aria-controls="tab-histoire" role="tab" data-toggle="tab">Notre histoire</a>
                </li>
                <li role="presentation">
                    <a href="#tab-valeurs" aria-controls="tab-valeurs" role="tab" data-toggle="tab">Valeurs & Philosophie</a>
                </li>
                <li role="presentation">
                    <a href="#tab-mission" aria-controls="tab-mission" role="tab" data-toggle="tab">Mission & Services</a>
                </li>
                <li role="presentation">
                    <a href="#tab-competences" aria-controls="tab-competences" role="tab" data-toggle="tab">Nos Compétences</a>
                </li>
                <li role="presentation">
                    <a href="#tab-reconnaissance" aria-controls="tab-reconnaissance" role="tab" data-toggle="tab">Reconnaissance</a>
                </li>
            </ul>
        </div>

        <!-- Contenu des tabs -->
        <div class="tab-content">

            <!-- TAB 1 : CE QUE NOUS FAISONS -->
            <div role="tabpanel" class="tab-pane fade in active" id="tab-activites">
                <div class="history-right-content">
                    <div class="col-sm-5 col-md-5 no-padding-right">
                        <div class="history-right-content-text">

                            <div class="about-section-jml">
                                <h3 class="about-title-jml">JML & Associates</h3>

                                <!-- visible en permanence -->
                                <div class="about-intro-jml">
                                    JML & Associates accompagne au quotidien une clientèle d’entreprises et de particuliers dans les domaines du droit des affaires et des sociétés, du droit du travail, du droit pénal, du droit civil des personnes et des biens, du droit des obligations et des contrats, du droit de la propriété intellectuelle et du droit des assurances.
                                </div>

                                <!-- masqué au départ -->
                                <div class="about-more-jml">
                                    <p>
                                        Implanté à Kinshasa (1, avenue O.U.A, Concession Procoki GB, quartier Basoko, Commune de Ngaliema), le cabinet est spécialisé en droit OHADA : droit des Sociétés Commerciales et du Groupement d’Intérêt Économique (AUSCGIE), organisation des sûretés, procédures simplifiées de recouvrement des créances et voies d’exécution (AUPSRVE), ainsi qu’en procédures collectives d’apurement du passif (AUPC).
                                    </p>

                                    <p>
                                        Dans un contexte juridique marqué par la complexité croissante des relations économiques et sociales et par l’aléa judiciaire de toute action contentieuse, nous apportons à nos clients une assistance juridique et judiciaire solide afin de sécuriser leurs échanges et protéger leurs intérêts.
                                    </p>

                                    <p>
                                        Notre intervention commence dès la rédaction ou la négociation des contrats : structuration des rapports entre parties, mise en place de clauses adaptées, évaluation des risques, conseil stratégique sur les sûretés, conventions, cessions de droits, octroi de crédit, etc. L’objectif est d’éviter le contentieux quand cela est possible, ou de le préparer de manière efficace quand il est inévitable.
                                    </p>

                                    <p>
                                        Grâce à une forte expérience tant en matière civile qu’en matière pénale, le cabinet assure la rédaction d’actes et contrats complets, le recouvrement de créances, l’assistance auprès des différents parquets et toute autre démarche nécessaire à la défense des intérêts de nos clients.
                                    </p>

                                    <p>
                                        Nous plaidons devant les juridictions civiles, commerciales et pénales, gérons les procédures de recouvrement forcé, les saisies et attributions de créances, les contestations, les plaintes pénales, ainsi que les audiences civiles et pénales.
                                    </p>
                                </div>

                                <button class="toggle-btn-jml" type="button" onclick="toggleAboutJml(this)">
                                    Voir plus
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="progress-left-img">
                            <img src="{{asset('assets/images/jml1.jpeg')}}" class="img-responsive" alt="">
                            <span><i class="fa fa-shield"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 2 : HISTOIRE -->
            <div role="tabpanel" class="tab-pane fade" id="tab-histoire">
                <div class="history-right-content">
                    <div class="col-sm-5 col-md-5 no-padding-right">
                        <div class="history-right-content-text">

                            <div class="about-section-jml">
                                <h3 class="about-title-jml">Notre histoire</h3>

                                <div class="about-intro-jml">
                                    JML & Associates est un cabinet d’avocats congolais, fondé à Kinshasa, qui s’est construit autour d’une pratique à la fois de conseil et de contentieux.
                                </div>

                                <div class="about-more-jml">
                                    <p>
                                        Le cabinet intervient autant en prévention qu’en résolution des litiges, dans l’intérêt direct et concret du client. Avec l’augmentation et la sophistication des échanges économiques, la négociation contractuelle est devenue un enjeu majeur. JML & Associates intervient dès l’origine des relations commerciales pour structurer des accords solides, sécuriser les engagements et limiter les risques futurs, y compris financiers.
                                    </p>

                                    <p>
                                        L’expérience du cabinet couvre les juridictions civiles, commerciales et pénales en République Démocratique du Congo : actions en recouvrement de créances, saisies et attributions de créances, contestations, plaintes pénales, audiences civiles et pénales.
                                    </p>

                                    <p class="about-location-jml">
                                        Adresse : 1, avenue O.U.A, Concession Procoki GB, quartier Basoko, Kinshasa – Ngaliema.
                                    </p>
                                </div>

                                <button class="toggle-btn-jml" type="button" onclick="toggleAboutJml(this)">
                                    Voir plus
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="progress-left-img">
                            <img src="{{asset('assets/images/jml1.jpeg')}}" class="img-responsive" alt="">
                            <span><i class="fa fa-shield"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 3 : VALEURS -->
            <div role="tabpanel" class="tab-pane fade" id="tab-valeurs">
                <div class="history-right-content">
                    <div class="col-sm-5 col-md-5 no-padding-right">
                        <div class="history-right-content-text">

                            <div class="about-section-jml">
                                <h3 class="about-title-jml">Valeurs & Philosophie</h3>

                                <div class="about-intro-jml">
                                    Notre pratique est guidée par cinq piliers : dynamisme, innovation, écoute, transparence et intégrité.
                                </div>

                                <div class="about-more-jml">
                                    <p><strong>Dynamisme.</strong> Un cabinet accessible et disponible, intervenant sur l’ensemble du territoire congolais, avec un suivi de proximité et une réactivité adaptée à chaque dossier.</p>

                                    <p><strong>Innovation.</strong> Une pratique moderne, orientée vers des solutions concrètes : conseil stratégique, médiation, négociation, représentation en justice — toujours en tenant compte du budget et des priorités du client.</p>

                                    <p><strong>Écoute.</strong> Comprendre le client, son secteur d’activité, ses enjeux et ses contraintes pour défendre efficacement ses intérêts dans un véritable esprit de partenariat.</p>

                                    <p><strong>Transparence.</strong> Les honoraires sont clarifiés dès l’ouverture du dossier (lettre de mission, convention d’honoraires). Le client est tenu informé de l’évolution de l’affaire.</p>

                                    <p><strong>Intégrité.</strong> Respect strict des principes déontologiques (secret professionnel, indépendance) afin de garantir une prestation de haute qualité.</p>
                                </div>

                                <button class="toggle-btn-jml" type="button" onclick="toggleAboutJml(this)">
                                    Voir plus
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="progress-left-img">
                            <img src="{{asset('assets/images/jml2.jpeg')}}" class="img-responsive" alt="">
                            <span><i class="fa fa-shield"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 4 : MISSION & SERVICES -->
            <div role="tabpanel" class="tab-pane fade" id="tab-mission">
                <div class="history-right-content">
                    <div class="col-sm-5 col-md-5 no-padding-right">
                        <div class="history-right-content-text">

                            <div class="about-section-jml">
                                <h3 class="about-title-jml">Mission & Services</h3>

                                <div class="about-intro-jml">
                                    Notre mission est d’assurer une défense et un accompagnement juridique personnalisés à chaque étape : conseil préventif, négociation, médiation, action judiciaire.
                                </div>

                                <div class="about-more-jml">
                                    <p>
                                        Le cabinet privilégie des solutions pragmatiques, réalistes et adaptées aux besoins concrets du client. Nous nous engageons à être accessibles et disponibles, à mesurer les moyens juridiques à déployer avec pragmatisme, et à proposer — lorsque c’est pertinent — des modes alternatifs de résolution des différends (médiation, actions collectives).
                                    </p>

                                    <p>
                                        La transparence fait partie de notre méthode : lettre de mission, estimation claire des honoraires, information régulière sur l’avancement du dossier, transmission des éléments essentiels afin que le client puisse décider en pleine connaissance de cause.
                                    </p>

                                    <p>
                                        Nous assurons un accompagnement personnalisé à tous les stades du dossier, en restant proches des réalités économiques, sociales et humaines de ceux que nous représentons.
                                    </p>
                                </div>

                                <button class="toggle-btn-jml" type="button" onclick="toggleAboutJml(this)">
                                    Voir plus
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="progress-left-img">
                            <img src="{{asset('assets/images/jml1.jpeg')}}" class="img-responsive" alt="">
                            <span><i class="fa fa-shield"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 5 : COMPÉTENCES -->
            <div role="tabpanel" class="tab-pane fade" id="tab-competences">
                <div class="history-right-content">
                    <div class="col-sm-5 col-md-5 no-padding-right">
                        <div class="history-right-content-text">

                            <div class="about-section-jml">
                                <h3 class="about-title-jml">Nos Compétences</h3>

                                <div class="about-intro-jml">
                                    Le cabinet est fondé et dirigé par Maître Joseph MANGA LOKOY, Avocat inscrit au Barreau de Kinshasa – Matete depuis février 2014.
                                </div>

                                <div class="about-more-jml">
                                    <p>
                                        Il est spécialisé en droit des affaires, en droit OHADA et dans les problématiques de recouvrement de créances et de contestation des saisies de créances. Titulaire d’un diplôme de niveau Bac +5 en droit économique et social (Université Protestante au Congo), il intervient notamment en :
                                        défense des clients devant les juridictions civiles et commerciales (préparation et plaidoiries en audience),
                                        rédaction, analyse et négociation des contrats,
                                        préparation et rédaction d’accords transactionnels.
                                    </p>

                                    <p>
                                        En matière pénale : rédaction de plaintes pénales, suivi des dossiers en instruction, assistance devant les parquets, représentation des parties civiles. Il intervient également en droit du travail et en droit des transports, notamment sur l’exécution du contrat, la rupture conventionnelle et le licenciement.
                                    </p>

                                    <p class="about-contact-jml">
                                        Contact : +243 813 852 447 / +243 858 584 729 — jmlassociates01@gmail.com
                                    </p>
                                </div>

                                <button class="toggle-btn-jml" type="button" onclick="toggleAboutJml(this)">
                                    Voir plus
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="progress-left-img">
                            <img src="{{asset('assets/images/jml2.jpeg')}}" class="img-responsive" alt="">
                            <span><i class="fa fa-shield"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 6 : RECONNAISSANCE -->
            <div role="tabpanel" class="tab-pane fade" id="tab-reconnaissance">
                <div class="history-right-content">
                    <div class="col-sm-5 col-md-5 no-padding-right">
                        <div class="history-right-content-text">

                            <div class="about-section-jml">
                                <h3 class="about-title-jml">Reconnaissance</h3>

                                <div class="about-intro-jml">
                                    Notre crédibilité repose d’abord sur la confiance de nos clients et la constance de nos résultats.
                                </div>

                                <div class="about-more-jml">
                                    <p>
                                        Le cabinet est reconnu pour sa réactivité, sa transparence et sa rigueur procédurale dans le suivi des dossiers, qu’il s’agisse de conseil stratégique ou de représentation devant les juridictions congolaises. Chaque affaire fait l’objet d’un traitement sérieux, maîtrisé et orienté vers un résultat concret. Pour nous, cette confiance renouvelée est la meilleure “distinction”.
                                    </p>
                                </div>

                                <button class="toggle-btn-jml" type="button" onclick="toggleAboutJml(this)">
                                    Voir plus
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="progress-left-img">
                            <img src="{{asset('assets/images/jml1.jpeg')}}" class="img-responsive" alt="">
                            <span><i class="fa fa-shield"></i></span>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.tab-content -->
    </div><!-- /.home-4-story-tab -->
</div><!-- /.row -->


<style>
    .about-section-jml {
        font-family: 'Poppins', sans-serif;
        color: #333;
        line-height: 1.6;
        max-width: 100%;
        margin-bottom: 20px;
    }

    .about-title-jml {
        color: #003366;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.3;
        text-transform: uppercase;
    }

    .about-intro-jml {
        font-size: 14px;
        margin-bottom: 15px;
        font-weight: 500;
        color: #222;
    }

    .about-more-jml {
        display: none;
        font-size: 13px;
        color: #444;
    }

    .about-section-jml.expanded .about-more-jml {
        display: block;
    }

    .about-section-jml.expanded .toggle-btn-jml {
        /* tu peux changer la couleur quand c'est ouvert si tu veux */
    }

    .toggle-btn-jml {
        background-color: #003366;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 13px;
        line-height: 1.4;
        margin-top: 12px;
        display: inline-block;
    }

    .toggle-btn-jml:hover {
        background-color: #0055aa;
    }

    .about-location-jml,
    .about-contact-jml {
        font-size: 13px;
        font-weight: 500;
        color: #000;
        margin-top: 15px;
        line-height: 1.5;
    }
</style>

<script>
    // Ce script marche pour tous les tabs.
    function toggleAboutJml(buttonEl) {
        const wrapper = buttonEl.closest('.about-section-jml');
        wrapper.classList.toggle('expanded');

        if (wrapper.classList.contains('expanded')) {
            buttonEl.textContent = 'Voir moins';
        } else {
            buttonEl.textContent = 'Voir plus';
        }
    }
</script>



<!-- ===== STYLE POUR ABOUT ===== -->
<style>
    .about-section-jml {
        font-family: 'Poppins', sans-serif;
        color: #333;
        line-height: 1.6;
        max-width: 100%;
    }

    .about-title-jml {
        color: #003366;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 10px;
        line-height: 1.3;
        text-transform: uppercase;
    }

    .about-subtitle-jml {
        color: #003366;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 10px;
        line-height: 1.4;
        text-transform: uppercase;
    }

    .about-intro-jml {
        font-size: 14px;
        margin-bottom: 15px;
        font-weight: 500;
    }

    /* bloc scrollable/replié (onglet 1) */
    .about-content-jml {
        max-height: 140px;        /* fermé */
        overflow: hidden;
        transition: max-height 0.4s ease;
        font-size: 13px;
        color: #444;
    }

    .about-section-jml.expanded .about-content-jml {
        max-height: 5000px;       /* ouvert */
    }

    .toggle-btn-jml {
        background-color: #003366;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 13px;
        line-height: 1.4;
        margin-top: 12px;
        display: inline-block;
    }

    .toggle-btn-jml:hover {
        background-color: #0055aa;
    }

    .about-location-jml,
    .about-contact-jml {
        font-size: 13px;
        font-weight: 500;
        color: #000;
        margin-top: 15px;
        line-height: 1.5;
    }
</style>

<!-- ===== SCRIPT POUR ABOUT (voir plus / voir moins onglet 1) ===== -->
<script>
    function toggleAboutJml(buttonEl) {
        const wrapper = buttonEl.closest('.about-section-jml');
        wrapper.classList.toggle('expanded');

        if (wrapper.classList.contains('expanded')) {
            buttonEl.textContent = 'Voir moins';
        } else {
            buttonEl.textContent = 'Voir plus';
        }
    }
</script>

    </section>

    @include("parties.team")
    @include("parties.article")
</section>
@endsection
