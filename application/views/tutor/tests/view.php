<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Вопросы теста</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <table class="fancy_table">
                    <thead>
                    <tr>
                        <th scope="col">Вопрос</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <?php foreach($questions as $q): ?>
                    <tr>
                        <td><?=$q->title;?></td>
                        <td>
                            <a href="<?php echo url::base(); ?>tutor/questions/edit/<?=$q->id;?>"> <span class="icon_action_refresh">Редактировать</span></a>
                            <a href="<?php echo url::base(); ?>tutor/questions/delete/<?=$q->id;?>"> <span class="icon_action_stop">Удалить</span></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </table>
 <a href="<?php echo url::base(); ?>tutor/tests/" class="button small white"><span>Вернуться назад</span></a>
            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->

        <div id="sidebar">
            <div class="widget-area">

                <aside class="syswidget">
                    <a href="<?php echo url::base(); ?>tutor/questions/add/<?php echo $id_test;?>" class="button small blue"><span>Добавить вопрос</span></a>
<br><br>
                    <h3>Немного статистики</h3>
                    <p>Всего просмотров: ...</p>
                    <p>За сегодня: ...</p>
                </aside>
                <!-- .syswidget -->

                <!-- .syswidget -->

            </div>
            <!-- .widget-area -->
        </div>
        <!-- #sidebar -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
