<?php 
/**
 * Functions and definitions
 *
  * @package Woocommerce Theme
 */

/**
 * Enqueue scripts and styles.
 */
function woocommerce_theme_scripts()
{

    // Load our main stylesheet.
    /**
     * Poderia usar: 
     * 
     * a) get_template_directory_uri() [caminho lógico até pasta do tema], 
     * b) get_template_directory() [caminho físico até a pasta do tema], 
     * c) get_stylesheet_uri() [caminho lógico até o style.css]
     */

    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');

    wp_enqueue_style( 'dashicons' );
    
	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );

    wp_enqueue_style( 'wocoomerce-theme-style', get_stylesheet_uri(), array(), '1.0', 'all' );
  	
    // Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), null, true);
    //se o arquivo bootstrap estiver no host
    //wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/inc/bootstrap.min.js', array('jquery'), '4.4.1', true);
	
    
	

}//end function
add_action( 'wp_enqueue_scripts', 'woocommerce_theme_scripts' );









function woocommerce_theme_config()
{

    register_nav_menus(

        array(

            'woocommerce_theme_main_menu'=>__('Woocommerce Theme Main Menu','woocommerce_theme'),
            
            'woocommerce_theme_footer_menu'=>__('Woocommerce Theme Footer Menu','woocommerce_theme')

        )

    );


    add_theme_support(
        
        'woocommerce',

        array(

            'thumbnail_image_width'=>255,
            'single_image_width'=>255,
            'product_grid'=>array(

                'default_rows'=>10,
                'min_rows'=>5,
                'max_rows'=>10,
                'default_columns'=>1,
                'min_columns'=>1,
                'max_columns'=>1

            )

        )
    
    );


    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    if(!isset($content_width))
    {
        $content_width = 600;
    }//end if

}//end function
add_action( 'after_setup_theme','woocommerce_theme_config',0 );



if( class_exists( 'WooCommerce' ) )
{

    require get_template_directory().'/inc/wc-modifications.php';


}//end if







































?>