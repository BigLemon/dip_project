<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Результат</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">
                <div class="sysform">
 <?php echo "В коде ошибка:"?>
<hr>
<div id="output"></div>

<div id="result">
   
    <hr id="formcodetoinsertbefore" />
    <form class="form" id="labcode" method="post" action="<?php echo url::base(); ?>inc/outresult">
                 
                    
           <?foreach($ex as $e): ?>
                  <?
                   echo  "<strong>Задача:</strong> ".$e->title."<br/>";
                   echo "<strong>Условие задачи:</strong> ".$e->condition."<br/>";
                   echo "<br>";
                  ?>                
           <?php endforeach; ?>            


          <? echo  "<strong>Ваш ответ :</strong> "."<br/>";?>
                                     <div class="fulltextarea">

 
                    <script src="<?php echo url::base(); ?>codemirror/lib/codemirror.js"></script>
                    <script src="<?php echo url::base(); ?>codemirror/mode/php/php.js"></script>
                    <script src="<?php echo url::base(); ?>codemirror/mode/clike/clike.js"></script>
                    <link rel="stylesheet" href="<?php echo url::base(); ?>codemirror/lib/codemirror.css">
                    <link rel="stylesheet" href="<?php echo url::base(); ?>codemirror/theme/elegant.css">
                    


<textarea name="stud_code" id="stud_code" rows="20" class="fulltextarea">
<?=$stud_code;?>
</textarea>
                <script type="text/javascript">
                    var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('stud_code'), {
                lineNumbers: true,               // показывать номера строк
                matchBrackets: true,             // подсвечивать парные скобки
                mode: 'application/x-httpd-php', // стиль подсветки
                indentUnit: 4,                    // размер табуляции
                tabMode: "shift"
                });
                </script>
              
                                     </div>
   <input type="hidden" name='lab_id' value="<?=$lab_id;?>">
   <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Выполнить</span></button>





               
</form>
</div>
                <div class="fulltextarea">
                <input type="hidden" name='id' value="<?=$id;?>">
          
<script type="text/javascript">   
  var code = $("#codediv").html();
  var request = $.ajax({
        url: "../user_<?=$id;?>/<?=$filename;?>.php",
        type: "POST",
        data: {code: code},
        dataType: "html"
    });               
    request.done(function(response) {$("#result").prepend(response);})
  
</script>
                                
         
                 </div>
            </div><!-- .entry-content -->
   </div>
        </div><!-- #main -->

        
        <!-- #sidebar -->

    </div><!-- .inner -->
</section><!-- .pagemid -->
</body>