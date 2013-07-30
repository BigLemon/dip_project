<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Мой профиль</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <article class="post">

                    <a href="<?php echo url::base(); ?>user/message" class="button small blue"><span>Мои сообщения</span></a>
                    <a href="<?php echo url::base(); ?>user/settings" class="button small blue"><span>Настройки</span></a>

                    <div class="systabspane">

                        <ul class="tabs">
                            <li><a href="#">Информация</a></li>
                            <li><a href="#">Изучаемые курсы</a></li>
                           
                             <li><a href="#">Лабы</a></li>
                        </ul>
                        <!-- .tabs -->
                        <div class="panes">
                            <div  class="tab_content">
                                <h5><?=$user->firstname?> <?=$user->lastname?></h5>
                                 <p>Эл.почта: <?=$user->email?></p>
                              <p>Логин: <?=$user->username?></p>
                              <p>ICQ: <?=$user->icq?></p>
                              <p>Skype: <?=$user->skype?></p>
                            </div>
                            <div  class="tab_content">
                            <?php if ($courses->count() > 0): ?>

                                <table class="fancy_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Название</th>
                                        <th scope="col">Категория</th>
                                        <th scope="col">Пройдено</th>
                                        <th scope="col">Действия</th>
                                    </tr>
                                    </thead>
                                    <?php foreach($courses as $c) : ?>
                                        <tr>
                                            <td><?=$c->name;?></td>
                                            <td><?=$c->category->name;?></td>
                                            <td></td>
                                            <td>
                                                <a href="<?php echo url::base(); ?>user/delcourse/<?=$c->id;?>"> <span class="icon_action_stop">Удалить</span></a>
                                            </td>
                                        </tr>

                                    <?php endforeach;?>
                                       
                                </table>
                                <?php endif;?>

                                <?php if ($courses->count() == 0) echo "<strong>Нет активных курсов для изучения.</strong>" ?>
                            </div>
                            <!-- .tab_content -->

                            <!--<div  class="tab_content">
                                <h5>Успешно закончены следующие курсы</h5>
                                <ul class="list-check black">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    <li>Curabitur cursus eros a mauris scelerisque lobortis</li>
                                    <li>In vitae dolor ac orci sagittis tristique</li>
                                    <li>In aliquam congue risus, non hendrerit lectus viverra</li>
                                    <li>Nunc tempor velit interdum nibh pellentesque tempor.</li>
                                </ul>
                            </div>-->
                            <!-- .tab_content -->
                              <div  class="tab_content">
                                <h5>Лабы</h5>
                                 <?if($errors):?>
                <? foreach ($errors as $error) : ?>
                    <span class="valid_error"><img src='<?php echo url::base(); ?>images/icons/icon_alert.gif'> <?=$error?></span><br>
                    <?endforeach;?>
                <?endif?>
                  
                              <?php foreach($files as $c) : ?>
                               {
                                    <a href="<?php echo url::base(); ?>inc/index/"><?php echo $c?></a>
                                   
                               }
                           
                                 <?php endforeach;?>
                           
                            </div>
                        </div>
                        <!-- .panes -->

                        <div class="clear"></div>

                    </div>
                    <!-- .systabspane -->

                </article>

            </div><!-- .entry-content -->
        </div><!-- #main -->

        <div id="sidebar">
            <div class="widget-area">

                <aside class="syswidget">
                    <?php if($user->avatar == "") $user->avatar = "no_avatar"; ?>
                    <img src="<?php echo url::base(); ?>images/avatars/<?=$user->avatar?>.jpg" alt="avatar"/><br>
                </aside>
                <!-- .syswidget -->


            </div>
            <!-- .widget-area -->
        </div>
        <!-- #sidebar -->

    </div><!-- .inner -->
</section><!-- .pagemid -->