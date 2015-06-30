<!DOCTYPE html>
<html lang="es">
    <head>
        <title>404 - Página no encontrada</title>
        <meta charset="UTF-8">
        <meta description="">
        <link rel="shortcut icon" href="https://www.boletinaxa.com.mx/images/assets/favicon.png" type="image/png">
        <link rel="shortcut icon" href="https://www.boletinaxa.com.mx/images/assets/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://www.boletinaxa.com.mx/css/boletin-axa.css">
        <link rel="stylesheet" href="https://www.boletinaxa.com.mx/css/lemonade.css">

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-43094746-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <header class="frame">
            <div class="bit-2">
                <img src="https://www.boletinaxa.com.mx/images/assets/header.png" />
            </div>
            <div class="bit-5 header-details">
                <h2>BOLET&Iacute;N AXA</h2>
                <h3>Julio 2015 <strong>N. 12</strong></h3>
                <p>Consulta los n&uacute;meros anteriores <a href="https://www.boletinaxa.com.mx/anterior/historico.html" title="Histórico"><img src="images/assets/btn_landing.png" alt="Historico" /></a></p>
            </div>
        </header>
        <nav class="frame">
            <ul>
                <li><a href="https://www.boletinaxa.com.mx/" title="INICIO">INICIO</a></li>
                <li><a href="2015/julio/salud" title="Tu Salud">TU SALUD</a></li>
                <li><a href="2015/julio/futuro" title="tu Futuro">TU FUTURO</a></li>
                <li><a href="2015/julio/auto" title="Tu Auto">TU AUTO</a></li>
                <li><a href="2015/julio/hogar" title="Tu Hogar">TU HOGAR</a></li>
                <li><a href="opinion?email=<?php if(!empty($_GET['email'])){echo $_GET['email'];} ?>" title="Tu Opinión">TU OPINI&Oacute;N</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="frame">
                <div class="bit-1" style="text-align:center;">
                    <h1><?php echo $heading; ?></h1>
                    <?php echo $message; ?>
                </div>
            </div>
            <div class="frame dark-border">
                <div class="bit-60">
                    <div class="bit-5">
                        <br />
                        <a href="http://axa.mx" target="_blank" class="red-link">axa.mx</a>
                    </div>
                    <div class="bit-80 footer-links">
                        <a href="tel:018009001292">01 800 900 1292</a>
                    </div>
                </div>

                <div class="bit-40 footer-img">
                    <a href="https://twitter.com/AXAMexico"><img src="https://www.boletinaxa.com.mx/images/assets/twt_redes.svg" /></a>
                    <a href="https://www.facebook.com/axamexico"><img src="https://www.boletinaxa.com.mx/images/assets/fb_redes.svg" /></a>
                </div>
            </div>
            <div class="frame">
                <div class="bit-1 legales">
                    <a href="http://axa.mx/Personas/ServicioAXA/Contactanos/Paginas/Quejas.aspx" target="_blank">&iquest;Insatisfecho con nuestro servicio? <img src="https://www.boletinaxa.com.mx/images/assets/ico_coment.png" /></a>
                    <p>El contenido de este bolet&iacute;n es &uacute;nicamente informativo. Los productos se regir&aacute;n por las disposiciones contractuales y legales aplicables.</p>
                </div>
            </div>
            <div class="frame">
                <div class="bit-1 contacto">
                    <p>AXA Seguros, S.A. de C.V. | Tel: <a href="tel:+5551691000">5169 1000</a> &#149; <a href="tel:018009001292">01 800 900 1292</a> &#149; <a href="http://axa.mx" title="axa.mx" target="_blank">axa.mx</a></p>
                </div>
            </div>
        </div>
    </body>
</html>