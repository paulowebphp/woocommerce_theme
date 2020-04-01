<?php
/**
 * Template Name: Home Page 
 * 
 */

get_header(); 

?>

    <div class="content-area">
        <main>


            <section class="slider">
                <div class="container">
                    <div class="row">
                        <?php _e('Slider', 'woocommerce_theme'); ?>
                    </div>
                </div>
            </section>


            <section class="popular-products">
                <div class="container">
                    <div class="row">
                        <?php _e('Popular Products', 'woocommerce_theme'); ?>
                    </div>
                </div>
            </section>


            <section class="new-arrivals">
                <div class="container">
                    <div class="row">
                        <?php _e('New Arrivals', 'woocommerce_theme'); ?>
                    </div>
                </div>
            </section>


            <section class="deal-of-the-week">
                <div class="container">
                    <div class="row">
                        <?php _e('Deal Of The Week', 'woocommerce_theme'); ?>
                    </div>
                </div>
            </section>


            <section class="lab-blog">
                <div class="container">
                    <div class="row">
                        <div class="title">
                            <?php _e('News', 'woocommerce_theme'); ?>
                        </div>
                        
                        <?php 
                        
                            if( have_posts() ):
                                
                                while( have_posts() ): the_post();

                                    ?>

                                        <article class="bottom3">


                                            <div class="bottom1">
                                                <h2><?php the_title(); ?></h2>
                                            </div>

                                            
                                            <div class="bottom1">
                                                <?php the_content(); ?>
                                            </div>


                                        </article>

                                    <?php 
                                    
                                endwhile;

                            else:

                                ?>

                                    <h3><?php _e('Nothing To Display', 'woocommerce_theme'); ?></h3>

                                <?php

                            endif;
                        
                        ?>
                    </div>
                </div>
            </section>


        </main>
    </div>

<?php get_footer(); ?>
