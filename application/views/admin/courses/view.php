<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Лекции курса</h1>
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
                        <th scope="col">Название</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <?php foreach($lections as $l): ?>
                    <tr>
                        <td><?=$l->topic;?></td>
                        <td>
                            <a href="<?php echo url::base(); ?>admin/lections/edit/<?=$l->id;?>"> <span class="icon_action_refresh">Редактировать</span></a>
                            <a href="<?php echo url::base(); ?>admin/lections/delete/<?=$l->id;?>"> <span class="icon_action_stop">Удалить</span></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </table>

            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->

        <div id="sidebar">
            <div class="widget-area">

                <aside class="syswidget">
                    <a href="<?php echo url::base(); ?>admin/courses/lectionadd/<?php echo $course_id;?>" class="button small blue"><span>Добавить новую лекцию</span></a>
                    <br />
                </aside>
                <aside class="syswidget">
                    <a href="<?php echo url::base(); ?>tutor/tests/add/<?php echo $course_id;?>" class="button small blue"><span>Добавить новый тест</span></a>
                    <br />
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
