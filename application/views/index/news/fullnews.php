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

        <div class="post_entry">

            <div class="post">

                <div class="post_content">

                    <?php if(isset($error)): ?>
                    <h3><?=$error?></h3>

                    <?else:?>

                    <h2 class="entry-title"><a href="<?php echo url::base(); ?>news/view/<?=$news->id;?>"><?=$news->title?></a></h2>

                    <div class="post-info">
                        <div class="postmeta">
                            <span><em>Написано</em> <?=$news->dt?> </span>
                            <span><em>Автор</em> <a href="<?php echo url::base(); ?>user/view/<?=$news->author->id?>"><?=$news->author->firstname?> <?=$news->author->lastname?></a></span>
                        </div>
                    </div>
                    <!-- .post-info -->

                    <?=$news->fulltext;?>

                    <?php endif;?>

                </div>
                <!-- .post_content -->

            </div>
            <!-- .post -->


        </div>
        <!-- .post_entry -->

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