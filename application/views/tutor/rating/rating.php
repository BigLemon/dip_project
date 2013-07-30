<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Список Ваших курсов</h1>
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

               <div id="main">
            <div class="entry-content">

                <table class="fancy_table">
                    <thead>
                    <tr>
                         <th scope="col">№ </th>
                        <th scope="col">Название курса</th>
                        

                    </tr>
                    </thead>
                    <?php foreach($course as $u): ?>
                    <tr>
                        <td><a href="<?php echo url::base(); ?>tutor/rating/view/<?=$u->id;?>" ><?=$u->id;?></a></td>
                        <td><a href="<?php echo url::base(); ?>tutor/rating/view/<?=$u->id;?>" ><?=$u->name;?>&nbsp;</a></td>
                         
                       
                    </tr>
                        <?php endforeach; ?>

                </table>

            </div>
            <!-- .entry-content -->
        </div>
                    <!-- .systabspane -->

                </article>

            </div><!-- .entry-content -->
        </div><!-- #main -->

        <div id="sidebar">
            <div class="widget-area">

                <aside class="syswidget">
                    
                </aside>
                <!-- .syswidget -->


            </div>
            <!-- .widget-area -->
        </div>
        <!-- #sidebar -->

    </div><!-- .inner -->
</section><!-- .pagemid -->