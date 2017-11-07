<?php
/**
 */

get_header(); ?>
    <!--inner header start-->
    <div class="inner-heading">
        <div class="container">
            <h3><?php the_title() ?> </h3>
        </div>
    </div>
    <div class="about-wrap inner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="clearfix"></div>
                    <?php while (have_posts()) : the_post();
                        the_content();

                    endwhile; ?>
                </div>

            </div>
        </div>
    </div>
    <div class="inner-content">
        <div class="container">

            <!-- Gallery start -->

            <ul class="gallery-service">
                <?php
                $images = acf_photo_gallery('galeria', $post->ID);
                if (count($images)):
                    foreach ($images as $image):?>
                        <li class="col-md-3 col-sm-6">
                            <div class="gallery-image">
                                <a class="fancybox"
                                   href="<?php echo $image['full_image_url'] ?>"
                                   data-fancybox-group="gallery" title="<?php echo $image['title']; ?>">
                                    <img src="<?php echo $image['full_image_url'] ?>">
                                </a>
                            </div>
                        </li>
                    <?php endforeach; endif; ?>
            </ul>

            <!-- Gallery start -->

        </div>
    </div>

<?php
//get_sidebar();
get_footer();
