                <div class="container opinion">
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
                                <?=form_open( 'opinion/submit', '',[ 'question' => $value[ 'id' ], 'form_id' => $form_id ] );?>
                                <h2><?=img( 'images/assets/' . $value[ 'id' ] . '.jpg' );?> <?=$value[ 'question' ];?></h2>
                                    <ul>
                                    <? foreach( $value[ 'answers' ] as $id => $answer ) { ?>
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
                </div>
                <div class="axa_container_division"></div>