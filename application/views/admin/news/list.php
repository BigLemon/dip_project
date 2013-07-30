<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Управление новостями</h1>
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
                        <th scope="col">Автор</th>
                        <th scope="col">Дата</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <?php foreach($news as $n): ?>
                    <tr>
                        <td><a href="<?php echo url::base(); ?>news/view/<?=$n->id;?>" ><?=$n->title;?></a></td>
                        <td><?=$n->author->firstname;?> <?=$n->author->lastname;?></td>
                        <td><?=$n->dt;?></td>
                        <td>
                            <a href="<?php echo url::base(); ?>admin/news/edit/<?=$n->id;?>"> <span class="icon_action_refresh"></span></a>
                            <a href="<?php echo url::base(); ?>admin/news/delete/<?=$n->id;?>"> <span class="icon_action_stop"></span></a>
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
                    <a href="<?php echo url::base(); ?>admin/news/add" class="button small blue"><span>Добавить новость</span></a>
                    <br /><br />

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
