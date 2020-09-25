<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <script src="https://kit.fontawesome.com/f0f2121b70.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <link rel="stylesheet" href="css/normalize.css">

    <?php 
    $paginaActual = basename($_SERVER["PHP_SELF"]);
    $paginaActualSinExtension= str_replace(".php","",$paginaActual);
    if($paginaActual=="index.php"||$paginaActual=="invitados.php"){
        echo("<link rel=\"stylesheet\" href=\"css/colorbox.css\">");
    }elseif($paginaActual=="conferencias.php"){
        echo ("<link rel=\"stylesheet\" href=\"css/lightbox.css\">");
    }
    ?>
    
    
    <link rel="stylesheet" href="css/main.css">
 
    <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $paginaActualSinExtension?>">
    <header class="site-header">
        <div class="hero">
            <div class="contenido-hero">
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
                <div class="informacion-evento">
                    <div class="clearfix">
                        <p class="fecha">
                            <i class="fas fa-calendar-times"></i> 10-12 dic
                        </p>
                        <p class="ciudad">
                            <i class="fas fa-map-marker-alt"></i>Guadalajara, Mx
                        </p>
                    </div>
                    <h1 class="nombre-sitio clearfix">GDLWebCamp</h1>
                    <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
                </div>
            </div>
        </div>
    </header>
    <div class="barra clearfix">
        <div class="contenedor">
            <div class="logo">
                <a href="index.php">
                    <img src="img/logo.svg" alt="">
                </a>
            </div>
            <div class="menu-movil">
                <span>
                    
                </span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal ">
                <a href="conferencias.php">Conferencias</a>
                <a href="calendario.php">Calendario</a>
                <a href="invitados.php">Invitados</a>
                <a href="registro.php">Reservaciones</a>
            </nav>
        </div>
    </div>