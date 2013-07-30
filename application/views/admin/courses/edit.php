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

                <form class="form" method="post" action="<?php echo url::base(); ?>admin/courses/edit">
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

        <div id="sidebar">
            <div class="widget-area">

                <aside class="syswidget">
                    <h3>Custom Text Widget</h3>
                    <img src="./images/image1.jpg" alt="img" class="imageshadow bottom20" />
                    <p>Vestibulum dapibus lacus a elit facilisis posuere. Maecenas eu justo id arcu pharetra pulvinar. Praesent elementum accumsan nibh, a varius elit pretium id. Etiam sagittis, risus [...]</p>
                </aside>
                <!-- .syswidget -->

                <aside class="syswidget">
                    <h3 class="widget-title">Categories <span></span></h3>
                    <ul>
                        <li><a href="#">Blog Magaezine</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">web Design</a></li>
                        <li><a href="#">Print Media</a></li>
                        <li><a href="#">Donec egestas</a></li>
                        <li><a href="#">Quisque</a></li>
                    </ul>
                </aside>
                <!-- .syswidget -->

            </div>
            <!-- .widget-area -->
        </div>
        <!-- #sidebar -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
