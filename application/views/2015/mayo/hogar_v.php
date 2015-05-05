        <header class="frame">
            <div class="bit-2">

                <?=img('images/assets/header.png');?>

            </div>
            <div class="bit-5 header-details">
                <h2>BOLET&Iacute;N AXA</h2>
                <h3>{mes} {anio} <strong>N. {numero}</strong></h3>
                <p>Consulta los n&uacute;meros anteriores <?=anchor('https://www.boletinaxa.com.mx/anterior/historico.html', img('images/assets/btn_landing.png'));?></p>
            </div>
        </header>
        <nav class="frame">
            <ul>
                <li><?=anchor('/', 'INICIO');?></li>
                <li><?=anchor('2015/mayo/salud', 'TU SALUD');?></li>
                <li><?=anchor('2015/mayo/futuro', 'TU FUTURO');?></li>
                <li><?=anchor('2015/mayo/auto', 'TU AUTO');?></li>
                <li><?=anchor('2015/mayo/hogar', 'TU HOGAR');?></li>
                <li><?=anchor('opinion?email='.$this->session->userdata('email'), 'TU OPINI&Oacute;N');?></li>
            </ul>
        </nav>
        <div class="container hogar">
            <div class="bit-1 frame clearfix title">
                <h1 class="bit-1">Invertir para darle valor a tu hogar</h1>
                <p class="bit-1">Equipar tu casa o departamento, además de darle personalidad a tu espacio, es la mejor forma de conservar o incrementar el valor de tu propiedad a través del tiempo.</p>
                <ul class="clearfix bit-1">
                    <li class="bit-20"><?= img( [ 'src' => 'images/assets/2015/mayo/hogar/cama.png', 'alt' => 'Cama', 'class' => 'bit-50' ] ); ?></li>
                    <li class="bit-20"><?= img( [ 'src' => 'images/assets/2015/mayo/hogar/refrigerador.png', 'alt' => 'Refrigerador', 'class' => 'bit-50' ] ); ?></li>
                    <li class="bit-20"><?= img( [ 'src' => 'images/assets/2015/mayo/hogar/lampara.png', 'alt' => 'Lampara', 'class' => 'bit-50' ] ); ?></li>
                    <li class="bit-20"><?= img( [ 'src' => 'images/assets/2015/mayo/hogar/lavadora.png', 'alt' => 'Lavadora', 'class' => 'bit-50' ] ); ?></li>
                    <li class="bit-20"><?= img( [ 'src' => 'images/assets/2015/mayo/hogar/bocinas.png', 'alt' => 'Bocinas', 'class' => 'bit-50' ] ); ?></li>
                </ul>
            </div>
            <div class="bit-1 clearfix section-1 frame">
                <hr class="bit-90">
                <h2 class="bit-90">Un inmueble puede aumentar alrededor del 5% de su valor con una pequeña inversión.</h2>
                <p class="bit-70">Fuente: TINSA México</p>
                <hr class="bit-90">
                <p class="bit-90">La industria inmobiliaria recomienda para añadir valor a la vivienda y recuperar casi entre el 95% y el 100% de la inversión realizada, mejorar las siguientes áreas del hogar:</p>
                <div class="bit-3 clearfix">
                    <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/maceta.png', 'alt' => 'Maceta' ] ); ?>

                    <p class="bit-80"><strong>Jardines y áreas verdes</strong></p>
                    <ul class="bit-80 clearfix">
                        <li>Contar con un jardín bien cuidado y con plantas puede aumentar hasta un 10% el valor de la vivienda.</li>
                    </ul>
                </div>
                <div class="bit-3 clearfix">
                    <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/plato.png', 'alt' => 'Plato' ] ); ?>

                    <p class="bit-80"><strong>Cocina</strong></p>
                    <ul class="bit-80 clearfix">
                        <li>Eliminar rastros de grasa o humo en paredes y techos.</li>
                        <li>Vigilar que el piso luzca impecable.</li>
                    </ul>
                </div>
                <div class="bit-3 clearfix">
                    <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/regadera.png', 'alt' => 'Regadera' ] ); ?>

                    <p class="bit-80"><strong>Baño:</strong></p>
                    <ul class="bit-80 clearfix">
                        <li>Asegurarse que no haya goteras en llaves y regadera.</li>
                    </ul>
                </div>
            </div>
            <div class="bit-1 clearfix section-2 frame pink">
                <p class="bit-1">Fuente: TINSA México</p>
            </div>
            <div class="bit-1 clearfix section-3 frame">
                <p class="bit-1">También es recomendable invertir con sencillas mejoras en la imagen de cada espacio en el hogar como:</p>
                <div class="bit-3 clearfix">
                    <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/rodillo.png', 'alt' => 'Rodillo' ] ); ?>

                    <p class="bit-80">Pintar el interior y exterior de la casa</p>
                </div>
                <div class="bit-3 clearfix">
                    <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/ventana.png', 'alt' => 'Ventana' ] ); ?>

                    <p class="bit-80">Mantener limpias y sin rayones todas las ventanas</p>
                </div>
                <div class="bit-3 clearfix">
                    <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/herramientas.png', 'alt' => 'Herramientas' ] ); ?>

                    <p class="bit-80">Resanar grietas y huecos de clavos en la pared</p>
                </div>
                <div class="bit-3 clearfix">
                    <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/refrigerador-morado.png', 'alt' => 'Refrigerador' ] ); ?>

                    <p class="bit-80">Invertir en tecnología inteligente: como grifos de agua, refrigeradores, etcétera.</p>
                </div>
                <div class="bit-3 clearfix">
                    <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/puerta.png', 'alt' => 'Puerta' ] ); ?>

                    <p class="bit-80">Utilizar el mismo tipo de cerraduras en todas las puertas de la casa</p>
                </div>
                <div class="bit-3 clearfix pink">
                    <p class="bit-90">Protege tu inversión y tu patrimonio, pregunta a tu agente cómo puedes asegurar que tu hogar no pierda su valor a causa de catástrofes naturales o robo. </p>
                </div>
            </div>
            <div class="bit-1 clearfix section-4 frame pink">
                <p>Además, con nuestra oferta también adquieres servicios de asistencia como:</p>
                <ul class="clearfix bit-1">
                    <li class="bit-3">
                        <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/doctor.png', 'alt' => 'Doctor' ] ); ?>

                        <p class="bit-80">Asistencia médica telefónica</p>
                    </li>
                    <li class="bit-3">
                        <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/ambulancia.png', 'alt' => 'Ambulancia' ] ); ?>

                        <p class="bit-80">Servicio de ambulancia sin costo</p>
                    </li>
                    <li class="bit-3">
                        <?= img( [ 'src' => 'images/assets/2015/mayo/hogar/computadora.png', 'alt' => 'Computadora' ] ); ?>

                        <p class="bit-80">Asistencia a mascotas y equipo de cómputo</p>
                    </li>
                </ul>
            </div>
            <div class="bit-1 clearfix section-5 frame"></div>
            <div class="frame more--information bit-1">
                <h5 class="bit-1">Si necesitas más información</h5>
                <h5 class="bit-1">¡Contacta a tu agente!</h5>
            </div>
            <div class="frame related bit-1">
                <div class="bit-3 clearfix">
                    <h6 class="bit-1">Artículos relacionados</h6>
                    <ul class="bit-1">
                        <li class="bit-1"><?=anchor( 'https://www.boletinaxa.com.mx/anterior/tu-salud-junio-2014.html','Evita accidentes y prevé gastos inesperados.' );?></li>
                        <li class="bit-1"><?=anchor( 'https://www.boletinaxa.com.mx/anterior/tu-salud-marzo-2014.html','Estrategias de ahorro para tu casa.' );?></li>
                    </ul>
                </div>
            </div>
            <div class="bit-3 clearfix qualify frame">
                <p class="bit-20">Califica</p>
                <ul class="bit-80 stars" data-section="auto" data-month="mayo" data-year="2015">
                    <li>
                        <?=anchor( '#', 'Una estrella', [ 'data-quality' => "1", 'class' => "clearfix Star-2" ] );?>

                    </li>
                    <li>
                        <?=anchor( '#', 'Dos estrellas', [ 'data-quality' => "2", 'class' => "clearfix Star-2" ] );?>

                    </li>
                    <li>
                        <?=anchor( '#', 'Tres estrellas', [ 'data-quality' => "3", 'class' => "clearfix Star-2" ] );?>

                    </li>
                    <li>
                        <?=anchor( '#', 'Cuatro estrellas', [ 'data-quality' => "4", 'class' => "clearfix Star-2" ] );?>

                    </li>
                    <li>
                        <?=anchor( '#', 'Cinco estrellas', [ 'data-quality' => "5", 'class' => "clearfix Star-2" ] );?>

                    </li>
                </ul>
            </div>