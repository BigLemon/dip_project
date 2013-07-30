<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Успеваемость по тесту</h1>
          

        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
                           
            <div class="entry-content">

                     <div class="systabspane">

                       
                        <!-- .tabs -->
                        <div class="panes">
                <form class="form" method="post" action="<?php echo url::base(); ?>tutor/rating/repeat">
                                <table class="fancy_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Ф.И.О</th>
                                        <th scope="col">Результат (%)</th>
                                        <th scope="col">Назначить заново</th>
                                    </tr>
                                    </thead>
                                       <?php foreach($query as $c ): ?>
                                      <tr>
                                            <td> 
                                                 <input type="hidden" id="user_id" name="user_id" value="<?=$c['id'];?>" />
                                                <?=$c['lastname'];?> <?=$c['firstname'];?> 
                                                <? print_r($c['id']);?>
                                               
                                            </td>
                                    
                                            <td> 
                                             <?=$c['result'];?>
                                            </td>
                                              <?php foreach($tests as $v)?>
                                            <td> 
                                                 <? if($v['type'] == 0) 
                                                     { ?> 
                                    <button type="submit" value="Send" name="submit" class="button small orange" id="form_submit"><span>Назначить заново</span></button>
                                                    <? } 
                                                 else { ?>
                                                    <p>Тест можно повторять </p>              
                                                   <? } ?>
                                            </td>  
                                            
                                       </tr>  
                                 <?php endforeach;?>    
                                
                                </table>  
                                            

                                           <input type="hidden" id="test_id" name="test_id" value="<?php echo $tests['id']; ?>" />


              </form >            
                          
                            </div>
                            
                        
                            <!-- .tab_content -->

                         
                            <!-- .tab_content -->

                        <!-- .panes -->

                        <div class="clear"></div>

                    </div>
                                
            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->

        <div id="sidebar">
            <div class="widget-area">

               
                <!-- .syswidget -->

                <!-- .syswidget -->

            </div>
            <!-- .widget-area -->
        </div>
        <!-- #sidebar -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
