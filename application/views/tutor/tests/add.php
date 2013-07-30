<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Новый тест</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">
                <article class="post">
                <form class="form" method="post" action="<?php echo url::base(); ?>tutor/tests/add">
                    <div class="sysform">
                       <input type="hidden" id="course_id" name="course_id" value="<?php echo $course_id; ?>" />
                        <table>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="name">Название</label>
                                </td>
                                <td>
                                    <input type="text" id="name" name="name" value="" />
                                </td>
                                <td>
                                    <span id="error_name" class="valid_name"></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="name">Курс</label>
                                </td>
                                <td>
                                     <p><select name="course_id">
                                               <?php foreach($course as $t): ?>
                                            <option value="<?=$t->id?>"><?=$t->name?> </option>
                                           
                                             <?php endforeach; ?>
                                        </select></p>
                                </td>
                            </tr>
                                <td width="150px" align="right">
                                    <label for="time">Время теста (мин)</label>
                                </td>
                                <td>
                                    <input type="text" id="time" name="time" value="" />
                                </td>
                                <td>
                                    <span id="error_time" class="valid_time"></span>
                                </td>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="time">Повторять</label>
                                </td>
                                <td>
                                    <input type="radio" name='type' value="1"> можно<br>
                                    <input type="radio" name='type' value="0"> нельзя<br>
                                </td>
                                <td>
                                    <span id="error_type" class="valid_type"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" >
                                    <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Добавить</span></button>
                                </td>
                            </tr>

                        </table>
                    </div>

                </form>
                </article>
            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->
        <div id="sidebar">
            <div class="widget-area">

                <aside class="syswidget">
                    Опция "Повторить" даёт возможность студенту проходить тест неоднократно.
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

<div id="send_avatar">
    <div id="register_modal_header">
        <h2>Загрузка аватара</h2>
        <p>Выберите картинку на своём компьютере</p>
        <a class="modal_close" href="#"></a>
    </div>

    <div class="sysform">

        <form enctype="multipart/form-data" class="form" method="post" action="<?php echo url::base(); ?>user/updateavatar/">

            <p style="margin: 15px">
                <label for="picture">Выберите файл </label>
                <input type="file" name="picture" id="picture" />
            </p>

            <p style="margin: 15px">
                <button type="submit" value="Send" name="submit" class="button medium blue"><span>Обновить аватар</span></button>
            </p>

        </form>
    </div>

</div>