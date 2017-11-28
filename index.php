<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mintecceramic
 */

get_header(); ?>

<?php remove_filter('the_content', 'wpautop'); ?>
    <!-- Header start -->


    <!-- Header end -->

    <!-- Revolution slider start -->
    <div class="tp-banner-container sliderWraper">
        <div class="tp-banner">
            <ul>
                <?php $query = new WP_Query(['post_type' => 'Banner']);
                while ($query->have_posts()) : $query->the_post(); ?>
                    <li data-slotamount="7" data-transition="3dcurtain-vertical" data-masterspeed="1000"
                        data-saveperformance="on">
                        <img alt="" src="<?php the_post_thumbnail_url(); ?>"
                             data-lazyload="<?php the_post_thumbnail_url(); ?>">
                        <div class="caption lfl large-title tp-resizeme slidertext1" data-x="center" data-y="210"
                             data-speed="600" data-start="2200"><span><?php the_title() ?></span></div>
                        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="center" data-y="310"
                             data-speed="600" data-start="2800"><?php the_content() ?></div>
                        <div class="caption lfl large-title tp-resizeme slidertext3" data-x="center" data-y="350"
                             data-speed="600" data-start="3500">
                            <a href="<?php home_url() . "/" . the_field('boton') ?>"
                               style="color: white !important;"><?php the_field('boton_texto'); ?></a>
                        </div>
                    </li>

                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <!-- Revolution slider end -->

    <!--Quote Start-->
    <div class="quote-wrap">
        <div class="container">
            <!--Row Start-->
            <div class="row">
                <div class="col-md-9">
                    <h2>ANALIZAMOS ARCILLAS PARA MEJORAR LA PRODUCTIVIDAD DE TU NEGOCIO</h2>
                </div>
                <div class="col-md-3">
                    <div class="quote-btn"><a href="/contacto">Contáctanos</a></div>
                </div>
            </div>
            <!--Row End-->
        </div>
    </div>
    <!--Quote End-->

    <!--About start-->
    <div class="about-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php $mintec = get_post( 2 );  ?>
                    <h1>Acerca De<span> Mintec Ceramic</span></h1>
                    <div class="aboutTxt">Quiénes somos?</div>
                    <?php echo get_field('vision', 2); ?>
                    <?php echo get_field('filosofia_institucional', 2); ?>
                    <br>
                    <div class="readmore"><a href="/mintecceramic">Leer más</a></div>
                </div>
                <div class="col-md-5">
                    <div class="about-image"><img src="<?php echo get_the_post_thumbnail_url($mintec) ?>"></div>
                </div>
            </div>
        </div>
    </div>

    <!--About start-->

    <!--service start-->
    <div class="service-wrap">
        <div class="container">
            <h1>Nuestros <span>Servicios</span></h1>
            <ul class="row serviceList">
                <?php $query = new WP_Query(['post_type' => 'servicios']);
                while ($query->have_posts()) : $query->the_post(); ?>
                    <li class="col-md-3 col-sm-4">
                        <div class="service-image"><img
                                    src="<?php the_post_thumbnail_url(); ?>">
                            <div class="hoverlink">
                                <div class="icon"><a href="<?php echo the_permalink() ?>"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                        <div class="service-details">
                            <h3><a href="#"><?php the_title() ?></a></h3>
                            <p><?php echo get_excerpt(20); ?></p>
                            <div class="readmore"><a href="<?php echo the_permalink() ?>">Leer más</a></div>
                        </div>
                    </li>
                <?php endwhile; ?>

            </ul>
        </div>
    </div>
    <!--service end-->

    <!--porfolio start-->
    <div class="porfolio-wrap">
        <div class="container">
            <h1>Nuestros <span>clientes</span></h1>

            <ul class="row portfolio-service">
                <?php $query = new WP_Query(['post_type' => 'clientes','posts_per_page' => '4']);
                while ($query->have_posts()) : $query->the_post(); ?>
                    <li class="col-md-3 col-sm-6" style="padding: 0 45px;">
                        <div class="project-image"><img src="<?php the_post_thumbnail_url(); ?>">
                            <div class="portfolio-overley">
                                <div class="content">
                                    <h3><a href="#"> <?php the_title() ?></a></h3>
                                    <div class="portfolio-tags"><?php the_field('servicio') ?></div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <!--porfolio end-->


    <!--Team end-->


    <!--Footer start-->


<?php
//get_sidebar();
get_footer();
