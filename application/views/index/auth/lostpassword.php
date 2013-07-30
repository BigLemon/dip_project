<?php if(!Auth::instance()->logged_in()):?>

<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Восстановление пароля</h1>
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

                <div class="sysform">

                    <form class="form" method="post" action="<?php echo url::base(); ?>auth/lost/">

                        <table>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="email">E-mail</label>
                                </td>
                                <td>
                                    <input type="text" id="email" name="email" />
                                </td>
                            </tr>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="lastname">Ваша фамилия</label>
                                </td>
                                <td>
                                    <input type="text" id="lastname" name="lastname" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <button type="submit" value="Send" name="submit" class="button medium blue"><span>Восстановить</span></button>
                                </td>
                            </tr>
                        </table>
                        <br>

                    </form>
                </div>

                <a href="<?php echo url::base(); ?>auth/register/" class="button medium orange"><span>Зарегистрироваться</span></a>

            </div>
            <!-- .content -->
        </div>

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
<?endif;?>