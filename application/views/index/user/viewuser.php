<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Профиль</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <article class="post">

                    <?php if(!isset($error)): ?>
                    <div class="systabspane">

                        <ul class="tabs">
                            <li><a href="#">Информация</a></li>
                            <li><a href="#">Изучаемые курсы</a></li>
                            <li><a href="#">Пройденные курсы</a></li>
                        </ul>
                        <!-- .tabs -->
                        <div class="panes">
                            <div  class="tab_content">
                                <h5><?=$user->firstname?> <?=$user->lastname?></h5>
                                <p>Userid: <?=$user->id?></p>
                            </div>
                            <div  class="tab_content">
                                <?php if ($courses->count() > 0): ?>

                                <table class="fancy_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Название</th>
                                        <th scope="col">Категория</th>
                                        <th scope="col">Пройдено</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    foreach($courses as $c)
                                    {
                                        echo '<tr><td>' . $c->name . '</td><td>' . $c->category->name . '</td><td></td></tr>';
                                    }
                                    ?>
                                </table>
                                <?php endif;?>

                                <?php if ($courses->count() == 0) echo "<strong>Нет активных курсов для изучения.</strong>" ?>
                            </div>
                            <!-- .tab_content -->

                            <div  class="tab_content">
                                <h5>Успешно закончены следующие курсы</h5>
                                <ul class="list-check black">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    <li>Curabitur cursus eros a mauris scelerisque lobortis</li>
                                    <li>In vitae dolor ac orci sagittis tristique</li>
                                    <li>In aliquam congue risus, non hendrerit lectus viverra</li>
                                    <li>Nunc tempor velit interdum nibh pellentesque tempor.</li>
                                </ul>
                            </div>
                            <!-- .tab_content -->

                        </div>
                        <!-- .panes -->

                        <div class="clear"></div>

                    </div>
                    <!-- .systabspane -->

                    <? else: ?>
                    <h3><?=$error;?></h3>
                    <? endif; ?>
                </article>

            </div><!-- .entry-content -->
        </div><!-- #main -->

        <?php if(!isset($error)) : ?>
        <div id="sidebar">
            <div class="widget-area">

                <aside class="syswidget">
                    <?php if($user->avatar == "") $user->avatar = "no_avatar"; ?>
                    <img src="<?php echo url::base(); ?>images/avatars/<?=$user->avatar?>.jpg" alt="avatar" />

                    <a rel="leanModal" name="send_pm" href="#send_pm" class="button medium blue"><span>Написать сообщение</span></a>
                </aside>
                <!-- .syswidget -->

            </div>
            <!-- .widget-area -->
        </div>
        <!-- #sidebar -->
        <?php endif ;?>

    </div><!-- .inner -->
</section><!-- .pagemid -->

<div id="send_pm">
    <div id="register_modal_header">
        <h2>Новое сообщение</h2>
        <p>Кому: <?=$user->firstname?> <?=$user->lastname?> </p>
        <a class="modal_close" href="#"></a>
    </div>

    <div class="sysform">

        <form class="form" method="post" action="<?php echo url::base(); ?>user/sendpm/">
            
            <p style="margin: 15px">
                <label for="topic">Тема</label>
                <input type="text" id="topic" name="topic" />
                <input name="to_id" type="hidden" value="<?=$user->id?>" />
                <input name="from_id" type="hidden" value="<?=Auth::instance()->get_user()?>" />
            </p>

            <p style="margin: 15px">
                <textarea name="txt" id="txt" rows="10"></textarea>
            </p>

            <p style="margin: 15px">
                <button type="submit" value="Send" name="submit" class="button medium blue"><span>Отправить</span></button>
            </p>

        </form>
    </div>

</div>