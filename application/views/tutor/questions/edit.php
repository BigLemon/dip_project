<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Редактировать вопрос</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">
                <article class="post">
                    <form class="form" method="post" action="<?php echo url::base(); ?>tutor/questions/edit">
                        <div class="sysform">
                            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
                            <input type="hidden" id="id_test" name="id_test" value="<?php echo $question->id_test; ?>" />
                            <table>
                                <tr>
                                    <td width="150px" align="right">
                                        <label for="title">Введите вопрос</label>
                                    </td>
                                    <td>
                                        <input type="text" id="title" name="title" value="<?php echo $question->title;?>" />
                                    </td>
                                    <td>
                                        <span id="error_title" class="valid_title"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="150px" align="right">
                                        <label for="type">Тип вопроса</label>
                                    </td>
                                    <script type="text/javascript">
                                    function setTypeQuestion(type)
                                    {
                                        if(type == "check") {$('.rd_right').css("visibility", "hidden"); $('.ch_right').css("visibility", "visible");}
                                        if(type == "radio") {$('.ch_right').css("visibility", "hidden"); $('.rd_right').css("visibility", "visible");}
                                    }
                                    </script>
                                    <td>
                                    <input type="radio" onClick='setTypeQuestion("radio")' id='type' name='type' value="radio">одновариантный<br>
                                    <input type="radio" onClick='setTypeQuestion("check")' id='type' name='type' value="checkbox" selected="selected">многовариантный<br>
                                </td>
                                    <td>
                                        <span id="error_type" class="valid_type"></span>
                                    </td>
                                </tr>
                                <?php foreach($answers as $a): ?>
                                <tr>
                                    <td width="150px" align="right">
                                        <label for="<?=$a->id;?>">Ответ</label>
                                    </td>
                                    <td>
                                        <input type="text" id="<?=$a->id;?>" name="values[<?=$a->id;?>]" value="<?php echo $a->value;?>" />
                                    </td>
                                    <td>
                                        <input type="<?=$question->type;?>" name="right[<?=$a->id;?>]" <?php if($a->right == 1) echo "checked='1'" ; ?> > правильный ответ
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="3" >
                                        <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Сохранить</span></button>
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

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
