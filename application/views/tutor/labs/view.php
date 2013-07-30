<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Содержание лабораторной</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

      
                <table class="fancy_table" widht="100%">
                    <thead>
                    <tr>
                        <th scope="col">Название</th>
                        <th scope="col">Условие задачи</th>
                         <th scope="col">Ответ</th>
                          <th scope="col">Действие</th>
                    </tr>
                    </thead>
                    <?php foreach($exercise as $q): ?>
                    
                    <tr>
                        <td><?=$q->title;?></td>
                        <td>
                            <?=$q->condition;?>
                        </td>
                        <td>
                             <?=$q->answer;?>
                        </td>
                        <td>
                            <a href="<?php echo url::base(); ?>tutor/exercise/edit/<?=$q->id;?>"> <span class="icon_action_refresh">Редактировать</span></a>
                            <a href="<?php echo url::base(); ?>tutor/exercise/delete/<?=$q->id;?>"> <span class="icon_action_stop">Удалить</span></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </table>
 <a href="<?php echo url::base(); ?>tutor/labs/" class="button small white"><span>Вернуться назад</span></a>
            </div>
            <!-- .entry-content -->
      
</section>
<!-- .pagemid -->
