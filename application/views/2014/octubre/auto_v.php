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
        <li><?=anchor('2014/octubre/salud', 'TU SALUD');?></li>
        <li><?=anchor('2014/octubre/futuro', 'TU FUTURO');?></li>
        <li><?=anchor('2014/octubre/auto', 'TU AUTO');?></li>
        <li><?=anchor('2014/octubre/hogar', 'TU HOGAR');?></li>
        <li><?=anchor('opinion?email='.$this->session->userdata('email'), 'TU OPINI&Oacute;N');?></li>
    </ul>
</nav>

<div class="container">
    <?=($this->session->flashdata('msg') ? '<p style="color:red;font-size:.8em;">'.$this->session->flashdata('msg').'</p>' : '');?>
<div class="frame large-background" style="background-image:url(<?=base_url('images/assets/banner_header.jpg');?>);">
    <div class="bit-80">
        <br />
        <h1>&iexcl;Qu&eacute; nada te impida llegar a tu destino!</h1><br />
        <h3>Tomar medidas preventivas en el funcionamiento de tu
            autom&oacute;vil previene posibles percances al viajar en carretera,
            sin embargo, siempre estamos expuestos a sufrir averías que
            compliquen nuestro trayecto.</h3>
        <br />
    </div>
    <div class="bit-20"></div>
</div>

<div class="frame darkblue">
    <div class="sign-square">
        <div class="roadsign sign-inner-square">
            <div class="bit-90">
                <h3>En 2011 se registraron m&aacute;s de 24,900 accidentes en las carreteras mexicanas. 3.5% de ellos est&aacute;n asociados al malfuncionamiento del vehículo.</h3>
                <span class="source">Fuente: Secretaría de Comunicaciones y Transportes</span>
            </div>

            <div class="bit-10-1 first-sign" style="float:left;">
                <?=img('images/assets/reparacion.png');?><br />
            </div>
        </div>
    </div>
</div>

<div class="frame darkblue">
    <div class="bit-1">
        <h2>Seg&uacute;n el Centro de Experimentaci&oacute;n y Seguridad Vial M&eacute;xico, las averías m&aacute;s comunes en carretera son:</h2>
    </div>
</div>

<div class="frame darkblue">
    <div class="bit-3">
        <?=img('images/assets/auto_icono_1.png');?><br />
        <h4>&#149; Ponchadura y estallidos de llantas</h4>
    </div>

    <div class="bit-3">
        <?=img('images/assets/auto_icono_2.png');?><br />
        <h4>&#149; Fallas en la suspensi&oacute;n y direcci&oacute;n</h4>
    </div>

    <div class="bit-3">
        <?=img('images/assets/auto_icono_3.png');?><br />
        <h4>&#149; Problemas con el motor</h4>
    </div>
</div>

<div class="frame darkblue">
    <div class="sign-square">
        <div class="roadsign sign-inner-square">
            <div class="bit-90">
                <h3>El costo promedio de los accidentes viales es de m&aacute;s de $24,000 pesos.</h3>
                <span class="source">Fuente: Siniestros AXA</span>
            </div>

            <div class="bit-10-1" style="float:left;">
                <?=img('images/assets/alerta.png');?><br />
            </div>
        </div>
    </div>
</div>

<div class="frame">
    <div class="bit-1 dark-pink">
        <h2>&iquest;Qu&eacute; debes hacer si ocurre una avería en el camino?</h2>
    </div>

    <div class="bit-1">
        <h3>Si es necesario que te detengas sobre la carretera te recomendamos:</h3>
    </div>
</div>

<div class="frame">
    <div class="bit-3" style="text-align:center;">
        <p>Ocupar el m&iacute;nimo espacio posible del camino</p><br />
        <?=img('images/assets/auto_icono_6.png');?>
    </div>

    <div class="bit-3" style="text-align:center;">
        <p>Encender las luces intermitentes</p><br /><br />
        <?=img('images/assets/auto_icono_5.png');?>
    </div>

    <div class="bit-3" style="text-align:center;">
        <p>Colocar cuidadosamente los tri&aacute;ngulos de emergencia</p><br />
        <?=img('images/assets/auto_icono_4.png');?>
    </div>
</div>

<div class="frame">
    <div class="bit-1 graytext">
        <h2>Las distancias ideales para colocar los dispositivos de advertencia son:</h2>
    </div>

    <div class="bit-1">
        <?=img('images/assets/carretera_1.png');?>
    </div>

    <div class="bit-1">
        <?=img('images/assets/carretera_2.png');?>
    </div>
</div>

<div class="frame">
    <div class="bit-80">
        <br /><br />
        <h2>Si la avería sucede en una curva, pon las señales antes de tomar la curva.</h2>
    </div>

    <div class="bit-20">
        <?=img('images/assets/auto_icono_7.png');?>
    </div>
</div><br />

<div class="frame">
    <div class="bit-1" style="text-align:center;">
        <h2>En AXA contamos con servicios de asistencia automovilística,
            médica y administrativa. Si necesitas apoyo ante estas situaciones,
            llámanos al:</h2><br />
        <h1><a href="tel:018009001292" class="dark-pink">01 800 900 1292</a></h1>
    </div>
</div><br />

<div class="frame">
    <div class="bit-1 blue-dotted">
        <?=anchor('http://promociones-axa.com.mx/?utm_medium=email+AXA/Touch&utm_campaign=AXA/Touch+Boletin+septiembre+2014+Escoge+y+estrena&utm_source=Boletin+septiembre+2014', img('images/assets/banner_estrena.png'));?>
    </div>
</div>

<div class="frame">
    <div class="bit-3"></div>

    <div class="bit-3">
        <table class="related">
            <thead>
            <tr>
                <th>Art&iacute;culos relacionados</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <span class="pink-text">&#149;</span> <?=anchor('http://www.boletinaxa.com.mx/anterior/tu-auto-junio-2014.html', 'Reglas de oro al conducir');?><br />
                    <span class="pink-text">&#149;</span> <?=anchor('http://www.boletinaxa.com.mx/anterior/tu-auto-diciembre-2013.html', 'Seguridad vial en M&eacute;xico');?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="bit-3"></div>
</div>

<div class="frame light-gray" style="text-align:center;margin-bottom:8px;">
    <h2 class="lightblue-text">Si necesitas m&aacute;s informaci&oacute;n</h2>
    <h2 class="pink-text">&iexcl;Contacta a tu agente!</h2>
</div>