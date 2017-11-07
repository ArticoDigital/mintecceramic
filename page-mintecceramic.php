<?php
/**
 */

get_header(); ?>
    <!--inner header start-->
    <div></div>
    <div class="inner-heading">
        <div class="container">
            <h3><?php the_title() ?></h3>
        </div>
    </div>
    <!--inner header end-->

    <!--About start-->
    <div class="about-wrap inner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <div class="clearfix"></div>
                    <?php while (have_posts()) : the_post();
                        the_content();

                    endwhile; ?>
                </div>
                <div class="col-md-5">
                    <div class="about-image"><img src="<?php the_post_thumbnail_url(); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style=" margin-top: -40px">
        <div class="row">
            <div class="col-md-12  about-wrap " style="    padding-right: 15px; padding-left: 15px;">

                <div class="aboutTxt">Visión</div>
                <?php the_field('vision'); ?>

                <div class="aboutTxt">Misión</div>
                <?php the_field('mision'); ?>
                <div class="aboutTxt">Filosofía Institucional</div>
                <?php the_field('filosofia_institucional'); ?>
            </div>
        </div>
    </div>
    <!--About end-->


<?php
//get_sidebar();
get_footer();
