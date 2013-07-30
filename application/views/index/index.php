<div id="featured_slider">
    <script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "fade",				//String: Select your animation type, "fade" or "slide"
                controlsContainer: ".flex-container",
                slideshow: true,					//Boolean: Animate slider automatically
                slideshowSpeed: 3000,				//Integer: Set the speed of the slideshow cycling, in milliseconds
                animationDuration: 1200,			//Integer: Set the speed of animations, in milliseconds
                directionNav: false,				//Boolean: Create navigation for previous/next navigation? (true/false)
                controlNav: true,					//Boolean: Create navigation for paging control of each clide? Note: Leave true for
                mousewheel: false,					//Boolean: Allow slider navigating via mousewheel
                start: function(slider) {
                    $('.total-slides').text(slider.count);
                },
                after: function(slider) {
                    $('.current-slide').text(slider.currentSlide);
                }
            });
        });
    </script>
    <div class="slider_wrapper">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="./images/s1.jpg" />
                </li>
                <li>
                    <img src="./images/s3.jpg"  />
                </li>
                <li>
                    <img src="./images/s4.jpg"  />
                </li>
                <li>
                    <img src="./images/s2.jpg"  />
                </li>
            </ul>
        </div>
      

    </div>
    <!-- .slider_wrapper -->
</div>
<!-- #featured_slider -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">
                
                <div class="one_half">
                    <h1>Добро пожаловать.</h1>
                    <p>Для работы с сайтом, Вам необходимо зарегистрироваться и авторизоваться. После этого Вы сможете выбрать курсы для изучения
                        и записать на них. Вы можете заниматься как самостоятельно, так и в группе. При занятии в группе, преподаватель контролирует Ваше
                        прохождение и следит за вашей успеваемостью с помощью оценок за пройденные тесты.
                    </p>
                    <p>По окончанию прохождения курса Вы можете сдать экзамен. Если Вы сдадите его успешно, Вам выдадут сертификат и ссылку на него для
                        подтверждения об успешном окончании курса. </p>

                    <div class="divider_line"></div>
                    <h3>Преимущества портала</h3>
                    <ul class="list-check green">
                        <li>Дистанционное обучение</li>
                        <li>Полный доступ к электронным материалам курса</li>
                        <li>Доступ к видеоурокам</li>
                        <li>Прохождение итогового экзамена и получение сертификата</li>
                        <li>Возможность общаться с преподавателем</li>
                        <li>Возможность комментировать и участвовать в обсуждении курса</li>
                    </ul>
                </div>
                <!-- .one_half -->
                <div class="one_half last">
                
   
    <?php foreach($courses as $c):?>
   
 
                    
                        <h5><a href="<?php echo url::base(); ?>courses/view/<?=$c->id;?>"><?=$c->name;?></a></h5>
                        <figure><img src="./images/demopic.png" alt="" /></figure>
                        <p>  <?=$c->category->name;?>
                            <a href="<?php echo url::base(); ?>/courses" class="more-link">Больше...</a></p>
           
 <?php endforeach;?>
     
          <!--          <div class="one_half last">
                        <h5>Changable Colorscheme</h5>
                        <figure><img src="./images/demopic.png" alt="" /></figure>
                        <p>Aliquam et nisi id sapien molestie placerat et ut neque. Morbi interdum, lacus vel consectetur commodo lorem
                            <a href="#" class="more-link">more...</a></p>
                    </div>

                    <div class="divider_space"></div>

                 -->

                </div>
                <!-- .one_half -->

            </div>
            <!-- .content -->
        </div>

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->