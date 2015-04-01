<header class="frame">
    <div class="bit-2">
        <?=img('images/assets/header.png');?>
    </div>
    <div class="bit-5 header-details">
        <h2>BOLET&Iacute;N AXA</h2>
        <h3>{mes} {anio} <strong>N. {numero}</strong></h3>
        <p>Consulta los n&uacute;meros anteriores <?=anchor('http://www.boletinaxa.com.mx/anterior/historico.html', img('images/assets/btn_landing.png'));?></p>
    </div>
</header>
<nav class="frame">
    <ul>
        <li><?=anchor('/', 'INICIO');?></li>
        <li><?=anchor('2015/abril/salud', 'TU SALUD');?></li>
        <li><?=anchor('2015/abril/futuro', 'TU FUTURO');?></li>
        <li><?=anchor('2015/abril/auto', 'TU AUTO');?></li>
        <li><?=anchor('2015/abril/hogar', 'TU HOGAR');?></li>
        <li><?=anchor('opinion?email='.$this->session->userdata('email'), 'TU OPINI&Oacute;N');?></li>
    </ul>
</nav>
<div class="container hogar">
    <div class="bit-1 frame clearfix title">
      <h1>Invertir para darle valor a tu hogar</h1>
      <p>Equipar tu casa o departamento, además de darle personalidad a tu espacio, es la mejor forma de conservar o incrementar el valor de tu propiedad a través del tiempo.</p>
      <ul class="clearfix bit-1">
        <li class="bit-20"><?= img( [ 'src' => 'images/assets/2015/abril/hogar/cama.png', 'alt' => 'Cama', 'class' => 'bit-1' ] ); ?></li>
        <li class="bit-20"><?= img( [ 'src' => 'images/assets/2015/abril/hogar/refrigerador.png', 'alt' => 'Refrigerador', 'class' => 'bit-1' ] ); ?></li>
        <li class="bit-20"><?= img( [ 'src' => 'images/assets/2015/abril/hogar/lampara.png', 'alt' => 'Lampara', 'class' => 'bit-1' ] ); ?></li>
        <li class="bit-20"><?= img( [ 'src' => 'images/assets/2015/abril/hogar/lavadora.png', 'alt' => 'Lavadora', 'class' => 'bit-1' ] ); ?></li>
        <li class="bit-20"><?= img( [ 'src' => 'images/assets/2015/abril/hogar/bocinas.png', 'alt' => 'Bocinas', 'class' => 'bit-1' ] ); ?></li>
      </ul>
    </div>
    <div class="bit-1 clearfix section-1 frame">
      <hr class="bit-80">
      <h2 class="bit-70">Un inmueble puede aumentar alrededor del 5% de su valor con una pequeña inversión.</h2>
      <p class="bit-70">Fuente: TINSA México</p>
      <hr class="bit-80">
    </div>
    <hr class="bit-1 rule-information bit-1" />
    <div class="frame more--information bit-1">
        <h5 class="bit-1">Si necesitas más información</h5>
        <h5 class="bit-1">¡Contacta a tu agente!</h5>
    </div>
    <div class="frame related bit-1">
        <div class="bit-3 clearfix">
            <h6 class="bit-1">Artículos relacionados</h6>
            <ul class="bit-1">
                <li class="bit-1"><?=anchor( 'http://www.boletinaxa.com.mx/anterior/tu-salud-junio-2014.html','Tú puedes ser tu propio jefe.' );?></li>
                <li class="bit-1"><?=anchor( 'http://www.boletinaxa.com.mx/anterior/tu-salud-marzo-2014.html','México carece de una cultura del ahorro.' );?></li>
            </ul>
        </div>
    </div>
</div>
<div class="bit-3 clearfix qualify frame">
    <p class="bit-20">Califica</p>
    <ul class="bit-80 stars" data-section="auto" data-month="abril" data-year="2015">
        <li>
            <a href="#" target="_self" data-quality="1" class="clearfix Star-2">Una estrella</a>
        </li>
        <li>
            <a href="#" target="_self" data-quality="2" class="clearfix Star-2">Dos estrellas</a>
        </li>
        <li>
            <a href="#" target="_self" data-quality="3" class="clearfix Star-2">Tres estrellas</a>
        </li>
        <li>
            <a href="#" target="_self" data-quality="4" class="clearfix Star-2">Cuatro estrellas</a>
        </li>
        <li>
            <a href="#" target="_self" data-quality="5" class="clearfix Star-2">Cinco estrellas</a>
        </li>
    </ul>
</div>