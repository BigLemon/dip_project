<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Управление тестами</h1>
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
                        <th scope="col">Время</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <?php foreach($tests as $t): ?>
                    <tr>
                        <td><a href="<?php echo url::base(); ?>tutor/tests/view/<?=$t->id;?>" ><?=$t->name;?></a></td>
                        <td><?=$t->time;?> мин.</td>
                        <td>
                            <a href="<?php echo url::base(); ?>tutor/tests/edit/<?=$t->id;?>"> <span class="icon_action_refresh">Редактировать</span></a>
                            <a href="<?php echo url::base(); ?>tutor/tests/delete/<?=$t->id;?>"> <span class="icon_action_stop">Удалить</span></a>
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
                    <a href="<?php echo url::base(); ?>tutor/tests/add" class="button small blue"><span>Добавить новый тест</span></a>
                    <br /><br />

                    
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
