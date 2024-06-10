<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">{{ config('app.name') }} <span>Cabinet d'avocat</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ Route::current()->getName()=="home"?"active":"" }}"><a href="{{ route('home') }}" class="nav-link">@lang("info.menu.home")</a></li>
          <li class="nav-item {{ Route::current()->getName()=="about"?"active":"" }}"><a href="{{ route('about') }}" class="nav-link">@lang("info.menu.about")</a></li>
          <li class="nav-item {{ Route::current()->getName()=="service"?"active":"" }}"><a href="{{ route('service') }}" class="nav-link">@lang("info.menu.service")</a></li>
          {{-- <li class="nav-item"><a href="practice-areas.html" class="nav-link">P</a></li> --}}
          <li class="nav-item {{ Route::current()->getName()=="blog"?"active":"" }}"><a href="{{ route('blog') }}" class="nav-link">@lang("info.menu.blog")</a></li>
          <li class="nav-item {{ Route::current()->getName()=="contact"?"active":"" }}"><a href="{{ route('contact') }}" class="nav-link">@lang("info.menu.contact")</a></li>
          <li class="nav-item  cta"><a href="{{ route('blog') }}" class="nav-link">@lang("info.menu.consultation")</a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
