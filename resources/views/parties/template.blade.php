<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}} | {{isset($titre)?$titre:""}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/favicon.png') }}" />
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }} " rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }} " rel="stylesheet">
    <!-- ICON STROKE -->
    <link href="{{ asset('assets/css/icon-stroke.css') }} " rel="stylesheet">
    <!-- MENU -->
    <link rel="stylesheet" href="{{ asset('assets/css/menuzord.css') }} ">
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }} ">
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }} ">
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }} ">
    <!-- Portfolio Filter -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootFolio.css') }} ">
    <!-- Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }} ">
    <!-- Default Theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }} ">
    <!-- JQUERY UI STYLE -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }} ">
    <!-- MAIN STYLE -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/custom/sweetalert2/dist/sweetalert2.min.css') }}">

    <!-- GOOGLE FONT -->
    {{--
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet'
        type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">

    <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>

    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }} ">
    </script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }} "></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }} "></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }} "></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }} "></script>
    <script type="text/javascript"
        src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }} "></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- =========================
     START PRELOADER
    ============================== -->
    <div class="outslider_loading">
        <div class="outslider_loader"></div>
    </div>

    <!-- =========================
     END PRELOADER
    ============================== -->

    <!-- =========================
     START WELCOME SECTION
    ============================== -->
    <div class="full-page-search">
        <form action="#">
            <input type="text" name="googlesearch" placeholder="Type Words Then Press Enter To Search">
            <input type="submit" id="searchsubmit" value="Search">
        </form>
        <div class="sr-overlay"></div>
    </div>

    @include("parties.menu")

    @yield("content")



    <!-- =========================
     START FOOTER SECTION
    ============================== -->

    <footer class="footer-area">
        <div class="footer-head">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <div class="f-h-content">
                            <h3>Appelez-nous maintenant </h3>
                            <h2>@lang("info.contact.phone")</h2>
                            <p><a href="#">24/7 Disponible</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="f-h-content">
                            <h3>Ecrivez-nous</h3>
                            <h2>@lang("info.contact.email")</h2>
                            <p><a href="#">24/7 Disponible</a></p>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-5">
                        <div class="f-h-content">
                            <h3>Nos bureaux !</h3>
                            <h2>@lang("info.contact.adresse")</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="f-first-content f-all-h2">
                            <div class="f-content-img">
                                <a href="#"><img width="100" height="100" src="{{ asset('assets/images/jml2.png') }}"
                                        alt="f-image"></a>
                            </div>
                            <p>@lang("info.contact.slogant")</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="f-second-content f-all-h2">
                            <h2>Business Hours</h2>
                            <ul>
                                <li><a href="#">Opining Days :</a></li>
                                <li><a href="#">Monday – Friday : 9am to 20 pm</a></li>
                                <li><a href="#">Saturday : 9am to 17 pm</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Vacations :</a></li>
                                <li><a href="#">All Sunday Days</a></li>
                                <li><a href="#">All Official Holidays</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="f-third-content f-all-h2">
                            <h2>@lang("info.m3")</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>@lang("info.m3")</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>@lang("info.m3")</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>@lang("info.m3")</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>@lang("info.m3")</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>@lang("info.m3")</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i>@lang("info.m3")</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="f-fourth-content f-all-h2">
                            <h2>Newsletter</h2>
                            <p>Don’t miss to subscribe to our news feeds, kindly fill the form below.</p>
                            <form>
                                <div class="form-group footer-subscribe">
                                    <input type="email" class="form-control" id="Email1"
                                        placeholder="Subscribe In Our Newsletter">
                                    <button type="submit" class="btn btn-default">Join</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="clearfix footer-bottom">
                    <div class="col-md-6 col-sm-6 no-padding-left">
                        <div class="f-bottom-left-text">
                            <p>JML © All Rights Reserved. Design by <span><a target="blank"
                                        href="silasmas.com">SDev</a></span> </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 no-padding-right">
                        <div class="f-bottom-right-text">
                            <ul>
                                <li><a href="">Blog</a></li>
                                <li><a href="{{ route('about') }}">JML</a></li>
                                <li><a href="{{ route('expertise') }}">@lang("info.m3")</a></li>
                                <li><a href="{{ route('team') }}">@lang("info.m4")</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Include owl-carousel js plugin -->
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/menuzord.js') }} "></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ asset('assets/js/jquery.bootFolio.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('assets/js/rev-slider.js')}}"></script>
    <script  src="{{ asset('assets/custom/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
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
    </script>
</body>

</html>
