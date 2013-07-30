<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Регистрация</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">


<?if($errors):?>
<? foreach ($errors as $error) : ?>
    <span class="valid_error"><img src='<?php echo url::base(); ?>images/icons/icon_alert.gif'> <?=$error?></span><br>
    <?endforeach;?>
<?endif?>

<script type="text/javascript">
    function checkusername(){
        var username = $("#username").val();
        $.ajax({
            type: "POST",
            data: "param=username&value=" + username ,
            url: "/ajax/checkisunique",
            dataType: "json",
            success: function(data){
                if(data.result){
                    $("#error_username").html("<img src='<?php echo url::base(); ?>images/icons/icon_alert.gif'> Уже используется");
                    $('#form_submit').attr('disabled', 'disabled');
                }
                else{
                    $("#error_username").text("");
                    $('#form_submit').removeAttr('disabled');
                }
            }
            
        });
        

    }

    function checkemail(){
        var email = $("#email").val();
        $.ajax({
            type: "POST",
            data: "param=email&value=" + email ,
            url: "/ajax/checkisunique",
            dataType: "json",
            success: function(data){
                if(data.result){
                    $("#error_email").html("<img src='<?php echo url::base(); ?>images/icons/icon_alert.gif'>Уже используется");
                    $('#form_submit').attr('disabled', 'disabled');
                }
                else{
                    $("#error_email").text("");
                    $('#form_submit').removeAttr('disabled');
                }
            }
        });
    }
</script>
<div class="sysform">

    <form class="form" method="post" action="<?php echo url::base(); ?>auth/register/">

        <table>
            <tr>
                <td width="150px" align="right">
                    <label for="username">Имя пользователя</label>
                </td>
                <td>
                    <input type="text" id="username" name="username" value="<?=$data['username']?>" />
                </td>
                <td>
                    <span id="error_username" class="valid_error"></span>
                </td>
            </tr>
            <tr>
                <td width="150px" align="right">
                    <label for="email">Ваш E-Mail</label>
                </td>
                <td>
                    <input type="text" id="email" name="email" value="<?=$data['email']?>" />
                </td>
                <td>
                    <span id="error_email" class="valid_error icon_alert"></span>
                </td>
            </tr>
            <tr>
                <td width="150px" align="right">
                    <label for="password">Пароль</label>
                </td>
                <td>
                    <input type="password" id="password" name="password" />
                </td>
                <td>
                    <span id="error_password"></span>
                </td>
            </tr>
            <tr>
                <td width="150px" align="right">
                    <label for="password_confirm">Пароль ещё раз</label>
                </td>
                <td>
                    <input type="password" id="password_confirm" name="password_confirm">
                </td>
                <td>
                    <span id="error_password_confirm"></span>
                </td>
            </tr>
            <tr>
                <td width="150px" align="right">
                    <label for="firstname">Ваше имя</label>
                </td>
                <td>
                    <input type="text" id="firstname" name="firstname" value="<?=$data['firstname']?>" />
                </td>
                <td>
                    <span id="error_firstname"></span>
                </td>
            </tr>
            <tr>
                <td width="150px" align="right">
                    <label for="lastname">Ваша фамилия</label>
                </td>
                <td>
                    <input type="text" id="lastname" name="lastname" value="<?=$data['lastname']?>" />
                </td>
                <td>
                    <span id="error_lastname"></span>
                </td>
            </tr>
            <tr>
                <td width="150px" align="right">
                    <label for="sex">Ваш пол</label>
                </td>
                <td>
                    <input type="radio" name="sex" id="optionsRadios1" value="1" >
                    Мужской
                    <input type="radio" name="sex" id="optionsRadios2" value="2">
                    Женский
                </td>
                <td>
                    <span id="error_sex"></span>
                </td>
            </tr>
            <tr>
                <td colspan="3" >
                    <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Зарегистрироваться</span></button>
                </td>
            </tr>

        </table>

    </form>
</div>

            </div>
            <!-- .content -->
        </div>

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->