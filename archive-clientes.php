<?php
/**
 */

get_header(); ?>
    <div class="inner-heading">
        <div class="container">
            <h3>Nuestros clientes</h3>
        </div>
    </div>
    <!--inner header end-->

    <!--inner content start-->
    <div class="inner-content teamWrp">
        <div class="container">
            <div class="row">
                <?php $query = new WP_Query(['post_type' => 'clientes']);
                while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="team">
                            <div class="team-image"><img src="<?php the_post_thumbnail_url(); ?>">
                                <div class="team-info">
                                    <h5><a href="#" style="text-transform: uppercase"><?php the_title() ?></a></h5>
                                    <span><?php the_field('servicio')?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php
//get_sidebar();
get_footer();
