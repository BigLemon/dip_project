<section id="subheader">
    <div class="inner">
        <div class="subtitle">
            <h1>Редактирование лекции</h1>
        </div>
    </div>
</section>
<!-- #subheader -->

<section class="pagemid">
    <div class="inner">

        <div id="main">
            <div class="entry-content">

                <form class="form" method="post" action="<?php echo url::base(); ?>tutor/lections/delete/">
                    <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
                    Вы уверены, что хотите удалить лекцию?
                    <div class="sysform">
                         <button type="submit" value="Send" name="submit" class="button medium red" id="form_submit"><span>Удалить</span></button>
                    </div>

                </form>

            </div>
            <!-- .entry-content -->
        </div>
        <!-- #main -->

    </div>
    <!-- .inner -->
</section>
<!-- .pagemid -->
