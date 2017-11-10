<?php
/**
 */

get_header(); ?>




    <!--inner header start-->
    <div class="inner-heading">
        <div class="container">
            <h3>Contáctanos</h3>
        </div>
    </div>
    <!--inner header end-->

    <!--inner content start-->
    <div class="inner-content">
        <div class="container">
            <div class="map">

                <iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:EiBDcmEuIDY1ICM0Yi00LCBCb2dvdMOhLCBDb2xvbWJpYQ&key=AIzaSyDD7jpk21ild9KLPyeOO4F1WLU7f-N5p_0" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>

            <div class="contact-wrap">
                <div class="row">
                    <div class="col-md-8 column">
                        <div class="contact-form">
                            <div id="message"></div>
                            <?php while (have_posts()) : the_post();
                                the_content();
                            endwhile; ?>
                        </div>
                    </div>

                    <div class="col-md-4 column">
                        <div class="contact-now">
                            <div class="contact"> <span><i class="fa fa-home"></i></span>
                                <div class="information"> <strong>Dirección:</strong>
                                    <p>Carrera 65 # 4B 04 Barrio La Pradera Bogotá</p>
                                </div>
                            </div>
                            <!-- Contact Info -->
                            <div class="contact"> <span><i class="fa fa-envelope"></i></span>
                                <div class="information"> <strong>Dirección de email</strong>
                                    <p>info@mintecceramic.com</p>
                                </div>
                            </div>
                            <!-- Contact Info -->
                            <div class="contact"> <span><i class="fa fa-phone"></i></span>
                                <div class="information"> <strong>TELÉFONO No:</strong>
                                    <p>+57 301 632 63 65</p>
                                    <p>+57 318 368 26 95</p>
                                </div>
                            </div>
                            <!-- Contact Info -->
                        </div>
                        <!-- Contact Now -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
//get_sidebar();
get_footer();
