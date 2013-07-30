
<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Новый вопрос</h1>
        </div>
    </div>
</section>
<!-- #subheader -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <script type="text/javascript">
        function addtochbox() {
            var countrows = $("#answerschbox tr").length;
            var newline = '<tr ><td><input type="checkbox" name="correct_chbox'+countrows+'" value="yes" /></td><td><input type="text" name="chboxansinput'+countrows+'" id="chboxansinput'+countrows+'" size="100" /></td></tr>';
            $("#answerschbox").append(newline);
            
            $("#numanswers").val($("#answerschbox tr").length - 1);
        }
        function delfromchbox() {
            $("#answerschbox tr:last").remove();
            $("#numanswers").val($("#answerschbox tr").length - 1);
        }
        
        function addtoradio() {
            var countrows = $("#answersradio tr").length;
            var newline = '<tr ><td><input type="radio" name="correct_radio" value="'+countrows+'" /></td><td><input type="text" name="radioansinput'+countrows+'" id="radioansinput'+countrows+'" size="100" /></td></tr>';
            $("#answersradio").append(newline);
            $("#numanswers").val($("#answersradio tr").length - 1);
        }
        
        function delfromradio() {
            $("#answersradio tr:last").remove();
            $("#numanswers").val($("#answersradio tr").length - 1);
        }
        
        function checkedtype(type) {
            if (type == 1) {
                $("#atcbutton").css("display", "inline");
                $("#atrbutton").css("display", "none");
                
                $("#answerschbox").css("display", "inline");
                $("#answersradio").css("display", "none");
                $("#answermanual").css("display", "none");
                
                $("#numanswers").val($("#answerschbox tr").length - 1);
            }
            if (type == 2) {
                $("#atcbutton").css("display", "none");
                $("#atrbutton").css("display", "inline");
                
                $("#answerschbox").css("display", "none");
                $("#answersradio").css("display", "inline");
                $("#answermanual").css("display", "none");
                
                $("#numanswers").val($("#answersradio tr").length - 1);
            }
            if (type == 3) {
                $("#atcbutton").css("display", "none");
                $("#atrbutton").css("display", "none");
                
                $("#answerschbox").css("display", "none");
                $("#answersradio").css("display", "none");
                $("#answermanual").css("display", "inline");
                
                $("#numanswers").attr("value", 1);
            }
        }
        
        function questionsubmit() {
            alert($("#questionform").serialize());
        }
        
    </script>
<section class="pagemid">
    <div class="inner">

        
                <article class="post">
                <form class="form" method="post" action="<?=url::base();?>tutor/questions/add">
                    <div class="sysform">
                        <input type="hidden" id="id_test" name="id_test" value="<?php echo $id_test; ?>" />
                        Введите вопрос:<br />
                        <input type="text" name="question_text" size="50"></textarea>
                        <hr />
                        <table >
                            <tr><td width="150px" align="right"><input type="radio" onchange="checkedtype(1);" name="typetest" value="checkbox" checked="checked" /><label>Многовариантный</label></td><td width="150px" align="right"><span id="atcbutton"><button class="button small blue" onclick="addtochbox(); return false;"><span>Добавить вариант</span></button><button class="button small red" onclick="delfromchbox(); return false;"><span>Удалить вариант</span></button></span></td></tr>
                            <tr><td width="150px" align="right"><input type="radio" onchange="checkedtype(2);" name="typetest" value="radio" /><label>Одновариантный</label></td><td width="150px" align="right"><span id="atrbutton" style="display: none;"><button class="button small blue" onclick="addtoradio(); return false;"><span>Добавить вариант</span></button><button class="button small red" onclick="delfromradio(); return false;"><span>Удалить вариант</span></button></span></td></tr>
                            <tr><td width="150px" align="right"><input type="radio" onchange="checkedtype(3);" name="typetest" value="text" /><label>Свободный ответ</label></td><td></td></tr>
                        </table>
                        <input type="hidden" id="numanswers" name="numanswers" value="0" />
                        <hr />           
                    <table border="1" width="400" id="answerschbox">
                        <tr><td width="150px" align="right">Правильный</td><td width="150px" align="right">Значение</td></tr>
                    </table>
        
                    <table  id="answersradio" style="display: none;">
                        <tr><td width="150px" align="right">Правильный</td><td width="150px" align="right">Значение</td></tr>
                    </table>
        
                    <table border="1" width="400" id="answermanual" style="display: none;">
                        <tr><td width="150px" align="right">Правильный ответ</td></tr>
                        <tr><td width="150px" align="right"><input type="text" size="100" name="text" /></td></tr>
                    </table>
                    <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Добавить</span></button>

                    </div>

                </form>
                </article>
          
       

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->

