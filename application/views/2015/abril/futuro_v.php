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

<div class="container futuro">
 <?=($this->session->flashdata('msg') ? '<p style="color:red;font-size:.8em;">'.$this->session->flashdata('msg').'</p>' : '');?>
    <div class="frame skyblue">
    <div class="bit-2" style="padding:0"><br>
        <?=img('images/assets/futuro_files/banner_principal.png');?> <br>
<br>

  </div><br>
<div class="bit-2">
        <br>        <h1>¿Cómo recuperarte <br>de los gastos de diciembre?</h1><br>
        <p style="font-size:1.1em">Tras las compras de último minuto
de los regalos de Navidad, los
gastos de la cena de fin de año y
los Reyes Magos, generalmente, el
presupuesto familiar experimenta
momentos de tensión los primeros
meses del año.</p>
    </div>

  </div>

<div class="frame graytext">
    <div class="bit-60"><br>

      <p style="text-align:left; font-size:1.1em;">La famosa cuesta de enero, llamada así por la escasa o nula
planeación patrimonial al momento de efectuar los gastos
decembrinos, se convierte en una carga para la economía
personal de los mexicanos.
        <br>
        <br>
        A final de año los indicadores económicos son favorables para la
mayoría de las familias, sin embargo una parte importante de la
población no lleva un registro puntual de estos ingresos y gastos,
lo que provoca que al finalizar las fiestas exista un déficit o los
recursos sean insuficientes para solventar los gastos de enero.
        </hp>
    </div>

    <div class="bit-40">
        <?=img('images/assets/futuro_files/calendario.png');?>
    </div>


</div>

<div class="frame light-yellow">
 <div class="bit-20">
        <?=img('images/assets/futuro_files/grafica.png');?> </div>
    <div class="bit-80">

      <p><span style="font-size:3.8em; color:#F00"><strong>57</strong>%</span><span style="font-size:1.5em; color:#F00"> de los mexicanos ya tenían previsto padecer la cuesta de enero desde diciembre.</span></p>
    </div>

<div class="bit-1">

        <p align="left"  style="font-size:1.5em; color:#039">Es cierto que no todos llegan a endeudarse para solventar los gastos decembrinos, pero parece que una gran parte sí prefiere gastar que planear y ahorrar para el futuro.</p>
  <div><span class="source" align="center"  style="color:#039">Fuente: Encuesta Nacional de Vivienda- Parametría 2013 (www.parametría.com.mx)</span></div>
  </div>
  </div>




<div class="frame graytext">
    <div class="bit-1">

        <p style="font-size:1.5em">A continuación, encontrarás algunas recomendaciones que te ayudarán a tomar las medidas necesarias para superar esta etapa, pero sobre todo, para planificar tu economía el resto del año:</p><br>
    </div>

</div>


<div class="frame graytext">
    <div class="bit-2">

      <div style="height:60px">
        <h2 style="text-align:center; color:#6CF">&#8226; Analiza tu capacidad de pago</h2></div>
        <div style="min-height:100px"><p style="text-align:left; padding-left:10px">Resta de tu ingreso mensual todos tus gastos fijos, así como el pago a tarjetas de crédito. Debes de considerar que al menos debes ahorrar el 10% de tu ingreso mensual. Haciendo este
cálculo identifica aquellos gastos de los que puedes prescindir.</p></div>
<div align="center"><?=img('images/assets/futuro_files/calculadora.png');?>        </div>
    </div>



   <div class="bit-2">

      <div style="height:60px"><h2 style="text-align:center; color:#6CF">&#8226; Liquida tus créditos de forma
inteligente</h2></div>
        <div style="min-height:100px"> <p style="text-align:left; padding-left:10px">Si tienes varias deudas, determina cuál es la más alta o la que te genera mayores intereses y concéntrate en liquidar una por una.</p><br></div>
<div align="center"><?=img('images/assets/futuro_files/proyector.png');?>        </div>
    </div>
 </div>




<div class="frame graytext">
    <div class="bit-2">

      <div style="min-height:60px">
       <h2 style="text-align:center; color:#6CF">&#8226; Piensa dos veces antes de pagar el mínimo</h2>

    </div>
       <div style="min-height:110px">  <p style="text-align:left; padding-left:10px">Las tarjetas de crédito no son una extensión de tu
capital. Si sólo pagas el mínimo requerido, tu deuda nunca disminuirá y los intereses  absorberán el dinero que podrías ahorrar. Paga un poco más de tu deuda e investiga sobre planes de financiamiento con menos interés. En la medida que disminuyas el pago de intereses, aumentará tu capacidad de ahorro.</p></div><br>
<div align="center"><?=img('images/assets/futuro_files/nueve.png');?>       </div>
    </div>



   <div class="bit-2">

      <div style="height:60px">
            <h2 style="text-align:center; color:#6CF">&#8226; Genera un ahorro permanente</h2>

    </div>
         <div style="min-height:110px">
           <p style="text-align:left; padding-left:10px">Utiliza mecanismos de ahorro que no te permitan
retirar el dinero fácilmente o invierte a largo plazo.
Aunque sea una cantidad pequeña, ese dinero te
generará rendimientos. Una excelente opción son
los seguros de vida ya que, además de ayudarte
a ahorrar, te protegen a ti y a tu familia en caso
de que llegaras a faltar.</p></div><br>
<div align="center"><?=img('images/assets/futuro_files/ahorro.png');?>        </div>
    </div>
 </div>





<div class="frame">
    <div class="bit-1 blue-dotted">
        <h3>En AXA contamos con una amplia gama de productos que se
adaptan a tus necesidades y estilo de vida con los que podrás
maximizar el valor de tu dinero.<br>
<br>
Comienza el año con el pie derecho y cuida tu dinero. Platica con
tu agente y juntos busquen la mejor opción.</h3>
    </div>
</div>

<div class="frame">
    <div class="bit-3"></div>

    <div class="bit-3">
        <table class="related">
            <thead>
            <tr>
                <th>Artículos relacionados</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><span class="pink-text">•</span> <?=anchor('http://www.boletinaxa.com.mx/anterior/tu-futuro-marzo-2014.html','La mujer independiente en México');?><br>
                    <span class="pink-text">•</span> <?=anchor('http://www.boletinaxa.com.mx/anterior/tu-futuro-diciembre-2013.html','Situación de las familias tradicionales en México');?>                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="bit-3"></div>
</div>

<div class="frame light-gray" style="text-align:center;margin-bottom:8px;">
    <h2 class="lightblue-text">Si necesitas más información</h2>
    <h2 class="pink-text">¡Contacta a tu agente!</h2>
</div>