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


    <!-- Header start -->


    <!-- Header end -->

    <!-- Revolution slider start -->
    <div class="tp-banner-container sliderWraper">
        <div class="tp-banner" >
            <ul>
                <li data-slotamount="7" data-transition="incude" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?php bloginfo('template_url')?>/mintec/images/slide1.jpg" data-lazyload="<?php bloginfo('template_url')?>/mintec/images/slide1.jpg">
                    <div class="caption lft large-title tp-resizeme slidertext1" data-x="left" data-y="210" data-speed="600" data-start="2200"><span>Servicios</span></div>
                    <div class="caption lfb large-title tp-resizeme slidertext2" data-x="left" data-y="310" data-speed="600" data-start="2800">Conoce nuestros servicios.</div>
                    <div class="caption lfl large-title tp-resizeme slidertext3" data-x="left" data-y="350" data-speed="600" data-start="3500"><a href="/servicios">Servicios</a></div>
                </li>
                <li data-slotamount="7" data-transition="3dcurtain-vertical" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?php bloginfo('template_url')?>/mintec/images/slide2.jpg" data-lazyload="<?php bloginfo('template_url')?>/mintec/images/slide2.jpg">
                    <div class="caption lfl large-title tp-resizeme slidertext1" data-x="center" data-y="210" data-speed="600" data-start="2200"><span>Construction</span></div>
                    <div class="caption lfb large-title tp-resizeme slidertext4" data-x="center" data-y="310" data-speed="600" data-start="2800">Lorem Ipsum is simply dummy text of the printing and typesetting<br>
                        industry industry's standard dummy text.</div>
                    <div class="caption lfl large-title tp-resizeme slidertext3" data-x="center" data-y="350" data-speed="600" data-start="3500"><a href="#">Contáctanos</a></div>
                </li>
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
                    <h2>BUSCANDO UN CONSTRUCTOR DE CALIDAD PARA SU PROXIMO PROYECTO?</h2>
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
                    <h1>Acerca De<span> Mintec Ceramic</span></h1>
                    <div class="aboutTxt">Quiénes somos?</div>
                    <p>
                        Fundada en el año 2007 Mintec Ceramic Ltda es una empresa especializada en la mejora de la calidad en cada una de las etapas del proceso productivo de la industria ladrillera y otras industrias del sector cerámico.
                    </p>
                    <p>Somos especialistas en la caracterización de arcillas y otras materias primas para uso cerámico, la evaluación de residuos industriales para uso en la industria cerámica (co-procesamiento), el desarrollo de pastas cerámicas para los procesos extrusión, prensado y colaje, la optimización del proceso productivo y el desarrollo de nuevos productos siempre pensado en la mejora de la eficiencia energética y la rentabilidad de las empresas.</p>
                    <ul class="about-service">
                        <li>Más de 10 años de experiencia</li>
                        <li>Especialistas en caracterización de arcillas</li>
                        <li>Selección de materias primas adecuadas</li>
                        <li>Recursos tecnológicos y personal calificado</li>
                        <div class="clearfix"></div>
                    </ul>
                    <div class="readmore"><a href="/mintecceramic">Leer más</a></div>
                </div>
                <div class="col-md-5">
                    <div class="about-image"><img src="<?php bloginfo('template_url')?>/assets/images/about.jpg"></div>
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
                <li class="col-md-4 col-sm-6">
                    <div class="service-image"><img src="<?php bloginfo('template_url')?>/mintec/images/caracterización-de-materias-primas.jpg">
                        <div class="hoverlink">
                            <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="service-details">
                        <h3><a href="#">Caracterización de Materias Primas</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu faucibus magna. Fusce et odio nec tellus egestas volutpat.</p>
                        <div class="readmore"><a href="#">Leer más</a></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6">
                    <div class="service-image"><img src="<?php bloginfo('template_url')?>/mintec/images/asesoría-técnica.jpg">
                        <div class="hoverlink">
                            <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="service-details">
                        <h3><a href="#">Asesoría Técnica</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu faucibus magna. Fusce et odio nec tellus egestas volutpat.</p>
                        <div class="readmore"><a href="#">Leer más</a></div>
                    </div>
                </li>
                <li class="col-md-4 col-sm-6">
                    <div class="service-image"><img src="<?php bloginfo('template_url')?>/mintec/images/elementos-de-laboratorio.jpg">
                        <div class="hoverlink">
                            <div class="icon"><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="service-details">
                        <h3><a href="#">Elementos de laboratorio</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu faucibus magna. Fusce et odio nec tellus egestas volutpat.</p>
                        <div class="readmore"><a href="#">Leer más</a></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--service end-->

    <!--porfolio start-->
    <div class="porfolio-wrap">
        <div class="container">
            <h1>Últimos  <span>proyectos</span></h1>
            <ul class="row portfolio-service">
                <li class="col-md-3 col-sm-6" style="padding: 0 45px;">
                    <div class="project-image"><img src="<?php bloginfo('template_url')?>/mintec/images/ALIENERGY.jpg">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#"> ALIENERGY</a></h3>
                                <div class="portfolio-tags"> <span>Algo </span>, <span>Hicimos</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6" style="padding: 0 45px;">
                    <div class="project-image"><img src="<?php bloginfo('template_url')?>/mintec/images/arca.jpg">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">ARCA</a></h3>
                                <div class="portfolio-tags"> <span>Algo </span>, <span>Hicimos</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6" style="padding: 0 45px;">
                    <div class="project-image"><img src="<?php bloginfo('template_url')?>/mintec/images/Alfarera-Pueblo-Viejo.jpg">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#"> Alfarera Pueblo Viejo</a></h3>
                                <div class="portfolio-tags"> <span>Algo </span>, <span>Hicimos</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6" style="padding: 0 45px;">
                    <div class="project-image"><img src="<?php bloginfo('template_url')?>/mintec/images/arcillas-del-rosario.jpg">
                        <div class="portfolio-overley">
                            <div class="content">
                                <h3><a href="#">Arcillas del rosario</a></h3>
                                <div class="portfolio-tags"> <span>Algo </span>, <span>Hicimos</span> </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--porfolio end-->

    <!--Testimonials start-->
    <div class="testimonials-wrap">
        <div class="container">
            <div class="heading-wrap">
                <h1>Testimonios</h1>
            </div>
            <ul class="owl-carousel testimonials">
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?php bloginfo('template_url')?>/mintec/images/client.jpg"></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?php bloginfo('template_url')?>/mintec/images/client2.jpg"></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?php bloginfo('template_url')?>/mintec/images/client.jpg"></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?php bloginfo('template_url')?>/mintec/images/client2.jpg"></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?php bloginfo('template_url')?>/mintec/images/client.jpg"></div>
                    </div>
                </li>
                <li class="item">
                    <div class="testi-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis augue ultricies, molestie nisl mollis, efficitur velit. Nunc urna ligula, malesuada nec condimentum eu, tincidunt sit amet purus.</p>
                        <div class="name">John Doe <span>Lorem Ispum</span></div>
                        <div class="client-image"><img src="<?php bloginfo('template_url')?>/mintec/images/client2.jpg"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--Testimonials end-->


    <!--Team end-->



    <!--Footer start-->






<?php
//get_sidebar();
get_footer();
