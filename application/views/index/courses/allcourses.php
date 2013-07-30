<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Список всех курсов</h1>
        </div>
        <div class="subdesc">
            <p>Для прохождения курса необходимо авторизоваться, а затем записаться на прохождение.</p>
        </div>
    </div>
</section>
<!-- #subheader -->
<section class="pagemid">
<div class="inner">

<div id="main">
<div class="entry-content">

<article class="post">

<div class="portfolio_item">

<?php if ($courses->count() > 0): ?>
    <?php $inline = 1; ?>
    <?php foreach($courses as $c):?>
    <?php if ($inline == 3) {
            echo '<div class="one_third last">';
            $inline = 1;
        }
        else {
            echo '<div class="one_third">';
            $inline++;
        }
    ?>
        <div class="port_box">
            <div class="port_img">
                <div class="post_img">
                    <img alt="img" src="<?php echo url::base(); ?>images/assets/post_img1.jpg" />
                </div>
            </div>
            <div class="port_desc">
                <h5><a href="<?php echo url::base(); ?>courses/view/<?=$c->id;?>"><?=$c->name;?></a></h5>
                <p class="extras">
                    <span class="pdate">
                        <?=$c->category->name;?>
                    </span>
                </p>
                <p><?=$c->desc;?></p>
                <?php if ( in_array($c->id , $usercourses)): ?>
                   <p><a class="button small red"><span>Уже записаны</span></a></p>
                <?php else: ?>
                <p><a href="<?php echo url::base(); ?>user/addcourse/<?=$c->id;?>" class="button small orange"><span>Записаться на курс</span></a></p>
                <?php endif; ?>
            </div>
        </div>
        <!-- .port_box -->
    </div>
    <!-- .one_third -->

    <?php endforeach;?>

<?php endif;?>

<?php if ($courses->count() == 0) echo "<strong>Нет курсов для изучения.</strong>" ?>


</div>
    <!-- .portfolio_item -->

    <div class="clear"></div>


</article>

</div>
    <!-- .entry-content -->
</div>
    <!-- #main -->

</div>
    <!-- .inner -->
</section>
<!-- .pagemid -->