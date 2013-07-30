<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Содержимое курса</h1>
        </div>
    </div>
</section>
<!-- #subheader -->
<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

            <article class="post">
                
                <h3 class="widget-title">Лекции курса <span></span></h3>
                <ul>
                    <?php foreach($lections as $l): ?>
                    <li><a href="<?php echo url::base(); ?>lection/view/<?=$l->id;?>"><?=$l->topic;?></a></li>
                    <?php endforeach; ?>
                </ul>
                
                
                
                
                <h3 class="widget-title">Тесты курса <span></span></h3>
                 <ul> 
                     
                    <?php foreach($tests as $c): ?>
                        <li><a href="<?php echo url::base(); ?>tests/index/<?=$c->id;?>"><?=$c->name;?></a></li>
                       
                           
                    <?php endforeach; ?>
                </ul>
              
                <h3 class="widget-title">Лабораторные курса <span></span></h3>
                <ul>
                     <?php foreach ($lab as $f):?>
                   
                    <li><a href="<?php echo url::base(); ?>inc/index/<?=$f->id;?>"> <?echo $f->title; ?></a></li>
                  
                        <?php endforeach; ?>
                   
                </ul>
            </article>

        </div>
        <!-- .entry-content -->
    </div>
    <!-- #main -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->