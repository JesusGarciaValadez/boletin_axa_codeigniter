<!DOCTYPE html>
<html lang="en">
<head>
<title>404 Page Not Found</title>

    <link rel="stylesheet" type="text/css" href="css/boletin-axa.css">
    <link rel="stylesheet" type="text/css" href="css/lemonade.css">

</head>
<body>
    <header class="frame">
        <div class="bit-2">
            <img src="images/assets/header.png" />
        </div>
        <div class="bit-5 header-details">
            <h2>BOLET&Iacute;N AXA</h2>
            <h3>Septiembre 2014 <strong>N. 10</strong></h3>
            <p>Consulta los n&uacute;mero anteriores <a href="http://www.boletinaxa.com.mx/historico.html"><img src="images/assets/btn_landing.png" /></a></p>
        </div>
    </header>

    <nav class="frame">
        <ul>
            <li><a href="http://www.boletinaxa.com.mx/">INICIO</a></li>
            <li><a href="http://www.boletinaxa.com.mx/salud">TU SALUD</a></li>
            <li><a href="http://www.boletinaxa.com.mx/futuro">TU FUTURO</a></li>
            <li><a href="http://www.boletinaxa.com.mx/auto">TU AUTO</a></li>
            <li><a href="http://www.boletinaxa.com.mx/hogar">TU HOGAR</a></li>
            <li><a href="http://www.boletinaxa.com.mx/opinion?email=">TU OPINI&Oacute;N</a></li>
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
                <a href="https://twitter.com/AXAMexico"><img src="images/assets/twt_redes.svg" /></a>
                <a href="https://www.facebook.com/axamexico"><img src="images/assets/fb_redes.svg" /></a>
            </div>
        </div>

        <div class="frame">
            <div class="bit-1 legales">
                <a href="http://axa.mx/Personas/ServicioAXA/Contactanos/Paginas/Quejas.aspx" target="_blank">&iquest;Insatisfecho con nuestro servicio? <img src="images/assets/ico_coment.png" /></a>
                <p>El contenido de este bolet&iacute;n es &uacute;nicamente informativo. Los productos se regir&aacute;n por las disposiciones contractuales y legales aplicables.</p>
            </div>
        </div>

        <div class="frame">
            <div class="bit-1 contacto">
                <p>AXA Seguros, S.A. de C.V. | Tel: <a href="tel:+5551691000">5169 1000</a> &#149; <a href="tel:018009001292">01 800 900 1292</a> &#149; <?=anchor('http://axa.mx', 'axa.mx', array('target'=>'_blank'));?></p>
            </div>
        </div>

    </div>
</body>
</html>