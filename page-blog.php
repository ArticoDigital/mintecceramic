<?php
/**
 */

get_header(); ?>

    <!--inner header start-->
    <div class="inner-heading">
        <div class="container">
            <h3>Blog</h3>
        </div>
    </div>
    <!--inner header end-->
    <div class="inner-content">
        <div class="container">

            <!-- Blog List start -->


            <div class="blogWraper">
                <ul class="row blogGrid">
                    <?php $query = new WP_Query('category_name=blog');
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="col-md-4 col-sm-6">
                            <div class="blog-inter">

                                <div class="postimg"><img
                                            src="<?php the_post_thumbnail_url() ?>"
                                            alt="Blog Title">
                                    <div class="date"><?php the_date('d M'); ?></div>
                                </div>
                                <div class="post-header">
                                    <h4><a href="/blog-single"><?php the_title() ?></a></h4>
                                    <div class="postmeta">por : <span><?php the_author() ?></span></div>
                                </div>
                                <div class="postmeta">
                                    <p><?php the_excerpt()?></p>
                                    <div class="readmore"><a href="<?php echo the_permalink() ?>">Leer más</a></div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>

                <!-- Pagination
                <div class="pagiWrap">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">

                        </div>
                        <div class="col-md-8 col-sm-6">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>-->
            </div>


        </div>
    </div>
<?php
//get_sidebar();
get_footer();
