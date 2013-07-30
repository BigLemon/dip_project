<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Мои настройки</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <article class="post">
                    <a href="<?php echo url::base(); ?>user/" class="button small blue"><span>Назад в профилю</span></a>
                    <div class="systabspane">

                        <ul class="tabs">
                            <li><a href="#">Информация</a></li>
                            <li><a href="#">Пароль</a></li>
                        </ul>
                        <!-- .tabs -->
                        <div class="panes">
                            <div  class="tab_content">
                                <div class="sysform">
                                <form class="form" method="post" action="<?php echo url::base(); ?>user/settings/">
                                    <input type="hidden" id="id" name="id" value="<?=$user->id;?>" />
                                    <table>

                                        <tr>
                                            <td width="150px" align="right">
                                                <label for="firstname">Ваше имя</label>
                                            </td>
                                            <td>
                                                <input type="text" id="firstname" name="firstname" value="<?=$user->firstname;?>" />
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
                                                <input type="text" id="lastname" name="lastname" value="<?=$user->lastname;?>" />
                                            </td>
                                            <td>
                                                <span id="error_lastname"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150px" align="right">
                                                <label for="otch">Ваше отчество</label>
                                            </td>
                                            <td>
                                                <input type="text" id="otch" name="otch" value="<?=$user->otch;?>" />
                                            </td>
                                            <td>
                                                <span id="error_otch"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150px" align="right">
                                                <label for="icq">ICQ</label>
                                            </td>
                                            <td>
                                                <input type="text" id="icq" name="icq" value="<?=$user->icq;?>" />
                                            </td>
                                            <td>
                                                <span id="error_icq"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150px" align="right">
                                                <label for="skype">Skype</label>
                                            </td>
                                            <td>
                                                <input type="text" id="skype" name="skype" value="<?=$user->skype;?>" />
                                            </td>
                                            <td>
                                                <span id="error_skype"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" >
                                                <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Сохранить</span></button>
                                            </td>
                                        </tr>

                                    </table>

                                </form>
                                </div>

                            </div>
                            <div  class="tab_content">
                                <div class="sysform">
                                <form class="form" method="post" action="<?php echo url::base(); ?>auth/register/">

                                    <table>
                                        <tr>
                                            <td width="150px" align="right">
                                                <label for="oldpassword">Старый пароль</label>
                                            </td>
                                            <td>
                                                <input type="password" id="oldpassword" name="oldpassword" />
                                            </td>
                                            <td>
                                                <span id="error_oldpassword"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150px" align="right">
                                                <label for="password">Новый пароль</label>
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
                                                <label for="password_confirm">Новый пароль ещё раз</label>
                                            </td>
                                            <td>
                                                <input type="password" id="password_confirm" name="password_confirm">
                                            </td>
                                            <td>
                                                <span id="error_password_confirm"></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" >
                                                <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Обновить</span></button>
                                            </td>
                                        </tr>

                                    </table>

                                </form>
                                </div>
                            </div>
                            <!-- .tab_content -->

                        </div>
                        <!-- .panes -->

                        <div class="clear"></div>

                    </div>
                    <!-- .systabspane -->

                </article>

            </div><!-- .entry-content -->
        </div><!-- #main -->

        <div id="sidebar">
            <div class="widget-area">

                <aside class="syswidget">
                    <?php if($user->avatar == "") $user->avatar = "no_avatar"; ?>
                    <img src="<?php echo url::base(); ?>images/avatars/<?=$user->avatar?>.jpg" alt="avatar" /><br>
                    <a rel="leanModal" name="send_avatar" href="#send_avatar" class="button small blue"><span>Загрузить аватар</span></a> <br>

                </aside>
                <!-- .syswidget -->


            </div>
            <!-- .widget-area -->
        </div>
        <!-- #sidebar -->

    </div><!-- .inner -->
</section><!-- .pagemid -->

<div id="send_avatar">
    <div id="register_modal_header">
        <h2>Загрузка аватара</h2>
        <p>Выберите картинку на своём компьютере</p>
        <a class="modal_close" href="#"></a>
    </div>

    <div class="sysform">

        <form enctype="multipart/form-data" class="form" method="post" action="<?php echo url::base(); ?>user/updateavatar/">

            <p style="margin: 15px">
                <label for="picture">Выберите файл </label>
                <input type="file" name="picture" id="picture" />
            </p>

            <p style="margin: 15px">
                <button type="submit" value="Send" name="submit" class="button medium blue"><span>Обновить аватар</span></button>
            </p>

        </form>
    </div>

</div>