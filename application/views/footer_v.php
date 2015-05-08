
            <div class="frame dark-border bit-1 social">
                <div class="bit-60">
                    <div class="bit-5">
                        <?=anchor('http://www.axa.mx/?utm_medium=email+AXA/Touch&utm_campaign=AXA/Touch+Boletin+septiembre+2014+Escoge+y+estrena&utm_source=Boletin+septiembre+2014', 'axa.mx', array('target'=>'_blank', 'class'=>'red-link'));?>
                    </div>
                    <div class="bit-80 footer-links">
<? if(!$this->session->userdata('agente') || !$this->session->userdata('tel')) { ?>
    <? if($this->input->get('agentenom')) { ?>
                        <?=$this->input->get('agentenom');?><br />

                        <?=$this->input->get('agentetel');?><br />

                        <?=mailto($this->input->get('agentemail'), $this->input->get('agentemail'));?>

    <? } else { ?>
                        <div class="bit-1" style="padding-top:10px;">
                            <a href="tel:018009001292" style="font-size:1.2em;font-weight:bold;">01 800 900 1292</a>
                        </div>

    <? } ?>
<? } else { ?>
                        <?=$this->session->userdata('agente');?><br />

                        <?=$this->session->userdata('tel');?><br />

                        <?=mailto($this->session->userdata('mail'), $this->session->userdata('mail'));?>

<? } ?>
                    </div>
                </div>
                <div class="bit-40 footer-img">
                    <?=anchor('https://twitter.com/AXAMexico', img('images/assets/twt_redes.svg'));?>

                    <?=anchor('https://www.facebook.com/axamexico', img('images/assets/fb_redes.svg'));?>

                </div>
            </div>
            <div class="frame bit-1">
                <div class="bit-1 legales">
                    <?=anchor('http://axa.mx/Personas/ServicioAXA/Contactanos/Paginas/Quejas.aspx', '&iquest;Insatisfecho con nuestro servicio? '.img('images/assets/ico_coment.png'), array('target'=>'_blank'));?>

                    <p>El contenido de este bolet&iacute;n es &uacute;nicamente informativo. Los productos se regir&aacute;n por las disposiciones contractuales y legales aplicables.</p>
                </div>
            </div>
            <div class="frame bit-1">
                <div class="bit-1 contacto">
                    <p>AXA Seguros, S.A. de C.V. | Tel: <a href="tel:+5551691000">5169 1000</a> &#149; <a href="tel:018009001292">01 800 900 1292</a> &#149; <?=anchor('http://www.axa.mx/?utm_medium=email+AXA/Touch&utm_campaign=AXA/Touch+Boletin+septiembre+2014+Escoge+y+estrena&utm_source=Boletin+septiembre+2014', 'axa.mx', array('target'=>'_blank'));?></p>
                </div>
            </div>
        </div>
        <script src="js/main.min.js"></script>
    </body>
</html>