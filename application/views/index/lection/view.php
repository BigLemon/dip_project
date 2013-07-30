<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Лекции</h1>
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

                        <h3><?=$lection->topic;?></h3>
                        <?=$lection->txt;?>

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
                    <h3 class="widget-title">Лекции курса <span></span></h3>
                    <ul>
                    <?php foreach($lections_list as $l): ?>
                        <li><a href="<?php echo url::base(); ?>lection/view/<?=$l->id;?>"><?=$l->topic;?></a></li>
                    <?php endforeach; ?>
                    </ul>
                </aside>
                <!-- .syswidget -->

            </div>
            <!-- .widget-area -->
        </div>
        <!-- #sidebar -->
        <?php endif ;?>

    </div><!-- .inner -->
</section><!-- .pagemid -->
