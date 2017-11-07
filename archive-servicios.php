<?php
/**
 */

get_header(); ?>
    <!--inner header start-->
    <div class="inner-heading">
        <div class="container">
            <h3><?php the_title() ?></h3>
        </div>
    </div>
    <!--inner header end-->
    <!--inner header start-->
    <div class="inner-content">
        <div class="container">
            <ul class="row serviceList service-wrap">
                <?php $query = new WP_Query(['post_type' => 'servicios']);
                while ($query->have_posts()) : $query->the_post(); ?>
                    <li class="col-md-6 col-sm-6">
                        <div class="service-image">
                            <img src="<?php the_post_thumbnail_url(); ?>">
                            <div class="hoverlink">
                                <div class="icon"><a href="<?php echo the_permalink() ?>"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="service-details">
                            <h3><a href="/servicio/"><?php the_title() ?></a></h3>
                            <p><?php echo get_excerpt(50); ?></p>
                            <div class="readmore"><a href="<?php echo the_permalink() ?>">Leer más</a></div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <!--About end-->


<?php
//get_sidebar();
get_footer();
