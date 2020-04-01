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
                    <?php _e('Search', 'woocommerce_theme'); ?>
                </div>
            </section>
            <section class="top-bar">

                <div class="container">
                    <div class="row">
                        <div class="brand col-3"><?php _e('Logo', 'woocommerce_theme'); ?></div>
                        <div class="second-column col-9">
                            <div class="account"><?php _e('Account', 'woocommerce_theme'); ?></div>
                            <nav class="main-menu">
                                <?php

                                    wp_nav_menu(

                                        array(

                                            'theme_location'=>'woocommerce_theme_main_menu'

                                        )

                                    );

                                ?>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>
        </header>