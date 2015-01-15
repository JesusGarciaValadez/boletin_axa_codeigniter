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
        <li><?=anchor('2015/enero/salud', 'TU SALUD');?></li>
        <li><?=anchor('2015/enero/futuro', 'TU FUTURO');?></li>
        <li><?=anchor('2015/enero/auto', 'TU AUTO');?></li>
        <li><?=anchor('2015/enero/hogar', 'TU HOGAR');?></li>
        <li><?=anchor('opinion?email='.$this->session->userdata('email'), 'TU OPINI&Oacute;N');?></li>
    </ul>
</nav>

<div class="container">
    <?=($this->session->flashdata('msg') ? '<p style="color:red;font-size:.8em;">'.$this->session->flashdata('msg').'</p>' : '');?>
<div class="frame">
    <div class="quiz-header">
        <?=img('images/assets/header-quiz.png');?>
    </div>
</div>
<div class="frame quiz">
    <div class="quiz-slides" style="width:<?=(count($poll)+1)*100;?>%;">
        <? foreach($poll as $key => $value){ ?>
        <div class="quiz-slide" style="width:<?=100/(count($poll)+1);?>%;">
            <?=form_open('opinion/submit', '',array('question'=>$value['id'], 'email'=>$this->input->get('email', true)));?>
            <h2><?=img('images/assets/'.$value['id'].'.jpg');?> <?=$value['question'];?></h2>
                <ul>
                <? foreach($value['answers'] as $id => $answer){ ?>
                    <li><input type="radio" id="answer<?=$id;?>" name="answer" value="<?=$answer['id'];?>" /> <?=$answer['answer'];?></li>
                <? } ?>
                </ul>
            <?=form_close();?>
        </div>
        <? } ?>
        <div class="quiz-slide" style="width:<?=100/(count($poll)+1);?>%;text-align:center;">
            <?=br(2);?>
            <h1>Muchas gracias por contestar nuestra encuesta</h1>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var w = $('.quiz').width();
        $('input[name=answer]').click(function(){
            var l = $('.quiz-slides').position();
            $('.quiz-slides').animate({
                left: (l.left-w)+'px'
            });

            $.post('<?=base_url("opinion/submit");?>', {
                question: $(this).parent().parent().parent().find('input[name=question]').val(),
                email: $('input[name=email').val(),
                answer: $(this).parent().find('input[name=answer]').val()
            }).done(function(data){
                console.log(data);
            });
        });
    });
</script>