<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Woocommerce Theme
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <!-- pagetitle wordpress dynamic auto -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <div id="page" class="site">


        <header>
            <section class="search">
                <div class="container">
                    <div class="text-center d-md-flex align-items-center">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </section>
            <section class="top-bar">

                <div class="container">
                    <div class="row">
                        <div class="brand col-lg-2 col-md-3 col-12 text-center text-md-left"><?php _e('Logo', 'woocommerce_theme'); ?></div>
                        <div class="second-column col-lg-10 col-md-9 col-12">
                            <div class="row">


                                <div class="account col-12"><?php _e('Account', 'woocommerce_theme'); ?></div>

                                <div class="col-12">
                                    <nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <?php
                                            wp_nav_menu( 
                                                
                                                array(

                                                    'theme_location'    => 'woocommerce_theme_main_menu',
                                                    'depth'             => 3,
                                                    'container'         => 'div',
                                                    'container_class'   => 'collapse navbar-collapse',
                                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                                    'menu_class'        => 'nav navbar-nav',
                                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                                    'walker'            => new WP_Bootstrap_Navwalker(),

                                                ) 
                                            );
                                        ?>
                                    </nav>
                                </div>
                                


                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </header>