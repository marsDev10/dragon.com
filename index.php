<!DOCTYPE html>
<html lang="es_MX">

<?php
session_start();

  // Obtén la URL actual
  $currentUrl = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

  // Analiza la URL y obtén sus componentes
  $urlComponents = parse_url($currentUrl);
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Impulsa tu estrategia de ventas con DragonCEM. Obtén insights valiosos sobre el potencial de tus leads, prioriza tus acciones comerciales y optimiza tus resultados. Descubre el poder de la gestión inteligente de leads y lleva tu negocio al siguiente nivel" />
    <meta name="author" content="API Digital" />
    <link rel="canonical" href="https://www.dragoncem.com/" />
    <link rel="icon" href="dragonico.png" />
    <title>DragonCEM | Home</title>
    <meta property="og:locale" content="es_MX" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="DragonCEM | Home" />
    <meta property="og:description" content="Impulsa tu estrategia de ventas con DragonCEM. Obtén insights valiosos sobre el potencial de tus leads, prioriza tus acciones comerciales y optimiza tus resultados. Descubre el poder de la gestión inteligente de leads y lleva tu negocio al siguiente nivel" />
    <meta property="og:url" content="https://www.dragoncem.com" />
    <meta property="og:site_name" content="DragonCEM" />
    <meta property="og:image" content="img/meta/Dragon-meta.png" />
    <meta property="og:image:width" content="1800" />
    <meta property="og:image:height" content="900" />
    <meta property="og:image:type" content="image/jpeg" />
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

    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> -->
    <!-- Fuente Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap , fonts & icons -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="icons-pack/fontawesome-5/css/all.css" rel="stylesheet" />

    <!-- main css file -->
    <link href="css/main.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdLk7EUAAAAAEWHuB2tabMmlxQ2-RRTLPHEGe9Y"></script> -->

</head>

<body>
   
    <?php

    // Verifica si existen parámetros de consulta en la URL
    if (isset($urlComponents['query'])) {
        // Analiza los parámetros de consulta
        parse_str($urlComponents['query'], $queryParameters);

        // Verifica si existe el parámetro "utm_source"
        if (isset($queryParameters['utm_source']) && isset($queryParameters['utm_medium'])) {
            $utmSource = $queryParameters['utm_source'];
            $utmMedium = $queryParameters['utm_medium'];

            // Guarda el valor de utm_source en la sesión
            $_SESSION['utm_source'] = $utmSource;
            $_SESSION['utm_medium'] = $utmMedium;

            echo 'el utm_source es: '.$_SESSION['utm_source'];
            echo 'el utm_medium es: '.$_SESSION['utm_medium'];
        }
    }

    ?>

    <!-- jquery -->
    <script src="js/language-detect.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- template JavaScript -->
    <script src="js/template-scripts.js"></script>
    <!-- flickity JavaScript -->
    <script src="js/flickity.pkgd.min.js"></script>
    <!-- carousel JavaScript -->
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <!-- parallax JavaScript -->
    <script src="js/parallax.min.js"></script>
    <!-- mailchamp JavaScript -->
    <script src="js/mailchamp.js"></script>
    <!-- bootstrap offcanvas -->
    <script src="js/bootstrap.offcanvas.min.js"></script>
    <!-- touchSwipe JavaScript -->
    <script src="js/jquery.touchSwipe.min.js"></script>
    <!-- seconde style additionel JavaScript -->
    <script src="js/particles-code.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/smoothscroll.js"></script>
</body>

</html>