<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Управление курсами</h1>
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
                        <th scope="col">Раздел</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <?php foreach($pages as $p): ?>
                    <tr>
                        <td><a href="<?php echo url::base(); ?>admin/courses/view/<?=$p->id;?>" ><?=$p->name;?></a></td>
                        <td><?=$p->category->name;?></td>
                        <td>
                            <a href="<?php echo url::base(); ?>admin/courses/edit/<?=$p->id;?>"> <span class="icon_action_refresh">Редактировать</span></a>
                            <a href="<?php echo url::base(); ?>admin/courses/delete/<?=$p->id;?>"> <span class="icon_action_stop">Удалить</span></a>
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
                    <a href="<?php echo url::base(); ?>admin/courses/add" class="button small blue"><span>Добавить новый курс</span></a>

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
