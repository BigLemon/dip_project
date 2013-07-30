<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Редактирование лекции</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <form class="form" method="post" action="<?php echo url::base(); ?>tutor/tests/edit/">
                    <input type="hidden" id="id" name="id" value="<?php echo $test->id; ?>" />
                    <div class="sysform">

                        <table>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="name">Название</label>
                                </td>
                                <td>
                                    <input type="text" id="name" name="name" value="<?php echo $test->name;?>" />
                                </td>
                                <td>
                                    <span id="error_name" class="valid_name"></span>
                                </td>
                            </tr>
                            <td width="150px" align="right">
                                <label for="time">Время теста (мин)</label>
                            </td>
                            <td>
                                <input type="text" id="time" name="time" value="<?php echo $test->time;?>" />
                            </td>
                            <td>
                                <span id="error_time" class="valid_time"></span>
                            </td>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="time">Повторять</label>
                                </td>
                                <td>
                                    <input type="radio" name='type' value="repeat"> можно<br>
                                    <input type="radio" name='type' value="norepeat"> нельзя<br>
                                </td>
                                <td>
                                    <span id="error_type" class="valid_type"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" >
                                    <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Сохранить</span></button>
                                </td>
                            </tr>

                        </table>
                    </div>
                </form>

            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
