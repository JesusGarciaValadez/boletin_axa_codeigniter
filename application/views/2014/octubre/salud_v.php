<div class="container">
    <?=($this->session->flashdata('msg') ? '<p style="color:red;font-size:.8em;">'.$this->session->flashdata('msg').'</p>' : '');?>
    <div class="frame">
        <div class="bit-2 purple-text">
            <?=br(3);?>
            <h1 style="font-size:2.5em;">Tu sonrisa es reflejo de tu salud</h1>
        </div>
        <div class="bit-2" style="text-align:right;">
            <?=img('images/assets/banner_header.png');?>
        </div>
    </div>
    <div class="frame">
        <div class="bit-60 purple-text">
            <h1>&iquest;Sab&iacute;as qu&eacute;?</h1><?=br(2);?>
            <h3>M&eacute;xico es un pa&iacute;s con alta incidencia de enfermedades bucales:</h3>
            <ul>
                <li>90% de la poblaci&oacute;n padece caries</li>
                <li>70% padece enfermedad periodontal o de enc&iacute;as</li>
            </ul>
            <span class="source">Fuente: Programa Nacional de Salud, SSA, 2010</span></p>
        </div>
        <div class="bit-40" style="text-align:right;">
            <?=img('images/assets/mapa.png');?>
        </div>
    </div>
    <div class="frame">
        <div class="bit-1 purple-text big-shadow">
            <h1>El cepillado de dientes es la medida preventiva m&aacute;s efectiva para evitar enfermedades bucales.</h1>
        </div>
    </div><?=br(2);?>
    <div class="frame yellow">
        <div class="bit-2">
            <h3>Tener una mala higiene bucal puede generar enfermedades respiratorias, gastrointestinales y cardiol&oacute;gicas.</h3>
        </div>
        <div class="bit-2 gif-set">
            <?=img('images/assets/pulmon.png');?>
            <?=img('images/assets/estomago.png');?>
            <?=img('images/assets/corazon.png');?>
        </div>
    </div>
    <div class="frame">
        <div class="bit-90 purple-text"><?=br(1);?>
            <p>La Facultad de Salud Pública de Harvard realizó estudios para ligar las enfermedades de
                encías con el riesgo de desarrollar cáncer de páncreas. Se determinó que la infección
                provoca inflamación en todo el cuerpo, lo que se asoció al desarrollo del cáncer.</p>
            </div>
            <div class="bit-10-1" style="text-align:right;">
                <?=img('images/assets/icono_1.png');?>
            </div>
        </div>
        <div class="frame">
            <div class="bit-10-1">
                <?=img('images/assets/icono_2.png');?>
            </div>
            <div class="bit-90 purple-text" style="text-align:right;"><?=br(1);?>
                <p>Estudios demuestran que las personas con mala higiene bucal incrementan el riesgo de
                    desarrollar Alzheimer. Ya que en éstos se han encontrado la bacteria Porphyromonas
                    gingivalis, asociada a enfermedades dentales.<br />
                    <span class="source">Fuente: Universidad Central de Lancashire, Reino Unido</span></p>
                </div>
            </div>
            <div class="frame">
                <div class="bit-90 purple-text"><?=br(1);?>
                    <p>Asimismo, la Universidad de Bristol sugiere que la presencia de bacterias en las encías
                        está ligada al riesgo de sufrir un infarto.</p>
                    </div>
                    <div class="bit-10-1">
                        <?=img('images/assets/icono_3.png');?>
                    </div>
                </div>
                <div class="frame green-dots">
                    <div class="bit-1 big-shadow purple-text">
                        <h1>La alimentación es clave para el cuidado de tus dientes y tu boca</h1>
                    </div>
                </div><?=br(1);?>
                <div class="frame">
                    <table>
                        <tr>
                            <th class="light-yellow">Procura consumir:</th>
                            <th class="yellow">Ayudan a:</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td class="yellow">
                                    <div class="bit-60">
                                        <h3>Frutas y verduras</h3>
                                        <p>(Manzana, zanahoria y apio)</p>
                                    </div>
                                    <div class="bit-40">
                                        <?=img('images/assets/manzana.png');?>
                                        <?=img('images/assets/zanahoria.png');?>
                                    </div>
                                </td>

                                <td class="light-yellow" style="text-align:center;">
                                    Limpiar la placa bacteriana y a
                                    quitar los restos pegajosos de
                                    otros alimentos.
                                </td>
                            </tr>
                            <tr>
                                <td class="yellow">
                                    <div class="bit-60">
                                        <h3>Productos lácteos.</h3>
                                        <p>(Algunos quesos y leche)</p>
                                    </div>
                                    <div class="bit-40">
                                        <?=img('images/assets/queso.png');?>
                                        <?=img('images/assets/leche.png');?>
                                    </div>
                                </td>
                                <td class="light-yellow" style="text-align:center;">
                                    Los dientes estén protegidos
                                    contra las caries por su alto
                                    contenido en calcio.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><?=br(1);?>
                <div class="frame">
                    <table>
                        <tr>
                            <th class="light-gray">Evita consumir:</th>
                            <th class="gray">Porque:</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td class="gray">
                                    <div class="bit-80">
                                        <h3>Bebidas gaseosas</h3>
                                    </div>
                                    <div class="bit-20">
                                        <?=img('images/assets/lata_refresco.png');?>
                                    </div>
                                </td>
                                <td class="light-gray" style="text-align:center;">
                                    Provocan erosión dental.
                                </td>
                            </tr>
                            <tr>
                                <td class="gray">
                                    <div class="bit-80">
                                        <h3>Papas fritas</h3>
                                    </div>
                                    <div class="bit-20">
                                        <?=img('images/assets/papas.png');?>
                                    </div>
                                </td>
                                <td class="light-gray" style="text-align:center;">
                                    Contienen gran cantidad de
                                    almidón que daña los dientes.
                                </td>
                            </tr>
                            <tr>
                                <td class="gray">
                                    <div class="bit-80">
                                        <h3>Dulces y caramelos</h3>
                                    </div>
                                    <div class="bit-20">
                                        <?=img('images/assets/paleta.png');?>
                                    </div>
                                </td>
                                <td class="light-gray" style="text-align:center;">
                                    Se adhieren a los dientes por su
                                    excesiva cantidad de azúcar.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <span class="source"><?=auto_link('Fuente: http://dentalroch.net/alimentos-buenos-y-malos-para-los-dientes');?></span>
                </div><?=br(1);?>
                <div class="frame">
                    <div class="bit-1 purple-text">
                        <h2>Tips para mantener tus dientes en buen estado:</h2>
                    </div>
                    <div class="bit-1 purple-text">
                        <div class="bit-4 tips">
                            <p>Con el cuidado diario, previenes y reduces los impactos negativos en tu salud a causa de una mala higiene bucal</p>
                            <?=img('images/assets/icono2_1.png');?>
                        </div>
                        <div class="bit-4 tips">
                            <p>Cepilla tus dientes diariamente inmediatamente después de comer</p>
                            <?=img('images/assets/icono2_2.png');?>
                        </div>
                        <div class="bit-4 tips">
                            <p>Utiliza hilo dental como parte de tu rutina de limpieza</p>
                            <?=img('images/assets/icono2_3.png');?>
                        </div>
                        <div class="bit-4 tips">
                            <p>Acude al dentista por lo menos una vez cada seis meses</p>
                            <?=img('images/assets/icono2_4.png');?>
                        </div>
                    </div>
                </div>
                <div class="frame blue-dotted">
                    <div class="bit-80 purple-text">
                        <h3>En AXA cuidamos tu sonrisa, por eso nuestros seguros de
                            gastos médicos mayores individuales, cuentan con beneficios
                            dentales que ofrecen una amplia gama de servicios y
                            tratamientos a precios preferenciales*.</h3>
                            <span class="source">*Excepto Protección Efectiva Gastos Médicos.</span>
                        </div>
                        <div class="bit-20" style="text-align:right;">
                            <?=img('images/assets/logo_dentalia.png');?>
                        </div>
                    </div>
                    <!--div class="frame">
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
                                        <span class="pink-text">&#149;</span> <?=anchor('http://www.boletinaxa.com.mx/anterior/tu-salud-junio-2014.html', 'Nutrici&oacute;n: pieza clave en la prevenci&oacute;n');?><br />
                                        <span class="pink-text">&#149;</span> <?=anchor('http://www.boletinaxa.com.mx/assets/boletines_descargables/boletin_5.pdf', 'La obesidad m&aacute;s all&aacute; del sobrepeso');?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bit-3"></div>
                    </div-->
                    <!--div class="frame light-gray" style="text-align:center;margin-bottom:8px;">
                        <h2 class="lightblue-text">Si necesitas m&aacute;s informaci&oacute;n</h2>
                        <h2 class="pink-text">&iexcl;Contacta a tu agente!</h2>
                    </div-->
                </div>
            </div>
        </div>
    </div>