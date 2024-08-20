<header class="header-area navbar-fixed-top">
    <div class="container custom-header">
        <div class="row">
            <div id="menuzord" class="menuzord">
                <a href="{{ route('home') }}" class="menuzord-brand">
                    <img src="{{ asset('assets/images/jml1.png') }}" width="150" height="70" alt="">
                    <span>We provide legal solutions <br>for you !</span>
                </a>

                <div class="header-contact">
                    <ul>
                        <li><span>Phone :</span>@lang("info.contact.phone")</li>
                        <li><span>Email :</span>@lang("info.contact.email")</li>
                        <li><a href="#">@lang("info.menu.consultation")</a></li>
                    </ul>
                </div>

                <div class="header-search">
                    <ul>
                        <li class="add-to-cart"><a href="#"><i class="fa fa-globe"></i></a></li>
                        <li><a href="#"> {{ App::currentLocale()}}</a></li>
                    </ul>
                    <div class="add-to-cart-content">
                        <div class="recent-post shop-right-thumb">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <h3>
                                <a href="" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                    class="{{App::currentLocale() ===$localeCode?" active":""}}">
                                    {{ $properties['native']}}
                                </a>
                            </h3>
                            @endforeach
                        </div>
                    </div>
                </div>

                <ul class="menuzord-menu menuzord-menu-bg">
                    <li class="{{ Route::current()->getName()=="home"?"active":""}}"><a href="{{ route('home') }}">@lang("info.menu.home")</a></li>
                    <li class="{{ Route::current()->getName()=="about"?"active":""}}"><a href="{{ route('about') }}">@lang("info.menu.about")</a></li>
                    <li class="{{ Route::current()->getName()=="expertise"?"active":""}}">
                        <a href="{{ route('expertise') }}">@lang("info.menu.service")</a>
                        <div class="megamenu megamenu-half-width megamenu-bg">
                            <div class="megamenu-row">
                                <div class="mega-item col6">
                                    <ul>
                                        <h3 class="mt-5 text-white" style="color: #fff;padding-top: 6px">
                                        <b>
                                            @lang('info.expertises.menu')
                                        </b>
                                    </h3><br>
                                        @if (!$secteur->isEmpty())
                                            @forelse ($secteur as $sec)
                                            <li><a href="{{ route('detailExpertise',['id'=>$sec->id,'p'=>$sec->titre1]) }}">{{
                                                    $sec->titre1 }}</a></li>
                                            @empty

                                            @endforelse
                                        @endif
                                    </ul>
                                </div>
                                <div class="mega-item col6">
                                    <ul><h3 class="text-white" style="color: #fff">
                                    <b>
                                        @lang('info.domaine.menu')
                                    </b>
                                    </h3>
                                        @if (!$domaine->isEmpty())
                                    @forelse ($domaine as $sec)
                                    <li><a href="{{ route('detailExpertise',['id'=>$sec->id,'p'=>$sec->titre1]) }}">{{
                                            $sec->titre1 }}</a></li>
                                    @empty

                                    @endforelse
                                @endif

                                    </ul>
                                </div>
                                {{-- <div class="mega-item col4">
                                    <ul>
                                        <li><a href="home-11.html">Homepage 11</a></li>
                                        <li><a href="home-12.html">Homepage 12</a></li>
                                        <li><a href="home-13.html">Homepage 13</a></li>
                                        <li><a href="home-14.html">Homepage 14</a></li>
                                        <li><a href="home-15.html">Homepage 15</a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </li>
                    <li class="{{ Route::current()->getName()=="team"?"active":""}}"><a href="{{ route('team') }}">@lang("info.menu.team")</a></li>
                    <li class="{{ Route::current()->getName()=="publication"?"active":""}}"><a href="{{ route('publication') }}">@lang("info.menu.blog")</a></li>
                    <li class="{{ Route::current()->getName()=="contact"?"active":""}}"><a href="{{ route('contact') }}">@lang("info.menu.contact")</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
