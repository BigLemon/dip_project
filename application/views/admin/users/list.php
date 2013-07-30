<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Управление пользователями</h1>
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
                        
                        <th scope="col">ID</th>
                        <th scope="col">Фамилия и Имя</th>
                        <th scope="col">email</th>
                        <th scope="col">Роль</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <?php foreach($user as $p): ?>
                    <tr>
                        <td><?=$p->id;?></td>
                        <td><a href="<?php echo url::base(); ?>admin/users/edit/<?=$p->id;?>" ><?=$p->firstname;?> <?=$p->lastname;?></a></td>
                        <td><?=$p->email;?></td>
                        <td><?php foreach($p->roles->find_all() as $role): ?>
                        <?=$role->name;?>
                        <?php endforeach; ?></td>
                        <td>
                            <a href="<?php echo url::base(); ?>admin/users/edit/<?=$p->id;?>"> <span class="icon_action_refresh">Редактировать</span></a>
                            <a href="<?php echo url::base(); ?>admin/users/delete/<?=$p->id;?>"> <span class="icon_action_stop">Удалить</span></a>
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
                    <a href="<?php echo url::base(); ?>admin/pages/add" class="button small blue"><span>Добавить новую страницу</span></a>
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
