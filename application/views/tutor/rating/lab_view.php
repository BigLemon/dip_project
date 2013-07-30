<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Успеваемость по лабораторной</h1>
          

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
                                        <th scope="col">Балл</th>
                                        <th scope="col">Просмотреть код</th>
                                        <th scope="col">Дата выполнения</th>
                                        <th scope="col">Действие</th>
                                    </tr>
                                    </thead>
                                       <?php foreach($query as $c ): ?>
                                      <tr>
                                            <td> 
                                                 <input type="hidden" id="user_id" size="3" name="user_id" value="<?=$c['id_user'];?>" />
                                                 <p><?=$c['lastname'];?> <?=$c['firstname'];?></p>
                                               
                                            </td>
                                    
                                            <td width="15px"> 
                                                <input type="text" id="result" name="result" value="<?php echo $c['result']; ?>" />  
                                            </td>
                                             
                                            <td> 
                                                <a href="">  <p>Базовый синтаксис</p></a>
                                            </td>   
                                            <td> 
                                                <?=$c['dt'];?>
                                            </td>  
                                              <td> 
                                              <button type="submit" value="Send" name="submit" class="button small blue" id="form_submit"><span>Исправить оценку</span></button>
                                            </td>  
                                            
                                       </tr> 
                                 
                                 <?php endforeach;?>    
                                     <input type="hidden" id="id_lab" name="id_lab" value="<?php echo $query['id_lab']; ?>" />  
                                </table>  
                                            

                                          


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

    

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
