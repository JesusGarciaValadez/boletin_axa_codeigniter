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
<div class="container auto">
    <div class="frame bit-1 title clearfix">
        <?=img( [ 'src' => 'images/assets/2015/abril/auto/head.png', 'alt' => 'Vacaciones sobre ruedas' ] );?>
    </div>
    <div class="bit-1 clearfix frame section-1">
        <p>Ya tienes tus maletas hechas y has planeado tu ruta a algún destino de México: <strong>la primera temporada vacacional está por comenzar</strong>.</p>
        <p>Sin embargo, hay ciertos aspectos que debes considerar antes de iniciar el viaje para evitar algún percance durante el trayecto:</p>
    </div>
    <div class="bit-1 clearfix frame section-2">
        <div class="bit-20 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/manos-sosteniendo-un-auto.png', 'alt' => 'Auto' ] ); ?>
        </div>
        <div class="bit-80 clearfix">
            <h1>Para el auto:</h1>
            <ul>
                <li>Lleva tu auto al mecánico con anticipación a tu viaje. Haz que verifiquen los niveles de líquido de frenos, anticongelante, aceite de la transmisión, el sistema eléctrico, la suspensión y el funcionamiento en general. Esto evitará algún desperfecto o el sobrecalentamiento del vehículo.</li>
            </ul>
        </div>
    </div>
    <div class="bit-1 clearfix frame section-3">
        <div class="bit-2 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/presion-de-llanta.png', 'alt' => 'Tomando la presión de una llanta' ] ); ?>
            <ul class="bit-80">
                <li>Evita ponchaduras: revisa la presión de los neumáticos, principalmente si tu destino se halla en un medio de terracería.</li>
            </ul>
        </div>
        <div class="bit-2 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/paraguas-tapando-auto.png', 'alt' => 'Paraguas tapando auto' ] ); ?>
            <ul class="bit-80">
                <li>Evita derrapes: revisa el desgaste de las llantas, es importante en caso de enfrentarte a lluvias o zonas húmedas.</li>
            </ul>
        </div>
    </div>
    <div class="bit-1 clearfix frame section-4">
        <div class="bit-2 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/llanta-desinflada.png', 'alt' => 'Paraguas tapando auto' ] ); ?>
            <ul class="bit-80">
                <li>Si las llantas presentan pinchaduras o chipotes es necesario reemplazarlos.</li>
            </ul>
        </div>
        <div class="bit-2 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/llave-de-tuercas.png', 'alt' => 'Paraguas tapando auto' ] ); ?>
            <ul class="bit-80">
                <li>Revisa la condición de la llanta de refacción, así como contar con las herramientas necesarias.</li>
            </ul>
        </div>
    </div>
    <div class="bit-1 clearfix frame section-5">
        <div class="bit-20 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/mapa.png', 'alt' => 'Mapa' ] ); ?>
        </div>
        <div class="bit-80 clearfix">
            <h2>Para el camino:</h2>
            <ul>
                <li>Planea tu ruta y calcula los tiempos, así podrás tomar descansos breves durante el viaje y evitar el tránsito lento.</li>
            </ul>
        </div>
    </div>
    <div class="bit-1 clearfix frame section-6">
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/sol.png', 'alt' => 'Sol' ] ); ?>
            <ul>
                <li>Infórmate acerca de las últimas noticias sobre el clima en la zona de tu destino, así como de la condición de las vialidades.</li>
            </ul>
        </div>
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/stop.png', 'alt' => 'Señal de alto' ] ); ?>
            <ul>
                <li>Utiliza las vías de comunicación oficiales, evita rutas alternas que te sean desconocidas y no te estaciones en lugares solitarios.</li>
            </ul>
        </div>
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/bebe.png', 'alt' => 'Bebé' ] ); ?>
            <ul>
                <li>Usa siempre el cinturón de seguridad. Si viajas con bebés o niños menores a 3 años deberán viajar con silla de seguridad y los mayores de 3 años irán en el asiento trasero con cinturón de seguridad.</li>
            </ul>
        </div>
    </div>
    <div class="bit-1 clearfix frame section-7">
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/candado.png', 'alt' => 'Candado' ] ); ?>
            <ul>
                <li>Utiliza el seguro de niños en las puertas y ventanas. Es recomendable que un adulto viaje con los niños en el asiento trasero.</li>
            </ul>
        </div>
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/botella.png', 'alt' => 'Botella' ] ); ?>
            <ul>
                <li>Evita el consumo de alcohol antes o durante el viaje.</li>
            </ul>
        </div>
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/limites-de-velocidad.png', 'alt' => 'Limtes de velocidad' ] ); ?>
            <ul>
                <li>Respeta los límites de velocidad. Reduce la velocidad si el clima es adverso por lluvia, tormenta, neblina u otra situación.</li>
            </ul>
        </div>
    </div>
    <div class="bit-1 clearfix frame section-8">
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/semaforo.png', 'alt' => 'Semáforo' ] ); ?>
            <ul>
                <li>Respeta los señalamientos. Evita obstruir la circulación a otro vehículo.</li>
            </ul>
        </div>
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/coche-viajando-de-noche.png', 'alt' => 'Coche viajando de noche' ] ); ?>
            <ul>
                <li>Evita conducir cansado, enfermo o enojado.</li>
            </ul>
        </div>
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/signo-de-alerta.png', 'alt' => 'Signo de alerta' ] ); ?>
            <ul>
                <li>Mantente alerta: no distraigas tu atención del camino u otros vehículos alrededor.</li>
            </ul>
        </div>
    </div>
    <div class="bit-1 clearfix frame section-9">
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/coche-con-luces--de-emergencia-prendidas.png', 'alt' => 'Luces de emergencia' ] ); ?>
            <ul>
                <li>En caso de algún desperfecto mecánico enciende las luces de emergencia, oríllate y contacta al equipo de auxilio vial de la concesionaria.</li>
            </ul>
        </div>
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/celular.png', 'alt' => 'Teléfono celular' ] ); ?>
            <ul>
                <li>No uses el celular, no fumes ni lleves la música a alto volumen al conducir, esto disminuye la capacidad de concentración hasta en un 50%.</li>
            </ul>
        </div>
        <div class="bit-3 clearfix">
            <?= img( [ 'src' => 'images/assets/2015/abril/auto/maleta.png', 'alt' => 'Maleta' ] ); ?>
            <ul>
                <li>Si llevas equipaje en el asiento trasero no olvides sujetarlo con el cinturón de seguridad, esto evitará que se convierta en un proyectil en un accidente.</li>
            </ul>
        </div>
    </div>
    <div class="bit1 frame clearfix section-10">
        <h3>Recuerda: la clave para unas vacaciones felices está en ir y re gresar sano y salvo. Prevé y protege tu vida y la de tu familia.</h3>
        <p><sup>*</sup> Fuentes: noticias.universia.cl / gq.com.mx</p>
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

