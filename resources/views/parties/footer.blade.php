{{-- <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    <div class="container">
      <div class="row d-flex justify-content-end">
          <div class="col-md-9 py-4 px-md-4 bg-primary">
              <div class="row">
                <div class="col-md-6 ftco-animate d-flex align-items-center">
                  <h2 class="mb-0" style="color:white; font-size: 24px;">Abonnez-vous à notre newsletter</h2>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Entrer votre email">
                      <input type="submit" value="S'abonner" class="submit px-3">
                    </div>
                  </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section> --}}
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="logo"><a href="{{ route('home') }}"> {{ config('app.name') }}<span>Cabinet d'avocats</span></a></h2>
            <p>{{ Str::limit(__("info.content.mission"), 100, '...') }}</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              {{-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li> --}}
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Domaines d'intervention</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>@lang("info.services.droit")</a></li>
              <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>@lang("info.services.banc")</a></li>
              <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>@lang("info.services.droitf")</a></li>
              <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>@lang("info.services.droittr")</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Coordonnées</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">@lang("info.contact.adresse")</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">@lang("info.contact.phone")</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">@lang("info.contact.email")</span></a></li>
                </ul>
              </div>
          </div>
        </div>
        {{-- <div class="col-md">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Heures de travail</h2>
            <div class="opening-hours">
                <h4>Jours ouvrable:</h4>
                <p class="pl-3">
                    <span>Monday – Friday : 9am to 20 pm</span>
                    <span>Saturday : 9am to 17 pm</span>
                </p>
                <h4>Vacations:</h4>
                <p class="pl-3">
                    <span>All Sunday Days</span>
                    <span>All Official Holidays</span>
                </p>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> {{ config('app.name') }} | Designed <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://silasmas.com" target="_blank">Sdev</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
