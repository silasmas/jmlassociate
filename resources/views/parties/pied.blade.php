
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets/js/jquery.min.js') }} "></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }} "></script>
  <script src="{{ asset('assets/js/popper.min.js') }} "></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }} "></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }} "></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }} "></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }} "></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }} "></script>
  <script src="{{ asset('assets/js/aos.js') }} "></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }} "></script>
  <script src="{{ asset('assets/js/scrollax.min.js') }} "></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('assets/js/google-map.js') }} "></script>
  <script src="{{ asset('assets/js/main.js') }} "></script>
  <script  src="{{ asset('assets/custom/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <script>
              $("#formMessage").on("submit", function (e) {
                    e.preventDefault();
                    var formElement = document.getElementById('formMessage');
                    addAll(formElement, 'POST', 'sendMessage',"#formMessage")
                });

                function addAll(form, mothode, url,idf) {
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var f = form;
                    var u = url;
                    var idform = idf;
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })
                        //  console.log($(form).serialize())
                    $.ajax({
                        url: u,
                        method: mothode,
                        data: $(f).serialize(),
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function (data) {
                            if (!data.reponse) {
                                var errorMessage = '';
                            $.each(data.errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                                Swal.fire({
                                    title: data.msg+" : "+errorMessage,
                                    icon: 'error'
                                })
                            } else {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })

                                $(idform)[0].reset();
                                // actualiser();
                            }

                        },
                        error: function(xhr, status, error){
                            // alerte("ok")
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            $.each(errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                             // Afficher les erreurs de validation à l'utilisateur
                                Swal.fire({
                                    title: xhr.msg,
                                    html: errorMessage,
                                        icon: 'error'
                                    })
                            }
                    });
                }
                //
                function actualiser() {
                    location.reload();
                }
    </script>
  </body>
</html>
