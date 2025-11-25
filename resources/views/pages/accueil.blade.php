@extends("parties.template", ['titre' => __('info.titrepage.home')])


@section("content")

<!-- START REVOLUTION SLIDER 5.0 -->
<div class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
        <ul>
            @forelse($expertises as $ex)
                @php
                    $uid = 'rs-' . $loop->iteration;   // index unique par slide
                    $isEven = $loop->even;             // pair (index 0,2,4,..)
                    $isExpertise = (int)($ex->sorte ?? 0) === 1;
                    // Images de fond selon parité (adapte à ton besoin)
                    $bg = $isEven ? asset('img/slides/slide_1.jpg') : asset('img/slides/slide_3.jpg');
                    // Titre fallback
                    $titre = trim((string)($ex->titre1 ?? ''));
                @endphp

                <li
                    data-index="{{ $uid }}"
                    data-transition="parallaxtoright"
                    data-slotamount="default"
                    data-easein="default"
                    data-easeout="default"
                    data-masterspeed="default"
                    data-delay="6510"
                    data-rotate="0"
                    data-saveperformance="off"
                    data-title="Slide {{ $loop->iteration }}"
                    data-description=""
                >
                    {{-- IMAGE DE FOND --}}
                    <img
                        src="{{ $bg }}" alt="" width="2000" height="1333"
                        data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="off"
                        class="rev-slidebg" data-no-retina
                    >

                    {{-- LAYER 1 : Badges Expertise/Domaine --}}
                    <div
                        class="tp-caption Fashion-BigDisplay tp-resizeme rs-parallaxlevel-0"
                        id="slide-{{ $uid }}-layer-1"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['top','top','top','top']" data-voffset="['180','180','180','180']"
                        data-width="none" data-height="none" data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="x:-50px;opacity:0;s:500;e:Power2.easeInOut;"
                        data-transform_out="x:50px;opacity:0;s:500;s:500;"
                        data-start="700" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index:5; white-space:nowrap; font-size:17px; line-height:28px; font-weight:400; color:#f1f1f1; font-family:'Metropolis Light', sans-serif;"
                    >
                        <span>
                            @lang($isExpertise ? 'info.expertises.menu' : 'info.domaine.menu')
                        </span>
                    </div>

                    {{-- LAYER 2 : Titre principal (affiché seulement si non vide) --}}
                    @if($titre !== '')
                        <div
                            class="tp-caption Fashion-BigDisplay tp-resizeme rs-parallaxlevel-0"
                            id="slide-{{ $uid }}-layer-2"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['225','225','225','225']"
                            data-width="none" data-height="none"
                            data-fontsize="['50','40','40','25']" data-lineheight="['58','40','40','30']"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="x:50px;opacity:0;s:500;e:Power2.easeInOut;"
                            data-transform_out="x:-50px;opacity:0;s:500;s:500;"
                            data-start="1200" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on"
                            style="font-family:'Metropolis SemiBold',sans-serif; z-index:6; white-space:nowrap; font-size:50px; line-height:58px; font-weight:800; color:#fff;"
                        >
                            <div class="text-center heading-rp-small" style="text-transform:uppercase;">
                                {{ $titre }}
                            </div>
                        </div>
                    @endif

                    {{-- LAYER 3 : Petite ligne / déco --}}
                    <div
                        class="tp-caption tp-resizeme rs-parallaxlevel-0"
                        id="slide-{{ $uid }}-layer-3"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['top','top','top','top']" data-voffset="['364','364','364','364']"
                        data-width="none" data-height="none" data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:50px;opacity:0;s:500;e:Power2.easeInOut;"
                        data-transform_out="y:50px;opacity:0;s:500;s:500;"
                        data-start="1700" data-responsive_offset="on"
                        style="z-index:7;"
                    >
                        <img src="{{ asset($isEven ? 'assets/images/line-slider.jpg' : 'assets/images/line-white.jpg') }}"
                             alt="" width="{{ $isEven ? 2 : 384 }}" height="{{ $isEven ? 34 : 2 }}"
                             data-no-retina>
                    </div>

                    {{-- LAYER 4 : Bouton --}}
                    <div
                        class="tp-caption small_text tp-resizeme rs-parallaxlevel-0"
                        id="slide-{{ $uid }}-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['top','top','top','top']" data-voffset="['428','428','428','428']"
                        data-width="none" data-height="none" data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:50px;opacity:0;s:500;e:Power2.easeInOut;"
                        data-transform_out="y:50px;opacity:0;s:500;s:500;"
                        data-start="2200" data-splitin="none" data-splitout="none"
                        data-responsive_offset="on" style="z-index:8; white-space:nowrap;"
                    >
                        <a class="btn btn-primary rev-slider-btn-1" href="{{ route('detailExpertise', $ex->slug ?? $ex->id) }}">
                            En savoir plus
                        </a>
                    </div>

                    {{-- (Optionnel) LAYER 5 : Texte descriptif — enlever "hidden-xs" si tu veux l’afficher en mobile --}}
                    @if(!empty($ex->description))
                        <div
                            class="tp-caption Fashion-BigDisplay tp-resizeme rs-parallaxlevel-0"
                            id="slide-{{ $uid }}-layer-5"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['404','404','404','404']"
                            data-width="none" data-height="none" data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="x:-50px;opacity:0;s:500;e:Power2.easeInOut;"
                            data-transform_out="x:50px;opacity:0;s:500;s:500;"
                            data-start="2100" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on"
                            style="z-index:11; white-space:nowrap; font-size:17px; line-height:26px; font-weight:400; color:#e5e4e4; font-family:'Metropolis Light', sans-serif;"
                        >
                            <div class="text-center">{{ $ex->description }}</div>
                        </div>
                    @endif
                </li>
            @empty
                {{-- Slide de fallback si aucune donnée --}}
                <li data-index="rs-empty" data-transition="fade">
                    <img src="{{ asset('img/slides/slide_1.jpg') }}" class="rev-slidebg" alt="">
                    <div class="tp-caption" id="slide-empty-layer-1"
                         data-x="center" data-y="center" data-voffset="-20"
                         data-start="600" style="color:#fff; font-size:42px; font-weight:700;">
                        @lang('Aucun contenu disponible')
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
</div>


<!-- START COUNTDOWN -->
<div class="countdown">
    <div class="container">
        <div class="row no-margin">
            <div class="clearfix countdown-inner">
                <div class="col-xs-12 col-sm-6 col-md-3 no-padding">
                    <div class="countdown-content">
                        <h2><span class="counter">{{ number_format($avocat->count() ?? 0, 0, ',', ' ') }}</span>+</h2>
                        <p>Avocats qualifiés</p>
                    </div>
                    <div class="countdown-icon">
                        <i class="icon icon-Users"></i>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 no-padding">
                    <div class="countdown-content">
                        <h2><span class="counter">{{ number_format(82 ?? 0, 0, ',', ' ') }}</span>+</h2>
                        <p>Clients accompagnés</p>
                    </div>
                    <div class="countdown-icon">
                        <i class="icon icon-Briefcase"></i>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 no-padding">
                    <div class="countdown-content">
                        <h2><span class="counter">{{ number_format(115 ?? 0, 0, ',', ' ') }}</span>+</h2>
                        <p>Dossiers remportés</p>
                    </div>
                    <div class="countdown-icon">
                        <i class="icon icon-Column"></i>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 no-padding">
                    <div class="countdown-content">
                        <h2><span class="counter">{{ number_format(7 ?? 0, 0, ',', ' ') }}</span>+</h2>
                        <p>Distinctions &amp; récompenses</p>
                    </div>
                    <div class="countdown-icon">
                        <i class="icon icon-Medal"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end countdown -->

<!-- =========================
         START STORY SECTION
        ============================== -->

<section class="welcome-area">
    <div class="welcome-title-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="Title-area">
                        <h3>Bienvenue</h3>
                        <h2>Bienvenue chez {{config('app.name')}}</h2>
                        <p>
                            {{config('app.name')}} est un cabinet d’avocats dédié aux conseils et contentieux, au
                            service
                            des entreprises et des particuliers. Nos avocats et juristes interviennent
                            en conseil, médiation et représentation devant les juridictions, dans tous
                            les domaines du droit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end title. it will use all pages title -->

    <div class="wellcome-asset">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="asset-content">
                        <h2>Notre histoire<br>&amp; notre parcours <span>01.</span></h2>
                        <p>
                            Fondé comme cabinet individuel au service de la communauté locale, {{config('app.name')}}
                            réunit aujourd’hui une équipe pluridisciplinaire d’avocats offrant une
                            représentation juridique exigeante et sur-mesure.
                        </p>
                        <a href="{{ route('about') }}">En savoir plus <span><i
                                    class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="asset-content">
                        <h2>Nos valeurs<br>&amp; notre philosophie <span>02.</span></h2>
                        <p>
                            Vérité, justice, responsabilité et égal accès au droit : ces principes
                            guident notre pratique quotidienne. Notre réussite repose sur
                            l’expertise de chaque avocat et la rigueur de notre équipe.
                        </p>
                        <a href="{{ route('about') }}">En savoir plus <span><i
                                    class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="asset-content">
                        <h2>Notre mission<br>&amp; nos services <span>03.</span></h2>
                        <p>
                            Nous traitons des dossiers complexes avec une approche stratégique,
                            défendons vos intérêts en demande comme en défense, et assurons un
                            accompagnement complet en conseil, négociation et contentieux.
                        </p>
                        <a href="{{ route('about') }}">En savoir plus <span><i
                                    class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center asset-button">
                    <button type="button" class="btn btn-default"
                        onClick="location.href='{{ route('about') }}'">Découvrir {{config('app.name')}}</button>
                </div>
            </div>
        </div>
    </div>
</section>

</div><!-- END OF SLIDER WRAPPER -->

<!-- =========================
         START PRACTICE SECTION
        ============================== -->
<section class="practice-area type-1-bg">
    <div class="welcome-title-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="Title-area">
                        <h3>Nos services</h3>
                        <h2>Notre expertise</h2>
                        <p>
                            Chez {{config('app.name')}}, nous proposons un large éventail de services juridiques.
                            Nous intervenons en droit civil général au service des entreprises, des particuliers
                            et des collectivités. Ce cabinet est parfaitement adapté aux besoins de conseil et
                            d’assistance des juristes d’entreprise, avocats, conseils et praticiens du droit,
                            ainsi qu’à l’ensemble des services liés aux matières juridiques.
                        </p>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="text-right asset-button btn-text-left top-margin">
                        <button type="button" onClick="location.href='{{ route('expertise') }}'"
                            class="btn btn-default">Voir plus</button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end title. it will use all pages title -->

    <!-- start practice content area -->
    <div class="container">
        <div class="row">
            <div class="clearfix h-2-practice-content">
                @forelse ( $expertises as $a)
                    @php
                        $html = $a->getTranslation('contenu', 'fr');

                        libxml_use_internal_errors(true);
                        $dom = new DOMDocument();
                        $dom->loadHTML('<?xml encoding="utf-8" ?>'. $html);
                        libxml_clear_errors();

                        $pNodes = $dom->getElementsByTagName('p');

                        $firstParagraphHtml = $pNodes->length
                        ? $dom->saveHTML($pNodes->item(0))
                        : '<p>' . \Illuminate\Support\Str::limit(strip_tags($html), 200) ." ..." . '</p>';
                    @endphp
                <div class="col-sm-6 col-md-3">
                    <div class="h-2-p-c-details">
                        <div class="h-2-p-c-default h-3-p-c-default">
                            <img src="{{file_exists('storage/'.$a->photo)?asset("storage/".$a->photo):asset('img/def.jpeg') }}" class="img-responsive"
                                alt="">
                            <h2><a href="#">{{ $a->titre1 }}</a></h2>
                            {{-- {!! $firstParagraphHtml!!} --}}
                            <a href="{{route('detailExpertise',['id'=>$a->id])}}">Voire en details <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </div>
</section> <!-- end practice area -->


@include("parties.team")

@include("parties.article")
@include("parties.contact")
<!-- end testimonial area -->
@endsection
