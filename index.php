<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Woocommerce Theme
 *
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


        </main>
    </div>

<?php get_footer(); ?>