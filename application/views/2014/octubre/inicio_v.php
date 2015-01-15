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
<div class="frame">
    <div class="bit-60 gray-border rounded shadow" style="margin:0 0 0 0;" id="two-row-span">
        <h1>Haz de tu retiro una experiencia satisfactoria.</h1>
        <br />
        <p class="bit-60"><br />
            &iquest;Est&aacute;s preparado para el momento de tu retiro?
            Sigue estos consejos y asegura un buen futuro para ti y tu familia.
        </p>
        <p class="bit-40 centered">
            <?=img('images/assets/iconos_banner.png');?>
            <?=anchor('2014/octubre/futuro', img('images/assets/btn_leerMas.png'));?>
        </p>
    </div>

    <div class="bit-40" id="two-rows">
        <div class="bit-1 centered blue-square rounded shadow" style="margin:-7px 0 10px 0;">
            <h4 style="font-size:1.6em;">Compartir: <?=nbs(4);?>
                <?=anchor('http://www.facebook.com/sharer.php?u='.current_url(), img('images/assets/face.jpg'), array('target'=>'_blank'));?>
                <?=anchor('http://twitter.com/?status='.urlencode('Boletín Septiembre 2014 ').current_url(), img('images/assets/twitter.jpg'), array('target'=>'_blank'));?>
            </h4>
        </div>

        <div class="opinion bit-1 centered blue-square rounded shadow" style="height:205px;">
            <h1>Queremos<br /><span class="red-text">conocer</span><br />m&aacute;s de ti.</h1>
            <p>Ay&uacute;danos con esta peque&ntilde;a encuesta.</p>
            <div>
                <?=anchor('opinion?email='.$this->session->userdata('email'), 'Da clic aqu&iacute;');?>
            </div>
        </div>
    </div>
</div>

<div class="frame">
    <div class="bit-3 navy-border">
        <div class="square dark-text shadow gray-border">
            <div class="bit-1 dark-text inner-square">
                <h3>&iquest;Sabes c&oacute;mo evitar un incendio en tu hogar?</h3>
                <p class="bit-20">
                    <?=img('images/assets/icono_casa.png');?>
                </p>
                <p class="bit-80">
                    Identifica los riesgos que corres en casa y toma medidas de prevenci&oacute;n para evitar este tipo de desastres.
                    <?=anchor('2014/octubre/hogar', img('images/assets/btn_leerMas.png'));?>
                </p>
            </div>
        </div>
    </div>

    <div class="bit-3 navy-border">
        <div class="square dark-text shadow gray-border">
            <div class="bit-1 dark-text inner-square">
                <h3>Tu sonrisa es reflejo de tu salud.</h3>
                <p class="bit-20">
                    <?=img('images/assets/icono_muela.png');?>
                </p>
                <p class="bit-80">
                    Una buena sonrisa nos puede abrir muchas puertas. Conoce las formas en las que puedes proteger tu dentadura.
                    <?=anchor('2014/octubre/salud', img('images/assets/btn_leerMas.png'));?>
                </p>
            </div>
        </div>
    </div>

    <div class="bit-3">
        <div class="square dark-text shadow gray-border">
            <div class="bit-1 inner-square">
                <h3>&iexcl;Qu&eacute; nada te impida llegar a tu destino!</h3>
                <p class="bit-20">
                    <?=img('images/assets/icono_auto.png');?>
                </p>
                <p class="bit-80">
                    Todos estamos expuestos a que el autom&oacute;vil nos deje parados en la carretera. Aqu&iacute; te decimos qu&eacute;
                    hacer en estos casos.
                    <?=anchor('2014/octubre/auto', img('images/assets/btn_leerMas.png'));?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="frame">
    <div class="bit-3">
        <div class="small-square">
            <div class="bit-1 lightblue inner-square" style="background-color:#e8e7e5;">
                <h3>Soluciones de protecci&oacute;n al alcance de tu mano</h3>
                <p class="bit-40"><?=img('images/assets/pantallas_cel.png');?></p>
                <p class="bit-60">3 apps para hacer tu vida m&aacute;s f&aacute;cil <?=br(3).anchor('2014/octubre/apps', img('images/assets/btn_conocelas.png'));?></p>
            </div>
        </div>
    </div>

    <div class="bit-3">
        <div class="small-square">
            <div class="bit-1 lightblue inner-square" style="background-color:#dcd9d6;">
                <h3>&iquest;Malestar? &iquest;Fiebre? &iquest;Emergencia?</h3>
                <p class="bit-40" style="font-size:1.6em;text-align:center;">
                    <?=img('images/assets/icono_tel.png');?><br />
                    <span style="font-size:.9em;">Tu m&eacute;dico 24 horas</span>
                </p>
                <p class="bit-60">Te protegemos desde el primer s&iacute;ntoma <?=br(3).anchor('http://axa.mx/Personas/perfiladores/Salud911/Paginas/default.aspx', img('images/assets/btn_descubremas.png'), array('anchor'=>'_blank'));?></p>
            </div>
        </div>
    </div>

    <div class="bit-3">
        <div class="small-square" style="background-color:#e8e7e5;">
            <div class="bit-1 inner-square">
                <?=anchor('http://promociones-axa.com.mx/?utm_medium=email+AXA/Touch&utm_campaign=AXA/Touch+Boletin+septiembre+2014+Escoge+y+estrena&utm_source=Boletin+septiembre+2014', img('images/assets/landing-escoge.jpg'), array('target'=>'_blank'));?>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        if($(window).width() > 480){
            var h = $('#two-rows').height();
            $('#two-row-span').css('height', (h+7)+'px');
        }else{
            $('#two-row-span').css('margin-bottom', '10px');
        }
    });
</script>