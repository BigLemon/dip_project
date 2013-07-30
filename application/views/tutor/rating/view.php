<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Успеваемость</h1>
          

        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
                           
            <div class="entry-content">

                     <div class="systabspane">

                        <ul class="tabs">
                            <li><a href="#">Записаны на курс</a></li>
                            <li><a href="#">Тесты курса</a></li>
                            <li><a href="#">Лабораторные курса</a></li>
                             
                        </ul>
                        <!-- .tabs -->
                        <div class="panes">
                            <div  class="tab_content">
                                <table class="fancy_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Ф.И.О</th>
                                        <th scope="col">Пройден</th>
                                       
                                    </tr>
                                    </thead>
                                    <?php foreach($courses as $c): ?>
                                    
                                        <tr>
                                            <td> 
                                                <?=$c['lastname'];?> <?=$c['firstname'];?> 
                                              
                                            </td>
                                          
                                            <td>
                                                   <?=$c['result'];?>        
                                            </td>
                                          
                                        </tr>
                                       
                                    <?php endforeach;?>

                                </table>
                            </div>
                            
                            
                            <div  class="tab_content">
                               
                                <table class="fancy_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">№</th>
                                        <th scope="col">Название теста</th>
                                        <th scope="col">Действие</th>
                                       
                                    </tr>
                                    </thead>
                                    <?php foreach($tests as $t) : ?>
                                        <tr>
                                            <td><?=$t->id;?> </td>
                                            <td><?=$t->name;?></td>
                                            <td><a href="<?php echo url::base(); ?>tutor/rating/test/<?=$t->id;?>">
                                                    <span class="icon_action_refresh">Посмотреть результаты</span></a>
                                            </td>
                                          
                                        </tr>
                                    <?php endforeach;?>
                                </table>
                          

                              
                            </div>
                            <!-- .tab_content -->
                              <div  class="tab_content">
                               
                                <table class="fancy_table">
                                    <thead>
                                    <tr>
                                        <th scope="col">№</th>
                                        <th scope="col">Название лабы</th>
                                        <th scope="col">Действие</th>
                                       
                                    </tr>
                                    </thead>
                                    <?$i=1;?>
                                    <?php foreach($lab as $l) : ?>
                                    
                                        <tr>
                                            <td><?=$i++;?> </td>
                                            <td><?=$l->title;?></td>
                                            <td><a href="<?php echo url::base(); ?>tutor/rating/lab/<?=$l->id;?>">
                                                    <span class="icon_action_refresh">Посмотреть результаты</span></a>
                                            </td>
                                          
                                        </tr>
                                    <?php endforeach;?>
                                </table>
                          

                              
                            </div>
                         
                            <!-- .tab_content -->

                        </div>
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
