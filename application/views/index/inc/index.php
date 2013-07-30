<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Лабораторная работа</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">
                <div class="sysform">
                <div class="fulltextarea">
           <form class="form" method="post" action="<?php echo url::base(); ?>inc/outresult">
           <?foreach($ex as $e): ?>
                  <?
                   echo "<strong>Задача:</strong> ".$e->title."<br/>";
                   echo "<strong>Условие задачи:</strong> ".$e->condition."<br/>";
                   echo "<br>";
                  ?>                
           <?php endforeach; ?>         
           <?echo  "<strong>Ваш ответ :</strong> "."<br/>";?>
               <div class="fulltextarea">
                    <script src="<?php echo url::base(); ?>codemirror/lib/codemirror.js"></script>
                    <script src="<?php echo url::base(); ?>codemirror/mode/php/php.js"></script>
                    <script src="<?php echo url::base(); ?>codemirror/mode/clike/clike.js"></script>
                    <link rel="stylesheet" href="<?php echo url::base(); ?>codemirror/lib/codemirror.css">
                    <link rel="stylesheet" href="<?php echo url::base(); ?>codemirror/theme/night.css">

                <textarea name="stud_code" id="stud_code" rows="20" class="fulltextarea">
                </textarea>
                <script type="text/javascript">
                    var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('stud_code'), {
                lineNumbers: true,               // показывать номера строк
                matchBrackets: true,             // подсвечивать парные скобки
                mode: 'application/x-httpd-php', // стиль подсветки
                indentUnit: 4                    // размер табуляции
                });
                </script>
                </div>
           <input type="hidden" name='lab_id' value="<?=$lab_id;?>">
           <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Выполнить</span></button>
           </form>
                    </div>
            </div><!-- .entry-content -->
   </div>
        </div><!-- #main -->

        
        <!-- #sidebar -->

    </div><!-- .inner -->
</section><!-- .pagemid -->