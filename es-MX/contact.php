<!doctype html>
<html lang="es">

<?php
session_start();

// Verifica si existe el valor de utm_source en la sesión
if (isset($_SESSION['utm_source'])) {
    $utmSource = $_SESSION['utm_source'];
} else {
    $utmSource = 'n-a';
}

// Verifica si existe el valor de utm_medium en la sesión
if (isset($_SESSION['utm_medium'])) {
    $utmMedium = $_SESSION['utm_medium'];
} else {
    $utmMedium = 'n-a';
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Impulsa tu estrategia de ventas con DragonCEM. Obtén insights valiosos sobre el potencial de tus leads, prioriza tus acciones comerciales y optimiza tus resultados. Descubre el poder de la gestión inteligente de leads y lleva tu negocio al siguiente nivel">
    <meta name="author" content="API Digital">
    <link rel="canonical" href="https://www.dragoncem.com/contact.php" />
    <link rel="icon" href="../dragonico.png" />
    <title>DragonCEM | Contact - MX</title>
    <meta property="og:locale" content="es_MX" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="DragonCEM | Contact - MX" />
    <meta property="og:description" content="Impulsa tu estrategia de ventas con DragonCEM. Obtén insights valiosos sobre el potencial de tus leads, prioriza tus acciones comerciales y optimiza tus resultados. Descubre el poder de la gestión inteligente de leads y lleva tu negocio al siguiente nivel" />
    <meta property="og:url" content="https://www.dragoncem.com" />
    <meta property="og:site_name" content="DragonCEM" />
    <meta property="og:image" content="../img/meta/Dragon-meta.png" />
    <meta property="og:image:width" content="1800" />
    <meta property="og:image:height" content="900" />
    <meta property="og:image:type" content="../image/jpeg" />
    <!-- <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@coodiv" /> -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-03SBY7N3LQ');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 471463963 --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-471463963"></script> 

    <script> 
    window.dataLayer = window.dataLayer || []; function gtag(){
        dataLayer.push(arguments);
    } 
    gtag('js', new Date()); gtag('config', 'AW-471463963'); 
    </script>

    <script> 
    gtag('config', 'AW-471463963/L6G4CNvW2tsCEJvw5-AB', { 
        'phone_conversion_number': '55 41 61 17 91' 
    }); 
    </script>

    <!-- Bootstrap , fonts & icons -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../icons-pack/fontawesome-5/css/all.css" rel="stylesheet" />


    <!-- main css file -->
    <link href="../css/main.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdLk7EUAAAAAEWHuB2tabMmlxQ2-RRTLPHEGe9Y"></script> -->

</head>

<body><!-- start body -->


    <div class="preloader">
        <!-- start preloader -->
        <div class="preloader-container">
            <svg version="1.1" id="L5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                <circle fill="#003462" stroke="none" cx="6" cy="50" r="6">
                    <animateTransform attributeName="transform" dur="1s" type="translate" values="0 15 ; 0 -15; 0 15"
                        repeatCount="indefinite" begin="0.1" />
                </circle>
                <circle fill="#19D3C5" stroke="none" cx="30" cy="50" r="6">
                    <animateTransform attributeName="transform" dur="1s" type="translate" values="0 10 ; 0 -10; 0 10"
                        repeatCount="indefinite" begin="0.2" />
                </circle>
                <circle fill="#FF6C0E" stroke="none" cx="54" cy="50" r="6">
                    <animateTransform attributeName="transform" dur="1s" type="translate" values="0 5 ; 0 -5; 0 5"
                        repeatCount="indefinite" begin="0.3" />
                </circle>
            </svg>
            <span style="color:#003462; 
            font-family: 'Montserrat', sans-serif; 
            font-size:18px; 
            font-weight: 600;">Cargando</span>
        </div>
    </div>
    <!-- end preloader -->

    <div id="coodiv-header" class="d-flex mx-auto flex-column subpages-header moon-edition">

        <!-- Icono whatsapp flotante -->
        <a href="https://dcem.mx/mxr5" target="_blank" class="whatsapp-icon">
            <img src="../img/WhatsApp.png">
        </a>

        <div class="bg_overlay_header">
            <div id="particles-bg"></div>
            <div class="cloud-bg"></div>
            <div class="bg-img-header-new-moon">&nbsp;</div>
        </div>
        <!-- Fixed navbar -->
        <nav id="coodiv-navbar-header" class="navbar navbar-expand-md fixed-header-layou top-header-fixed">
            <div class="container main-header-coodiv-s">
                <a class="navbar-brand" href="index.php">
                    <img class="w-logo" src="../img/header/logo.png" alt="" />
                    <img class="b-logo" src="../img/header/logo.png" alt="" />
                </a>
                <button class="navbar-toggle offcanvas-toggle menu-btn-span-bar ml-auto" data-toggle="offcanvas"
                    data-target="#offcanvas-menu-home">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse navbar-offcanvas" id="offcanvas-menu-home">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mega-menu demos-dropdown dropdown">
                            <a class="nav-link" href="index.php#conexion">Conexión</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php#asignacion">Asignación</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php#integracion">Integración</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php#whatsapp">WhatsApp</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php#servicio">Servicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about-us.php">Nosotros</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="#">Contáctanos</a>
                        </li>
                    </ul>
                </div>
                <ul class="header-user-info-coodiv">
                    <li class="dropdown">
                        <a role="button" id="header-login-dropdown" aria-haspopup="true" aria-expanded="false"
                            target="_blank" href="https://app.dragoncem.com/login.php">Aplicación Web</a>
                        <!-- user header dropdown -->
                        <div class="dropdown-menu coodiv-dropdown-header user-login-dropdown"
                            aria-labelledby="header-login-dropdown">
                            <form class="user-login-dropdown-form" action="signin.php" data-form="validate">
                                <div class="form-group username">
                                    <input type="email" name="username" placeholder="Your Email" class="form-control" />
                                    <i class="fal fa-at"></i>
                                </div>

                                <div class="form-group password">
                                    <input type="password" name="password" placeholder="Password"
                                        class="form-control" />
                                    <i class="fal fa-lock"></i>
                                </div>

                                <button data-toggle="tooltip" data-placement="left" title="login"
                                    class="user-login-dropdown-form-button" type="submit"><i
                                        class="fas fa-angle-right"></i></button>
                            </form>
                        </div>
                        <!-- end user header dropdown -->
                    </li>
                </ul>
            </div>
        </nav>

        <main class="container mt-25">

            <div class="row">
                <div class="col-md-5 pt-15">
                    <span class="main-header-top-title">¿tienes preguntas acerca de DragonCEM?</span>
                    <h3 class="mt-3 contact-us-hero-title coodiv-text-3" style="color:#003462;">Ponte en contacto con
                        nostros.</h3>
                    <div class="contact-us-social-icons">
                        <a class="fb" href="https://www.facebook.com/search/top?q=dragoncem" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="tw" href="https://www.instagram.com/dragoncemmx/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a class="yb" href="https://www.linkedin.com/company/dragon-cem/mycompany/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-md-7">
                    <form class="row form-contain-home contact-page-form-send" id="ajax-contact" method="post"
                        action="../mailer.php">
                        <!-- start form -->
                        <h5>Contáctanos<span>La tecnología avanza, ¿y tú?</span>
                            <span>Únete a nosotros y mantente siempre un paso adelante</span>
                        </h5>
                        <div id="form-messages"></div>
                        <!-- form message -->

                        <div class="col-md-12">
                            <!-- start col -->
                            <div class="field input-field">
                                <input class="form-contain-home-input" type="text" id="name" name="name"
                                    placeholder="Nombre" required>
                                <!-- input -->
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-md-12">
                            <!-- start col -->
                            <div class="field input-field">
                                <input class="form-contain-home-input" type="email" id="email" name="email"
                                    placeholder="Email" required>
                                <!-- input -->
                                <i class="far fa-envelope"></i>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-md-12">
                            <!-- start col -->
                            <div class="field input-field">
                                <input class="form-contain-home-input" type="tel" id="tel" name="tel"
                                    placeholder="Teléfono" required>
                                <!-- input -->
                                <i class="far fa-phone"></i>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-md-12">
                            <!-- start col -->
                            <div class="field input-field">
                                <textarea class="form-contain-home-input" id="message" name="message"
                                    placeholder="Comentarios..." required></textarea>
                                <!-- textarea -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="btn-holder-contect">
                            <button type="submit">Enviar</button>
                            <!-- submit button -->
                        </div>

                    </form>
                    <!-- end form -->
                    <!-- end form -->
                    <!-- <script>
                        $('#newLead').submit(function(event) {
                            event.preventDefault();
                            var email = $('#email').val();
                            grecaptcha.ready(function() {
                                grecaptcha.execute('6LeTJyomAAAAAB-x0J8d73sy3lQD_q3HI6InY63g', {action: 'mailer'}).then(function(token) {
                                    $('#newLead').prepend('<input type="hidden" name="token" value="' + token + '">');
                                    $('#newLead').prepend('<input type="hidden" name="action" value="mailer">');
                                    $('#newLead').unbind('submit').submit();
                                });;
                            });
                      });
                    </script> -->
                </div>
            </div>

        </main>
    </div>

    <div id="mobile-form-contact-height"></div>
    <section class="padding-20-0 mob-display-none">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-5">
                    <h5 class="immediate-help-center-title">Obtén una cotización personalizada</h5>
                    <p class="immediate-help-center-text">llama a:</p>
                    <a class="immediate-help-center-link"
                        href="tel:+525568269661">5568269661</a><br></br></br></br></br><br>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-25 position-relative">
        <div class="container">
        </div>
    </section>

    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-12 quiq-links-footer">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-4">
                            <h5 class="quiq-links-footer-title">Conoce más</h5>
                            <ul class="quiq-links-footer-ul">
                                <li><a href="index.php#conexion">Conexión</a></li>
                                <li><a href="index.php#asignacion">Asignación</a></li>
                                <li><a href="index.php#integracion">Intregación</a></li>
                                <li><a href="index.php#whatsapp">WhatsApp</a></li>
                                <li><a href="index.php#servicio">Servicio</a></li>
                                <li><a href="about-us.php">Nosotros</a></li>
                                <li><a href="#">Contáctanos</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-4">
                            <h5 class="quiq-links-footer-title">Legales</h5>
                            <ul class="quiq-links-footer-ul">
                                <li><a href="legals.php">Aviso de privacidad</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4 col-4 d-flex flex-column">
                            <div>
                                <h5 class="quiq-links-footer-title">Conmmutador</h5>
                                <ul class="quiq-links-footer-ul">
                                    <li><a href="tel:+525568269661">5568269661</a></li>
                            </div>
                            <div>
                                <h5 class="quiq-links-footer-title">Cotiza aquí</h5>
                                <ul class="quiq-links-footer-ul">
                                    <li><a href="tel:+525568269661">5568269661</a></li>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12 row">
                    <div class="footercontact-information d-flex flex-column col-6 col-12 mt-md-0 mt-8">
                        <h5 class="quiq-links-footer-title text-center">Partners</h5>
                        <div class="footer-partners-container">
                            <img src="../img/partners/gcp-logo.png" style="width: 50px; height: 40px;" alt="GCP LOGO">
                            <img src="../img/partners/meta-logo.png" style="width: 70px; height: 60px;" alt="META LOGO">
                            <img src="../img/partners/twilio-logo.png" style="width: 50px; height: 50px;"
                                alt="TWILIO LOGO">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mr-tp-20 row justify-content-between footer-area-under">
                <div class="col-md col-12 d-flex align-items-center justify-content-start">
                    <a href="#"><img class="footer-logo-blue" src="../img/header/logo-w.png" alt="DRAGONCEM-LOGO" /></a>
                    <div class="footer-social-icons">
                        <a href="https://www.facebook.com/search/top?q=dragoncem" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/dragoncemmx/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/dragon-cem/mycompany/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between final-footer-area mr-tp-40">
                <div class="col-md col-12">
                    <div class="final-footer-area-text">DRAGON CEM ©
                        <!-- <a target="_blank" href="https://coodiv.net/"> </a> -->Todos los derechos reservados</div>
                </div>
                <div class="col-md col-12 d-flex justify-content-end">
                    <div class="footer-lang-changer">
                        <div class="lang-changer-drop-up">
                            <a class="menu-btn-changer" role="button" id="dropupmenulagchanger" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" href="#"><i class="fas fa-globe-asia"></i>
                                Español</a>
                            <div class="dropdown-menu dropupmenulagchanger" aria-labelledby="dropupmenulagchanger">
                                <a class="dropdown-item" href="../en-US/index.php">English</a>
                                <a class="dropdown-item" href="#">Español</a>
                                <a class="dropdown-item" href="../pt-BR/index.php">Portugués</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jquery -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <!-- bootstrap JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- template JavaScript -->
    <script src="../js/template-scripts.js"></script>
    <!-- flickity JavaScript -->
    <script src="../js/flickity.pkgd.min.js"></script>
    <!-- carousel JavaScript -->
    <script src="../owlcarousel/owl.carousel.min.js"></script>
    <!-- parallax JavaScript -->
    <script src="../js/parallax.min.js"></script>
    <!-- mailchamp JavaScript -->
    <script src="../js/mailchamp.js"></script>
    <!-- bootstrap offcanvas -->
    <script src="../js/bootstrap.offcanvas.min.js"></script>
    <!-- touchSwipe JavaScript -->
    <script src="../js/jquery.touchSwipe.min.js"></script>
    <!-- ajax mailer -->
    <script src="../js/mailer.js"></script>
    <!-- seconde style additionel JavaScript -->
    <script src="../js/particles-code.js"></script>
    <script src="../js/particles.js"></script>
    <script src="../js/smoothscroll.js"></script>
</body>

</html>