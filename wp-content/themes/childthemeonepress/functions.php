<?php
/**
 * OnePress Child Theme Functions
 *
 */
/**
 * Enqueue child theme style
 */


/*add options page*/
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    acf_add_options_sub_page('Footer');

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));   
}

function onepress_child_enqueue_styles() {
    wp_enqueue_style( 'onepress-child-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_script( 'jQuery FlexSlider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(),' 2.6.0', true);
    wp_enqueue_script( 'global', get_template_directory_uri() . '/js/global.js', array(),' 2.0.1', true);
}
add_action( 'wp_enqueue_scripts', 'onepress_child_enqueue_styles' );



/*
 * wc_remove_related_products
 * 
 * Clear the query arguments for related products so none show.
 *   
 */
function wc_remove_related_products( $args ) {
    return array();
}
add_filter('woocommerce_related_products_args','wc_remove_related_products', 10); 


/*add tab INGREDIENSER and rename tab*/
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );

function woo_rename_tabs( $tabs ) {

    global $product;
    
    if( $product->has_attributes() ) { // Check if product has attributes
        $tabs['additional_information']['title'] = __( 'Ingredienser' );    // Rename the additional information tab
    }
 
    return $tabs;
 
}


/*remove  description title*/
add_filter( 'woocommerce_product_description_heading', 'remove_product_description_heading' );
function remove_product_description_heading() {
    return '';
}

/*remove rewiews*/
add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
function wcs_woo_remove_reviews_tab($tabs) {
 unset($tabs['reviews']);
 return $tabs;
}

/*limit short description to 200 char and add lär mer*/
function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 200);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'... <a href="#description">Läs mer</a>';
    return $excerpt;
}


/*products per page 12*/
add_filter('loop_shop_per_page', function($cols){
    return 12;
}, 20);

