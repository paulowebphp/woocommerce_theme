<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Woocommerce Theme
 *
 */
?>

        <footer>


            <section class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <?php _e('Widgets do Rodapé', 'woocommerce_theme'); ?>
                    </div>
                </div>
            </section>

            <section class="copyright">
                <div class="container">
                    <div class="row">

                        <div class="copyright-text col-12 col-md-6">
                            <?php _e('Copyright', 'woocommerce_theme'); ?>
                        </div>

                        <div class="footer-menu col-12 col-md-6 text-left text-md-right">
                            <?php  
                            
                                wp_nav_menu(

                                    array(

                                        'theme_location'=>'woocommerce_theme_footer_menu'

                                    )

                                );
                            
                            ?>
                        </div>

                    </div>
                </div>
            </section>


        </footer>


    </div><!-- site -->
    <?php wp_footer(); ?>
</body>
</html>