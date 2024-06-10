<section class="ftco-consultation ftco-section ftco-no-pt ftco-no-pb img"
    style="background-image: url(assets/images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-6 half p-3 py-5 pl-md-5 ftco-animate heading-section heading-section-white">
                <span class="subheading">Prendre rendez-vous</span>
                <h2 class="mb-4">Consultation gratuite</h2>
                <form action="#" id="formMessage" class="consultation">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control" placeholder="Votre Nom complet">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Votre  Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="telephone" class="form-control" placeholder="Votre  numéro de téléphone">
                    </div>
                    <div class="form-group">
                        <input type="text" name="objet" class="form-control" placeholder="L'Objet du message">
                    </div>
                    <div class="form-group">
                        <textarea name="message"  id="" cols="30" rows="7" class="form-control"
                            placeholder="Contenu du Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer message" class="btn btn-dark py-3 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>