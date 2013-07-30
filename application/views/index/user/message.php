<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Сообщения</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <div class="fullwidth">
                    <a href="<?php echo url::base(); ?>user/" class="button small blue"><span>Назад к профилю</span></a>
                      
                    <div class="systabspane vertabs">
                        <ul class="tabs">
                            <li  style="background-color:Tab 0" ><a href="#" style="color:Tab 0;">Входящие</a></li>
                            <li  style="background-color:Tab 1" ><a href="#" style="color:Tab 1;">Исходящие</a></li>
                            
                        </ul>
                        <div class="panes">
                               
                            <div  class="tab_content">
                                <? foreach($inmessage as $msg) :?>
                                <div class="fancytoggle">
                                    <span class="toggle"><a href="#">От <?=$msg->to->firstname; ?>|<?=$msg->from->firstname; ?> | <?=$msg->topic;?>  (<?=$msg->dt;?>)</a></span>
                                    <div class="toggle_content" style="display: none;">
                                        <div class="toggleinside"><?=$msg->txt;?></div>
                                    </div>
                                </div>
                                <? endforeach; ?>
                            
                            </div>

                            <div  class="tab_content">
                               <? foreach($outmessage as $msg) :?>
                                <div class="fancytoggle">
                                    <span class="toggle"><a href="#">Для <?=$msg->to->firstname; ?> | <?=$msg->topic;?>  (<?=$msg->dt;?>)</a></span>
                                    <div class="toggle_content" style="display: none;">
                                        <div class="toggleinside"><?=$msg->txt;?></div>
                                    </div>
                                </div>
                                <? endforeach; ?>
                            </div>
                            
                            
                          

                        </div>
                         <a href="<?php echo url::base(); ?>user/sendpm" class="button small blue"><span>Написать сообщение</span></a>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <!-- .entry-content -->
        </div>
        <!-- #fullwidth -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->