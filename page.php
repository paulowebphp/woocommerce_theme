<?php 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Woocommerce Theme
 */

get_header(); 

?>

    <div class="content-area">
        <main>


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
                                            <h1><?php the_title(); ?></h1>
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


        </main>
    </div>

<?php get_footer(); ?>