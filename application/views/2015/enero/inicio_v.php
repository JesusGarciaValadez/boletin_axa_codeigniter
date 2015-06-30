                <div class="container home">
                    <?=($this->session->flashdata('msg') ? '<p style="color:red;font-size:.8em;">'.$this->session->flashdata('msg').'</p>' : '');?>
                    <div class="frame">
                        <div class="bit-60 rounded shadow blue-square" id="two-row-span">
                            <h1 class="white-text">Manejar bien:</h1>
                            <h2 class="white-text">Un propósito de Año Nuevo</h2>
                            <p class="bit-1 white-text">Una nueva forma de conducir nuestros coches, es un gran propósito para iniciar el año.</p>
                            <p class="bit-20 clearfix centered">
                                <?=anchor('/2015/enero/auto', img('images/assets/2015/inicio/leer_mas_1.png'), 'class="clearfix"' );?>
                            </p>
                            <div class="bit-80">
                                <ul class="clearfix bit-1">
                                    <li class="clearfix bit-25">
                                        <p><?=img('images/assets/2015/inicio/familia.png');?></p>
                                    </li>
                                    <li class="clearfix bit-25">
                                        <p><?=img('images/assets/2015/inicio/ciclista.png');?></p>
                                    </li>
                                    <li class="clearfix bit-25">
                                        <p><?=img('images/assets/2015/inicio/edificio.png');?></p>
                                    </li>
                                    <li class="clearfix bit-25">
                                        <p><?=img('images/assets/2015/inicio/coche.png');?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bit-40" id="two-rows">
                            <div class="bit-1 centered blue-square rounded shadow">
                                <h4 class="bit-60">Compartir: <?=nbs(4);?></h4>
                                <p class="bit-20"><?=anchor('http://www.facebook.com/sharer.php?u='.current_url(), img('images/assets/face.jpg'), array('target'=>'_blank'));?></p>
                                <p class="bit-20"><?=anchor('http://twitter.com/?status='.urlencode('Boletín Septiembre 2014 ').current_url(), img('images/assets/twitter.jpg'), array('target'=>'_blank'));?></p>
                            </div>

                            <div class="opinion bit-1 centered blue-square rounded shadow">
                                <h1>Queremos<br /><span class="red-text">conocer</span><br />m&aacute;s de ti.</h1>
                                <p>Ay&uacute;danos con esta peque&ntilde;a encuesta</p>
                                <div>
                                    <?=anchor('opinion?email='.$this->session->userdata('email'), 'Da clic aqu&iacute;');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <div class="bit-3 navy-border">
                            <div class="square dark-text shadow gray-border ">
                                <div class="bit-1 dark-text inner-square first">
                                    <h3>Conoce los accidentes más frecuentes en el hogar y toma tus precauciones</h3>
                                    <p class="bit-40">
                                        <?=img('images/assets/2015/inicio/casa_art1.png');?>
                                    </p>
                                    <p class="bit-60">¿Sabías que el 90% de los accidentes que ocurren en el hogar se pueden evitar?</p>
                                    <p class="bit-60 centered">
                                        <?=anchor('/2015/enero/hogar', img('images/assets/btn_leerMas.png'));?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bit-3 navy-border">
                            <div class="square dark-text shadow gray-border">
                                <div class="bit-1 dark-text inner-square second">
                                    <h3 class="bit-40 centered">Lumbalgia,</h3>
                                    <h3 class="small-title bit-80">un mal que afecta a los mexicanos</h3>
                                    <p class="bit-40">
                                        <?=img('images/assets/2015/inicio/mono_art2.png');?>
                                    </p>
                                    <p class="bit-60">El 80% de los mexicanos ha padecido de dolores agudos en la espalda.</p>
                                    <p class="bit-60 centered">
                                        <?=anchor('/2015/enero/salud', img('images/assets/btn_leerMas.png'));?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bit-3">
                            <div class="square dark-text shadow gray-border">
                                <div class="bit-1 inner-square third">
                                    <h3>¿Cómo recuperarte de los gastos de diciembre?</h3>
                                    <p class="bit-40">
                                        <?=img( 'images/assets/2015/inicio/cerdo_art3.png' );?>
                                    </p>
                                    <p class="bit-60">Que la cuesta de enero, no cueste tanto.</p>
                                    <p class="bit-60 centered"><?=anchor('/2015/enero/futuro', img('images/assets/btn_leerMas.png'));?></p>
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
                                        <?=anchor( 'http://axa.mx/Personas/ServicioAXA/Contactanos/Paginas/Quejas.aspx',
                                        img('images/assets/btn_hazclicaqui.png'),
                                        array(
                                            'anchor'=>'_blank',
                                            'class' =>'clearfix'
                                        ));?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bit-3">
                            <div class="small-square" style="background-color:#e8e7e5;">
                                <div class="bit-1 inner-square third">
                                    <p class="bit-40 centered">
                                        <?=img( 'images/assets/2015/inicio/mirada_x.png' );?>
                                    </p>
                                    <h3 class="bit-60">Blog Mirada X</h3>
                                    <p class="bit-60">Tecnología, prevención y la industria de seguros en una sola plataforma.</p>
                                    <p class="bit-60 centered">
                                        <?=anchor('http://axainforma.com/blog/miradaX/', img('images/assets/btn_descubremas.png'), array('target'=>'_blank'));?>
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
                </div>
                <div class="axa_container_division"></div>