<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Написать сообщение</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <div class="fullwidth">
                    <a href="<?php echo url::base(); ?>user/message" class="button small blue"><span>Назад к сообщениям</span></a>
                      
                     
                              <form class="form" method="post" action="<?php echo url::base(); ?>user/sendpm"> 
                                  <table>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="to_id">Кому</label>
                                </td>
                                <td>
                                    <p><select name="to_id">
                                               <?php foreach($to_user as $t): ?>
                                            <option value="<?=$t->id?>"><?=$t->firstname?> <?=$t->lastname?>  </option>
                                           
                                             <?php endforeach; ?>
                                        </select></p>
                                </td>
                                <td>
                                    <span id="error_title" class="valid_title"></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="topic">Тема сообщения</label>
                                </td>
                                <td>
                                    <input type="topic" id="title" name="topic" value="" />
                                </td>
                                <td>
                                    <span id="error_title" class="valid_title"></span>
                                </td>
                            </tr>
                            <tr>
                                <td width="150px" align="right">
                                    <label for="txt">Cообщения</label>
                                </td>
                                <td>
                                    <textarea name="txt" id="txt" rows="20" id="fulltextarea" class="fulltextarea"></textarea>
                                </td>
                                <td>
                                    <span id="error_title" class="valid_title"></span>
                                </td>
                            </tr>
                            </table>
                           
                                  <button type="submit" value="Send" name="submit" class="button medium blue" id="form_submit"><span>Отправить</span></button>
                              </form>
                                
                                
                         
                </div>

            </div>
            <!-- .entry-content -->
        </div>
        <!-- #fullwidth -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->