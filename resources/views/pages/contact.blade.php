@extends("parties.template",['titre'=>__('Contactez-nous')])


@section("content")

@include("parties.baniere")

<!-- =========================
     SECTION NOUS CONTACTER
============================== -->

<section class="contact-us-1">
  <div class="welcome-title-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="Title-area">
            <h3>Entrer en contact</h3>
            <h2>Nous contacter – Cabinet JML</h2>
            <p>N’hésitez pas à nous écrire : un membre de notre équipe vous répondra dans les plus brefs délais. Le Cabinet JML est à votre écoute pour toute question juridique ou prise de rendez-vous.</p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- fin du titre utilisé sur toutes les pages -->

  <div class="contact-us-1-area">
    <div class="container">
      <div class="row">
        <div class="show_result"></div>
        <div class="result_message"></div>

        <div class="col-sm-6 col-md-8 no-padding">
          <div class="contact-us-1-form clearfix">
            <form id="contactForm" novalidate>
    @csrf
    <!-- Honeypot anti-bot -->
    <input type="text" name="website" id="website" style="display:none !important; visibility:hidden;" tabindex="-1" autocomplete="off">

    <div id="contact-alert" class="alert" style="display:none"></div>

    <div class="col-sm-6 no-padding-left">
        <input type="text" class="form-control" name="nom" id="Name" placeholder="VOTRE NOM">
        <small class="text-danger d-block mt-1" data-error="nom"></small>
    </div>
    <div class="col-sm-6 no-padding-right">
        <input type="email" class="form-control" name="email" id="Email" placeholder="ADRESSE E-MAIL">
        <small class="text-danger d-block mt-1" data-error="email"></small>
    </div>
    <div class="col-sm-12 no-padding contact-us-custom-padding">
        <input type="text" class="form-control" name="sujet" id="Subject" placeholder="OBJET DE VOTRE MESSAGE">
        <small class="text-danger d-block mt-1" data-error="sujet"></small>
    </div>
    <div class="col-sm-12 no-padding contact-us-custom-padding">
        <textarea class="form-control" rows="8" name="message" id="Message" placeholder="VOTRE MESSAGE"></textarea>
        <small class="text-danger d-block mt-1" data-error="message"></small>
    </div>
    <div class="col-sm-12 no-padding contact-us-custom-padding">
        <button type="button" id="contact_submit" class="btn btn-dm">ENVOYER MA DEMANDE</button>
    </div>
</form>

          </div>
        </div>

        <div class="col-sm-6 col-md-4 no-padding-right">
          <div class="address-area">
            <!-- texte d’introduction -->
            <div class="Title-area home-8-title-area contact-1-title-area">
              <p>Le Cabinet JML accompagne particuliers et entreprises : conseil, contentieux et médiation. Notre priorité : une expertise fiable, un suivi réactif et des solutions sur-mesure.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="address-details">
              <span>Téléphone&nbsp;:</span>
              <span><i class="fa fa-phone"></i>{{ collect($phones)->pluck('value')->filter()->implode(' - ') }}</span> <!-- Remplace par le n° JML -->

            </div>
          </div>

          <div class="col-md-6">
            <div class="address-details">
              <span>E-mail&nbsp;:</span>
              <span><i class="fa fa-envelope"></i>{{$home->email}}</span> <!-- Remplace par l’e-mail JML -->
            </div>
          </div>

          <div class="view-location">
            <span>Adresse&nbsp;:</span>
            <span><i class="fa fa-map-marker"></i>@lang("info.contact.adresse")</span> <!-- Remplace par l’adresse JML -->
            <a href="#">Voir l’emplacement sur la carte</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> <!-- fin de la zone contact -->

<!-- CARTE -->
{{-- <div id="map"></div> --}}

@endsection
