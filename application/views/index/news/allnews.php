<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Новости</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <?php foreach($news as $entry):?>

                <div class="post">

                    <h2 class="entry-title"><a href="<?php echo url::base(); ?>news/view/<?=$entry->id;?>"><?=$entry->title?></a></h2>

                    <div class="post-info">
                        <div class="postmeta">
                            <span><em>Написано</em> <?=$entry->dt?> </span>
                            <span><em>Автор</em> <a href="<?php echo url::base(); ?>user/view/<?=$entry->author->id?>"><?=$entry->author->firstname?> <?=$entry->author->lastname?></a></span>
                        </div>
                    </div>
                    <!-- .post-info -->

                    <?=$entry->short;?>
                    <a class="more-link" href="<?php echo url::base(); ?>news/view/<?=$entry->id;?>">Читать полностью...</a>

                </div>
                <!-- .post -->

                <div class="divider_line"></div>

                <?php endforeach;?>

            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->

        <div id="sidebar">
            <div class="widget-area">

                <aside class="syswidget">

                </aside>
                <!-- .syswidget -->

            </div>
            <!-- .widget-area -->
        </div>
        <!-- #sidebar -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
