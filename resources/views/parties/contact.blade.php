<section class="contact-us">
    <div class="welcome-title-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="Title-area contact-title">
                        <h3>N'hésitez pas à demander.</h3>
                        <h2>Consultation gratuite</h2>
                        <p>"N'hésitez pas à nous contacter pour toute question, et l'un de nos membres du personnel sympathique vous répondra dès que possible. Nous sommes là pour vous aider !"</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end title. it will use all pages title -->
    <div class="container">
        <div class="show_result light"></div>
        <div class="result_message"></div>
    </div>
    <div class="contact-form">
        <div class="container contact-bg no-padding">
            <form id="formMessage">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nom" id="Name" placeholder="Votre nom complet">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" id="Email" placeholder="Votre Email">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="telephone" id="Subject" placeholder="Votre numéro de téléphone">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="objet" id="Subject" placeholder="Le sujet">
                    </div>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="5" name="message" id="Message" placeholder="Votre message"></textarea>
                    </div>
                    <div class="col-sm-4 col-md-3 c-c-padding">
                        <button type="button" id="contact_submit" class="btn btn-dm">Envoyer</button>
                    </div>
                    <div class="col-sm-8 col-md-9">
                        <div class="form-right-text">
                            <p>Remplissez le formulaire ci-dessus pour recevoir une consultation initiale gratuite et confidentielle. Ne vous inquiétez pas, nous ne partageons jamais vos informations ni ne les utilisons pour vous envoyer du spam.</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
