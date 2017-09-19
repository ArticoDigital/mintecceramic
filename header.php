<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mintecceramic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>


    <link rel="shortcut icon" href="favicon.ico"><!-- Bootstrap -->
    <link href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/rs-plugin/css/settings.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="">


    <header id="masthead" class="site-header">
        <div class="header">
            <div class="container">
                <!-- Row Rtart -->
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="logo"> <?php the_custom_logo() ?></div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <!--navegation-->
                        <div class="navigationwrape">
                            <div class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'menu-1',
                                        'menu_id' => 'primary-menu',
                                        'menu_class' => 'nav navbar-nav',
                                        'container' => 'ul',
                                    ));
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </div>

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu"
                    aria-expanded="false"><?php esc_html_e('Primary Menu', 'mintecceramic'); ?></button>

        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->


