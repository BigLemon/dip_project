<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Редактирование пользователя</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <form class="form" method="post" action="<?php echo url::base(); ?>admin/users/edit">
                    <div class="sysform">
                        <table>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="firstname">Фамилия</label>
                                </td>
                                <td>
                                    <input type="text" id="firstname"  size="20" name="firstname" value="<?= $user->firstname; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="lastname">Имя</label>
                                </td>
                                <td>
                                    <div class="fulltextarea">
                                        <input name="lastname" id="lastname" size="20" value="<?= $user->lastname; ?>" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="email">E-mail</label>
                                </td>
                                <td>
                                    <input name="email" id="email" size="20" value="<?= $user->email; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="role">Определите роль</label>
                                </td>
                                <td>
                                    <p><select name="role">
                                            <option value="0">&nbsp</option>
                                            <option value="1">login</option>
                                            <option value="2">admin</option>
                                            <option value="3">tutor</option>
                                        </select></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" >
                                    <input type="hidden" id="id" name="id" value="<?= $user->id; ?>" />
                                    <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Обновить</span></button>
                                </td>
                            </tr>

                        </table>
                    </div>

                </form>

            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->

        <!-- #sidebar -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
