<section id="subheader" xmlns="http://www.w3.org/1999/html">
    <div class="inner">
        <div class="subtitle">
            <h1>Тестирование</h1>
        </div>
    </div>
</section>
<!-- #subheader -->
<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <article class="post">


<form action="<?php echo url::base(); ?>tests/go" method="POST">

    <?php foreach($questions as $t): ?>
        <label><?=$t->title;?></label><br>
        <?php foreach($t->qanswer->find_all() as $k => $v) :?>
            <? if($t->type == "text") { ?> 
             <input type="<?=$t->type;?>" name="<?=$t->id;?><?php echo $v; ?>" value="">
                 <? } 
               else { ?>
            <input type="<?=$t->type?>" name="<?=$t->id;?>" value="<?php echo $v; ?>">
                 <? } ?>
                <?php echo htmlspecialchars($v->value);?>
             
            </input>
                  
            <br>
            
                
        <?php endforeach; ?>
        <br>
    <?php endforeach; ?>
            
    <input type="hidden" name='id_test' value="<?=$id_test;?>">
    <button type="submit" value="Send" name="submit" class="button medium blue"><span>Завершить тест</span></button>
</form>

                </article>

            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->