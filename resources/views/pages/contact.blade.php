@extends("template")

@section("content")
@include("parties.banner")

<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h3">Coordonnées</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Address:</span>@lang("info.contact.adresse")</p>
        </div>
        <div class="col-md-5">
          <p><span>Phone:</span> <a href="tel://1234567920">@lang("info.contact.phone")</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:@lang("info.contact.email")">@lang("info.contact.email")</a></p>
        </div>
      </div>
      <div class="row block-9 no-gutters">
        <div class="col-lg-6 order-md-last d-flex">
          <form action="#" id="formMessage" class="bg-light p-5 contact-form">
            @csrf
            <div class="form-group">
              <input type="text" name="nom" class="form-control" placeholder="Votre nom complet">
            </div>
            <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="Votre Email">
            </div>
            <div class="form-group">
                <input type="text" name="telephone" class="form-control" placeholder="Votre  numéro de téléphone">
            </div>
            <div class="form-group">
              <input type="text" name="objet" class="form-control" placeholder="L'objet">
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Votre Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Envoyer Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-lg-6 d-flex" style="background-image: url(assets/images/bg_2.jpg);">
            <div id="mapdd" class="bg-white">

            </div>
        </div>
      </div>
    </div>
  </section>
@endsection
