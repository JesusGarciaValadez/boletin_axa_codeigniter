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
        <div class="container home">
            <div class="bit-1 frame clearfix title">
                <div class="frame">
                    <div class="bit-70 rounded shadow blue-square" id="two-row-span">
                        <div class="bit-40 clearfix">
                            <?=img( 'images/assets/2015/abril/home/cama.png', 'Cama' );?>
                            <?=img( 'images/assets/2015/abril/home/lampara.png', 'Lampara' );?>
                            <?=img( 'images/assets/2015/abril/home/refrigerador.png', 'Refrigerador' );?>
                            <?=img( 'images/assets/2015/abril/home/lavadora.png', 'Lavadora' );?>
                            <?=img( 'images/assets/2015/abril/home/bocinas.png', 'Bocinas' );?>
                        </div>
                        <div class="bit-60 clearfix">
                            <?=heading( 'Invertir', 1 );?>
                            <?=heading( 'para darle valor al hogar', 2 );?>
                            <p class="bit-1">Equipar tu casa o departamento, además de darle personalidad a tu espacio, es la mejor forma de conservar o incrementar el valor de tu propiedad a través del tiempo.</p>
                            <p class="bit-1"><?=anchor( '2015/abril/hogar', img( 'images/assets/2015/abril/home/leer-mas.png', 'Leer más' ) );?></p>
                        </div>
                    </div>
                    <div class="bit-30 clearfix share-form">
                        <div class="share bit-1 centered blue-square rounded shadow clearfix">
                            <h4 class="bit-1 clearfix">Compartir:
                                <?=anchor('http://www.facebook.com/sharer.php?u='.current_url(), img('images/assets/face.jpg'), array('target'=>'_blank'));?>

                                <?=anchor('http://twitter.com/?status='.urlencode('Boletín Septiembre 2014 ').current_url(), img('images/assets/twitter.jpg'), array('target'=>'_blank'));?></h4>
                        </div>
                        <div class="opinion bit-1 centered blue-square rounded shadow clearfix">
                            <h3 class="bit-1">Queremos<br /><span class="red-text">conocer</span><br />m&aacute;s de ti.</h3>
                            <p class="bit-1">Ay&uacute;danos con esta peque&ntilde;a encuesta</p>
                            <p class="bit-1"><?=anchor('opinion?email='.$this->session->userdata('email'), 'Da clic aqu&iacute;');?></p>
                        </div>
                    </div>
                </div>
                <div class="frame">
                    <div class="bit-3 navy-border">
                        <div class="square dark-text shadow gray-border ">
                            <div class="bit-1 dark-text inner-square first">
                                <?=heading('<span>11</span> razones para dejar de fumar', 2, 'class="bit-1 centered"' );?>
                                <p class="bit-40"><?=img('images/assets/2015/abril/home/no-fumar.png', 'No fumar', [ 'class' => 'bit-1' ] );?></p>
                                <p class="bit-60">El hábito de fumar es la principal causa evitable de enfermedades y provoca la muerte prematura.</p>
                                <p class="bit-2"><?=anchor( '2015/abril/salud', img( 'images/assets/2015/abril/home/leer-mas.png', 'Leer más' ) );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="bit-3 navy-border">
                        <div class="square dark-text shadow gray-border">
                            <div class="bit-1 dark-text inner-square second">
                                <?=heading( 'Falta cultura del ahorro en México', 3, 'class="bit-1 centered"' );?>
                                <p class="bit-40"><?=img( 'images/assets/2015/abril/home/marrano.png', 'Alcancia' );?></p>
                                <p class="bit-60">Sólo el 16% de los mexicanos ahorra.</p>
                                <p class="bit-2"><?=anchor( '2015/abril/futuro', img( 'images/assets/2015/abril/home/leer-mas.png', 'Leer más' ) );?></p>
                            </div>
                        </div>
                    </div>
                    <div class="bit-3">
                        <div class="square dark-text shadow gray-border">
                            <div class="bit-1 inner-square third">
                                <?=heading( 'Por tu seguridad, evita el celular al volante.', 3, 'class="bit-1 centered"' );?>
                                <p class="bit-40"><?=img( 'images/assets/2015/abril/home/no-telefono.png' );?></p>
                                <p class="bit-60">Usar el celular al volante ha hecho que se registre un aumento en accidentes de tránsito.</p>
                                <p class="bit-2"><?=anchor( '2015/abril/auto', img( 'images/assets/2015/abril/home/leer-mas.png', 'Leer más' ) );?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame">
                    <div class="bit-3">
                        <div class="small-square">
                            <div class="bit-1 inner-square first" style="background-color:#e8e7e5;">
                                <h3 class="bit-1 centered">¡Ya puedes pagar tu póliza desde dispositivos móviles!</h3>
                                <h4 class="bit-80 centered">Fácil y en todo momento.</h4>
                                <p class="bit-40 centered">
                                    <?=img( 'images/assets/2015/inicio/dispositivos.png' );?>

                                </p>
                                <p class="bit-60 centered">
                                    <?=anchor('https://cajaaxa.mitec.com.mx/cua/inicio.do?method=loginAgente&perfil=cliente', img('images/assets/btn_descubremas.png'));?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bit-3">
                        <div class="small-square">
                            <div class="bit-1 inner-square second" style="background-color:#dcd9d6;">
                                <p class="bit-40">
                                    <?=img( 'images/assets/2015/inicio/call_center.png' );?>

                                </p>
                                <h3 class="bit-60 centered">¿Insatisfecho con nuestro servicio?</h3>
                                <p class="bit-60 centered">
                                    <?=anchor( 'http://axa.mx/Personas/ServicioAXA/Contactanos/Paginas/Quejas.aspx', img('images/assets/btn_hazclicaqui.png'), [ 'anchor'=>'_blank', 'class' =>'clearfix' ] );?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bit-3">
                        <div class="small-square" style="background-color:#e8e7e5;">
                            <div class="bit-1 inner-square third">
                                <p class="bit-2 centered">
                                    <?=img( 'images/assets/2015/abril/home/indigena.png' );?>

                                </p>
                                <h3 class="bit-2"><strong>Fundación AXA</strong>, desarrolla el Primer Centro Integral Demostrativo y de Voluntariado, <strong>Casa de la Mujer de Ganzdá</strong>, en Acambay, México.</h3>
                                <p class="bit-1 centered">
                                    <?=anchor( 'http://axainforma.com/blog/miradaX/', img( 'images/assets/2015/april/home/conoce-mas-aqui.png' ), [ 'target' => '_blank' ] );?>

                                </p>
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