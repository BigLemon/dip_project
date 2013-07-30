<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>
                <?php if(isset($error))
                    echo 'Ошибка';
                else
                    echo $info->title;
                ?>
            </h1>
        </div>
    </div>
</section>
<!-- #subheader -->
<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <article class="post">

                    <?php if(isset($error))
                        echo 'Ошибка';
                    else
                        echo $info->txt;
                    ?>

                </article>

            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->