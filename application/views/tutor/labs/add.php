<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Добавление задачи</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

 <form class="form" method="post" action="<?=url::base(); ?>tutor/labs/add">
                    <div class="sysform">
                    <table>
                        <tr><td><label for="title">Название:</label></td></tr>
                        <tr>
                           
                            <td>
                                <input type="text" id="title"  size="70" name="title"  />
                            </td>
                        </tr>
                         <tr>
                               
                                <td width="150px" align="right">
                                    <label for="name">Категория</label>
                                    <select name="course">
                                        <?php foreach($course as $cat): ?>
                                        <option value="<?=$cat->id;?>" >
                                            <?=$cat->name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                         <tr><td> <label for="condition">Условие задачи:</label></td></tr>
                        <tr>
                              <td colspan="3">
                              <div class="fulltextarea">
                                    <textarea name="condition" id="txt" rows="20" class="fulltextarea"> </textarea>
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
                        <tr><td><label for="answer">Ответ:</label></td></tr>
                        <tr>
                           
                            <td colspan="3">
                                <div class="fulltextarea">
                    <script src="<?php echo url::base(); ?>codemirror/lib/codemirror.js"></script>
                    <script src="<?php echo url::base(); ?>codemirror/mode/php/php.js"></script>
                    <script src="<?php echo url::base(); ?>codemirror/mode/clike/clike.js"></script>
                    <link rel="stylesheet" href="<?php echo url::base(); ?>codemirror/lib/codemirror.css">
                    <link rel="stylesheet" href="<?php echo url::base(); ?>codemirror/theme/night.css">
                    <textarea name="answer" id="answer" rows="20" class="fulltextarea"> </textarea> 
                    <script type="text/javascript">
                    var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('answer'), {
                lineNumbers: true,               // показывать номера строк
                matchBrackets: true,             // подсвечивать парные скобки
                mode: 'application/x-httpd-php', // стиль подсветки
                indentUnit: 4                    // размер табуляции
                });
                </script>
                                </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="3" >
                               <input type="hidden" id="id_author" name="id_author" value="<?=Auth::instance()->get_user();?>" />
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

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
