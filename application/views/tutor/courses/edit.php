<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Редактирование курса</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <form class="form" method="post" action="<?php echo url::base(); ?>tutor/courses/edit">
                    <div class="sysform">
                    <table>
                        <tr>
                            <td width="150px" align="right">
                                <label for="name">Название</label>
                            </td>
                            <td>
                                <input type="text" id="name"  size="70" name="name" value="<?=$course->name;?>" />
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" align="right">
                                <label for="desc">Описание</label>
                            </td>
                            <td>
                                <div class="fulltextarea">
                                    <input name="desc" id="desc" size="70" value="<?=$course->desc;?>" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" align="right">
                                <label for="name">Категория</label>
                            </td>
                            <td>
                                <select name="id_category">
                                    <?php foreach($category as $cat): ?>
                                    <option value="<?=$cat->id;?>" <?php if($cat->id == $course->category->id) echo "selected" ;?> >
                                        <?=$cat->name;?></option>
                                    <?php endforeach; ?>
                                </select></p>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" align="right">
                                <label for="name">Статус</label>
                            </td>
                            <td>
                                <select name="status">
                                    <option value="1">Открыт</option>
                                    <option value="0">Закрыт</option>
                                </select></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" >
                                <input type="hidden" id="id" name="id" value="<?=$course->id;?>" />
                                <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Обновить</span></button>
                            </td>
                        </tr>

                    </table>
                    </div>

                </form>

            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->

   
        <!-- #sidebar -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
