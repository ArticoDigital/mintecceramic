<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mintecceramic
 */

?>
<!--Newsletter start-->
<div class="ct_newsletter_wrap">
    <div class="container">
        <div class="newletter_des">
            <h5>Suscríbete a nuestro newsletter mensual</h5>

            <?php echo do_shortcode( '[contact-form-7 id="132" title="newsletter"]' ); ?>


        </div>
    </div>
    </div>
</div>
<!--Newsletter end-->
<div class="footer-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="footer-logo"><h3>Mintec Ceramic</h3></div>
                <p>Fundada en el año 2007 Mintec Ceramic Ltda es una empresa especializada en la mejora de la calidad en cada una de las etapas del proceso productivo de la industria ladrillera .... <a href="/mintecceramic">Leer más</a> </p>
                <div class="social"> <a href="#." target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
                <h3>Enlaces</h3>
                <ul class="footer-links">
                    <li> <a href="/"> Inicio </a></li>
                    <li> <a href="/mintecceramic"> Mintec </a></li>
                    <li> <a href="/servicios"> Servicios</a></li>
                    <li> <a href="/clientes"> Clientes </a></li>
                    <li> <a href="#"> Blog </a></li>
                    <li> <a href="/contacto"> Contacto </a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <h3>Servicios</h3>
                <ul class="footer-links">
                    <?php $query = new WP_Query(['post_type' => 'servicios']);
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                    <?php endwhile; ?>


                </ul>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <h3>Contacto</h3>
                <div class="footer-address">Carrera 65 # 4B  04 Barrio La Pradera Bogotá</div>
                <div class="call-us"> <a href="#">+57 301 632 63 65</a></div>
                <div class="call-us"> <a href="#">+57 318 368 26 95</a></div>
            </div>
        </div>
        <div class="footerWrp">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="copyright">© 2017 Mintec Ceramic| Todos los derechos reservados </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <ul class="foot footer-links">
                        <li><a href="https://artico.io" target="_blank">Diseñado por Ártico Digital</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url') ?>/assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/bootstrap.min.js"></script>

<!-- Load JS siles -->
<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- general script file -->
<script src="<?php bloginfo('template_url') ?>/assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/script.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/assets/js/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>
</body>

</html>
