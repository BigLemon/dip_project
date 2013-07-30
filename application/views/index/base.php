<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo url::base(); ?>css/style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo url::base(); ?>css/sf_menu.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo url::base(); ?>css/screen.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo url::base(); ?>css/flexslider.css" />
    <link rel='stylesheet' type='text/css' media='all'  href='<?php echo url::base(); ?>js/lightbox/themes/default/jquery.lightbox_7d8c8508.css' />

    <!-- Javascripts -->
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo url::base(); ?>js/jquery-1.7.1.min.js'></script>
    <script type='text/javascript' src='<?php echo url::base(); ?>js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='<?php echo url::base(); ?>js/superfish.js'></script>
    <script type='text/javascript' src='<?php echo url::base(); ?>js/hoverIntent.js'></script>
    <script type='text/javascript' src='<?php echo url::base(); ?>js/jquery.tools.min.js'></script>
    <script type='text/javascript' src='<?php echo url::base(); ?>js/jquery.preloadify.min.js'></script>
    <script type='text/javascript' src="<?php echo url::base(); ?>js/jquery.mobilemenu.js"></script>
    <script type='text/javascript' src='<?php echo url::base(); ?>js/lightbox/jquery.lightbox.js'></script>
    <script type="text/javascript" src="<?php echo url::base(); ?>js/sys_custom.js"></script>
    <script type="text/javascript" src="<?php echo url::base(); ?>js/jquery.leanModal.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('a[rel*=leanModal]').leanModal({ top : 200, closeButton: ".modal_close" });
        });
    </script>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="<?php echo url::base(); ?>js/html5.js"></script>
    <![endif]-->

    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo url::base(); ?>css/ie.css" />
    <![endif]-->

    <meta charset="UTF-8"></head>
<body>

<div id="boxed" class="<?=$pageclass;?>">

<div id="wrapper">

<section id="topbar">
    <div class="inner">

        <?php if(!Auth::instance()->logged_in()):?>
        <div class="topleft">
            <ul class="links">
                <li><a id="go" rel="leanModal" name="register_modal" href="#register_modal">Регистрация</a></li>
                <li><a href="<?php echo url::base(); ?>auth/lost/">Восстановить пароль</a></li>
            </ul>
        </div>
        <?php endif; ?>

        <div class="topleft">
            <ul class="links">
                <?php if(Auth::instance()->logged_in('admin')):?>
                <li><a href="<?php echo url::base(); ?>admin/index/">Админка</a></li>
                <?php endif; ?>
                <?php if(Auth::instance()->logged_in('tutor')):?>
                <li><a href="<?php echo url::base(); ?>tutor/index/">Кабинет преподавателя</a></li>
                <?php endif; ?>
            </ul>
        </div>


        <!-- .topleft -->

        <div class="topright">

        <?php if(!Auth::instance()->logged_in()):?>
            <form  method="POST" action="<?php echo url::base(); ?>auth/login/" id="topbar_login" >
                <div class="field">
                    <input type="text" name="username" value="Логин" onFocus="if(this.value=='Логин'){this.value=''}" onBlur="if(this.value==''){this.value='Логин'}">
                </div>
                <div class="field">
                    <input type="password" name="password" value="Пароль" onFocus="if(this.value=='Пароль'){this.value=''}" onBlur="if(this.value==''){this.value='Пароль'}">
                </div>
                <div class="field">
                    <button type="submit" class="button small blue" name="submit" value="Login"><span>Вход</span></button>
                </div>
            </form>
        <?else:?>

        <ul class="links">
            <li><a href="<?php echo url::base(); ?>user/">Профиль</a></li>
            <li><a href="<?php echo url::base(); ?>user/settings/">Настройки</a></li>
            <li><a href="<?php echo url::base(); ?>user/message/">Сообщения</a></li>
            <li><a href="<?php echo url::base(); ?>auth/logout/">Выход</a></li>
        </ul>
        <?endif?>

        </div>
        <!-- .topright -->

    </div>
</section>
<!-- .topbar -->

<header id="header">
    <div class="inner">

        <div class="logo">
           <!-- <a href="<?php echo url::base(); ?>"><img src="<?php echo url::base(); ?>images/logo.png" alt="logo" /></a>-->
        </div>
        <!-- logo -->

        <div class="menu">
            <ul class="sf-menu">
                <li><a href="<?php echo url::base(); ?>">Главная</a></li>
                <li><a href="<?php echo url::base(); ?>courses/">Курсы</a></li>
                <li><a href="<?php echo url::base(); ?>news/">Новости</a></li>
                <li><a href="<?php echo url::base(); ?>pages/contacts/">Контакты</a></li>
               
                 
            </ul>
            <!-- end:sf-menu -->
        </div>
        <!-- menu -->

    </div>
</header>
<!-- header -->
<?=$content;?>

<footer id="footer">

    <div class="inner">

        <div class="four_sixth">
            <div class="footer_left">
                <div class="syswidget widget_text">
                    <img src="<?php echo url::base(); ?>images/footer_logo.png" alt="logo" class="bottom20" />
                    <p>&copy; Copyright 2012 All Rights Reserved</p>
                   
                </div>
            </div>
        </div>
        <!-- .footer_left -->


        <div class="two_sixth last">
            <div class="footer_right">
                <div class="syswidget widget_text">
                    <p>Мы социальны:</p>
                    <ul>
                        <li><a href="#">Twitter</li>
                        <li><a href="#">Facebook</li>
                        <li><a href="#">VKontakte</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- .footer_right -->
    </div>
    <!-- .inner -->

</footer>
<!-- .footer -->

</div><!-- .wrapper -->

</div><!-- #boxed -->

<div id="register_modal">
    <div id="register_modal_header">
        <h2>Регистрация нового пользователя</h2>
        <p>Заполните все поля</p>
        <a class="modal_close" href="#"></a>
    </div>

    <!-- TODO:
    + проверка на уникальность имя пользователя и пароля
    - валидация формы
    -->
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
                        $("#username").parent().parent().removeClass("success").addClass("error");
                        $("#error_username").html("<img src='<?php echo url::base(); ?>images/icons/icon_alert.gif'> Уже используется");
                        $('#form_submit').attr('disabled', 'disabled');
                    }
                    else{
                        $("#username").parent().parent().removeClass("error").addClass("success");
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
                        $("#email").parent().parent().removeClass("success").addClass("error");
                        $("#error_email").html("<img src='<?php echo url::base(); ?>images/icons/icon_alert.gif'>Уже используется");
                        $('#form_submit').attr('disabled', 'disabled');
                    }
                    else{
                        $("#email").parent().parent().removeClass("error").addClass("success");
                        $("#error_email").text("");
                        $('#form_submit').removeAttr('disabled');
                    }
                }
            });
        }
    </script>
    <div class="sysform">

    <form class="form" method="post" action="<?php echo url::base(); ?>auth/register/" style="padding: 5px">

        <table>
            <tr>
                <td width="150px" align="right">
                    <label for="username">Имя пользователя</label>
                </td>
                <td>
                    <input type="text" id="username" name="username" value="" />
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
                    <input type="text" id="email" name="email" value="" />
                </td>
                <td>
                    <span id="error_email" class="valid_error"></span>
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
                    <input type="text" id="firstname" name="firstname" value="" />
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
                    <input type="text" id="lastname" name="lastname" value="" />
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
                <td></td>
                <td colspan="2" >
                    <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Зарегистрироваться</span></button>
                </td>
            </tr>
            <br />
        </table>

    </form>
    </div>

</div>

</body>
</html>