<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Добавление новой страницы</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <form class="form" method="post" action="<?php echo url::base(); ?>admin/pages/add">
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
                                <td width="150px" align="right">
                                    <label for="url">Адрес страницы</label>
                                </td>
                                <td>
                                    <input type="text" id="url" name="url" value="" />
                                </td>
                                <td>
                                    <span id="error_url" class="valid_topic"></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="fulltextarea">
                                        <textarea name="txt" id="txt" rows="20" id="fulltextarea" class="fulltextarea"></textarea>
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
                    <img src="./images/image1.jpg" alt="img" class="imageshadow bottom20" />
                    <p>Vestibulum dapibus lacus a elit facilisis posuere. Maecenas eu justo id arcu pharetra pulvinar. Praesent elementum accumsan nibh, a varius elit pretium id. Etiam sagittis, risus [...]</p>
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
