<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель управления | <?=$title?></title>

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo url::base(); ?>css/style.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo url::base(); ?>css/sf_menu.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo url::base(); ?>css/screen.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo url::base(); ?>css/flexslider.css" />
    <link rel='stylesheet' type='text/css' media='all'  href='<?php echo url::base(); ?>js/lightbox/themes/default/jquery.lightbox_7d8c8508.css' />

    <!-- Javascripts -->
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

                <div class="topleft">
                    <ul class="links">
                        <li><a href="<?php echo url::base(); ?>">Вернуться на основной сайт</a></li>
                    </ul>
                </div>
                <!-- .topleft -->

                <div class="topright">

                    <ul class="links">
                        <li><a href="<?php echo url::base(); ?>user/">Профиль</a></li>
                        <li><a href="<?php echo url::base(); ?>user/settings/">Настройки</a></li>
                        <li><a href="<?php echo url::base(); ?>user/message/">Сообщения</a></li>
                        <li><a href="<?php echo url::base(); ?>auth/logout/">Выход</a></li>
                    </ul>

                </div>
                <!-- .topright -->

            </div>
        </section>
        <!-- .topbar -->

        <header id="header">
            <div class="inner">

                <div class="logo">
                    <a href="<?php echo url::base(); ?>"><img src="<?php echo url::base(); ?>images/logo.png" alt="logo" /></a>
                </div>
                <!-- logo -->

                <div class="menu">
                    <ul class="sf-menu">
                        <li><a href="<?php echo url::base(); ?>admin/">Главная</a></li>
                        
                        <li><a href="<?php echo url::base(); ?>admin/news/">Новости</a></li>
                        <li><a href="<?php echo url::base(); ?>admin/users/">Пользователи</a></li>
                        
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

</body>
</html>