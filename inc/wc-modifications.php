<?php
/**
 *  Template Overrides for WooCommerce pages
 *
  * @package Woocommerce Theme
 */

/**
 * Enqueue scripts and styles.
 */

function woocommerce_theme_wc_modify()
{

        
    /*******************archive-product.php***************************/
    /*******************archive-product.php***************************/
    add_action( 'woocommerce_before_main_content', 'woocommerce_theme_open_container_row', 5 );

    function woocommerce_theme_open_container_row()
    {

        ?>

            <div class="container shop-content">
                <div class="row">


        <?php


    }//end function








    add_action( 'woocommerce_after_main_content', 'woocommerce_theme_close_container_row', 5 );


    function woocommerce_theme_close_container_row()
    {

        ?>
                
                </div><!--row-->
            </div><!--container-->

        <?php


    }//end function



    if( is_shop() )
    {


        add_action('woocommerce_before_main_content','woocommerce_theme_add_sidebar_tags', 6 );

        function woocommerce_theme_add_sidebar_tags()
        {

            ?>

                <div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">
                
            <?php


        }//end function


        add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );


        add_action('woocommerce_before_main_content','woocommerce_theme_close_sidebar_tags', 8 );

        function woocommerce_theme_close_sidebar_tags()
        {

            ?>

                </div><!--sidebar-shop-->
                
            <?php


        }//end function


        //Descrição curta do produto
        add_action('woocommerce_after_shop_loop_item_title','the_excerpt', 1 );

    }//end if




    




    add_action('woocommerce_before_main_content','woocommerce_theme_add_shop_tags', 9 );

    function woocommerce_theme_add_shop_tags()
    {

        if( is_shop() )
        {

            ?>

                <div class="col-lg-9 col-md-8 order-1 order-md-2">
                
            <?php


        }//end if
        else
        {

            ?>

                <div class="col">
                
            <?php

        }//ene else


    }//end function



    add_action('woocommerce_after_main_content','woocommerce_theme_close_shop_tags', 4 );

    function woocommerce_theme_close_shop_tags()
    {
        


        if( is_shop() )
        {

            ?>

                </div>
                
            <?php


        }//end if
        else
        {

            ?>

                </div>
                
            <?php

        }//ene else




    }//end function







    remove_action('woocommerce_sidebar','woocommerce_get_sidebar');
    
    /*******************archive-product.php***************************/
    /*******************archive-product.php***************************/







    /*
    add_filter('woocommerce_show_page_title','woocommerce_theme_remove_shop_title');

    function woocommerce_theme_remove_shop_title()
    {
        return false;

    }//end function


    //OUTRA FORMA DE FAZER O FILTRO
    function woocommerce_theme_remove_shop_title($val)
    {
        $val = false;
        return $val;

    }//end function

    */




   


}//end function




add_action('wp','woocommerce_theme_wc_modify');







?>