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

                <form class="form" method="post" action="<?php echo url::base(); ?>tutor/lections/edit/">
                    <input type="hidden" id="id" name="id" value="<?php echo $page->id; ?>" />
                    <input type="hidden" id="course_id" name="course_id" value="<?php echo $page->course_id; ?>" />
                    <div class="sysform">
                    <table>
                        <tr>
                            <td width="150px" align="right">
                                <label for="topic">Название</label>
                            </td>
                            <td>
                                <input type="text" id="topic" name="topic" value="<?=$page->topic;?>" />
                            </td>
                            <td>
                                <span id="error_topic" class="valid_topic"></span>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <div class="fulltextarea">
                                    <textarea name="txt" id="txt" rows="20" id="fulltextarea" class="fulltextarea"><?=$page->txt;?></textarea>
                                    <script type="text/javascript" src="<?php echo url::base(); ?>ckeditor/ckeditor.js"></script>

                                    <script type="text/javascript">
                                        CKEDITOR.replace('txt', {
                                            toolbar : [
                                                { name: 'document', items : [ 'Source','Save','Preview','Print'] },
                                                { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
                                                { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
                                                '/',
                                                { name: 'paragraph', items : [ 'NumberedList','BulletedList' ] },
                                                { name: 'colors', items : [ 'TextColor','BGColor' ] },
                                                { name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','SpecialChar'] },
                                                { name: 'links', items : [ 'Link','Unlink','Anchor' ] }
                                            ]
                                        });
                                    </script>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" >

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
