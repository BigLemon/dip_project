<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Добавление новости</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<?php
 // TODO: ПЕРЕДЕЛАТЬ ФОРМУ
?>

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <form class="form" method="post" action="<?php echo url::base(); ?>admin/news/add">
                    <div class="sysform">
                        <table>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="title">Название</label>
                                </td>
                                <td>
                                    <input type="text" id="title" name="title" value="" />
                                </td>
                                <td>
                                    <span id="error_title" class="valid_title"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    Короткая новость <br />
                                    <div class="fulltextarea">
                                        <textarea name="short" id="short" rows="20" class="fulltextarea"></textarea>
                                        <script type="text/javascript" src="<?php echo url::base(); ?>ckeditor/ckeditor.js"></script>

                                        <script type="text/javascript">
                                            CKEDITOR.replace('short', {
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
                                <td colspan="3">
                                    Полная новость: <br />
                                    <div class="fulltextarea">
                                        <textarea name="fulltext" id="fulltext" rows="20" class="fulltextarea"></textarea>
                                        <script type="text/javascript" src="<?php echo url::base(); ?>ckeditor/ckeditor.js"></script>

                                        <script type="text/javascript">
                                            CKEDITOR.replace('fulltext', {
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
                                    <input type="hidden" id="author_id" name="author_id" value="<?=Auth::instance()->get_user();?>" />
                                    <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Добавить</span></button>
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
