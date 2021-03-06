<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Управление лабами</h1>
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
                    <?php foreach($pages as $p): ?>
                    <tr>
                        <td><a href="<?php echo url::base(); ?>tutor/labs/edit/<?=$p->id;?>" ><?=$p->title;?></a></td>
                        
                        <td>
                            <a href="<?php echo url::base(); ?>tutor/labs/edit/<?=$p->id;?>"> <span class="icon_action_refresh">Редактировать</span></a>
                            <a href="<?php echo url::base(); ?>tutor/labs/delete/<?=$p->id;?>"> <span class="icon_action_stop">Удалить</span></a>
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
                    <a href="<?php echo url::base(); ?>tutor/labs/add" class="button small blue"><span>Добавить новую задачу</span></a>

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
