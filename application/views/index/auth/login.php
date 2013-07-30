<?php if(!Auth::instance()->logged_in()):?>

<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Авторизация</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <p>Для доступа ко всем разделам сайта Вам небходимо авторизоваться. <br>
                    Если у Вас ещё нет учётной записи, то Вам необходимо зарегистрироваться.</p>

                <?if($errors):?>
                <? foreach ($errors as $error) : ?>
                    <span class="valid_error"><img src='<?php echo url::base(); ?>images/icons/icon_alert.gif'> <?=$error?></span><br>
                    <?endforeach;?>
                <?endif?>

                <div class="sysform">

                    <form class="form" method="post" action="<?php echo url::base(); ?>auth/login/">

                        <table>
                            <tr>
                                <td width="150px" align="right">
                                        <label for="username">Имя пользователя</label>
                                </td>
                                <td>
                                    <input type="text" id="username" name="username" value="<?=$data['username']?>" />
                                </td>
                            </tr>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="password">Пароль</label>
                                </td>
                                <td>
                                    <input type="password" id="password" name="password" />
                                </td>
                            </tr>
                            <tr>
                            <td colspan="2" align="center">
                                <button type="submit" value="Send" name="submit" class="button medium blue"><span>Войти</span></button>
                            </td>
                            </tr>
                        </table>
                        <br>

                    </form>
                </div>

                    <a href="<?php echo url::base(); ?>auth/register/" class="button medium orange"><span>Зарегистрироваться</span></a>
                    <a href="<?php echo url::base(); ?>auth/lost/" class="button medium orange"><span>Забыл пароль</span></a>

            </div>
            <!-- .content -->
        </div>

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
<?endif;?>