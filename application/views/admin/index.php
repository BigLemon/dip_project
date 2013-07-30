<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Панель управления админа</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                 <h5> <?=$user->lastname?> <?=$user->firstname?> <?=$user->otch?></h5>
                 <p>Эл.почта: <?=$user->email?></p>
                  <p>Логин: <?=$user->username?></p>
                  <p>ICQ: <?=$user->icq?></p>
                  <p>Skype: <?=$user->skype?></p>

            </div><!-- .entry-content -->
            <a href="<?php echo url::base(); ?>user/settings" class="button small blue"><span>Изменить данные</span></a>
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