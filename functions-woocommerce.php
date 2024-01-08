<?php
/**
 * @package MiracleLeaf
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


// Add WooCommerce support
function miracleleaf_add_woocommerce_support() {
  add_theme_support('woocommerce', array(
    'thumbnail_image_width' => 150,
    'single_image_width'    => 300,
    'product_grid'          => array(
      'default_rows'    => 3,
      'min_rows'        => 2,
      'max_rows'        => 8,
      'default_columns' => 4,
      'min_columns'     => 2,
      'max_columns'     => 5,
    ),
  ));
}
add_action('after_setup_theme', 'miracleleaf_add_woocommerce_support');


// Start WooCommerce wrapper
function miracleleaf_woocommerce_wrapper_start() {
  echo '<section id="woocommerce" class="py-12 sm:pt-20">';
  echo '<div id="products" class="max-w-7xl mx-auto px-10">';
}
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper');
add_action('woocommerce_before_main_content', 'miracleleaf_woocommerce_wrapper_start');


// End WooCommerce wrapper
function miracleleaf_woocommerce_wrapper_end() {
  echo '</div>';
  echo '</section>';
}
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end');
add_action('woocommerce_after_main_content', 'miracleleaf_woocommerce_wrapper_end');


// Return product image with no <a> tag
function miracleleaf_remove_woocommerce_product_link($html) {
  return strip_tags($html, '<div><img>');
}
add_filter('woocommerce_single_product_image_thumbnail_html', 'miracleleaf_remove_woocommerce_product_link');


// Start HTML tag for product list
function miracleleaf_woocommerce_product_loop_start() {
  echo '<ul class="flex flex-col items-center flex-wrap sm:flex-row sm:justify-center sm:gap-x-12 sm:items-start">';
}
add_filter('woocommerce_product_loop_start', 'miracleleaf_woocommerce_product_loop_start');


// Add style classes to quantity input field
function miracleleaf_woocommerce_quantity_input_classes_filter($array, $product){

	return array('w-16', 'h-10', 'border-green-dark', 'border-2', 'text-center', 'qty');
}
add_filter('woocommerce_quantity_input_classes', 'miracleleaf_woocommerce_quantity_input_classes_filter', 10, 2);


// Add style classes to price when it has any discount
function miracleleaf_woocommerce_format_sale_price($price, $regular_price, $sale_price) {

	$price = '<del aria-hidden="true">' . ( is_numeric( $regular_price ) ? wc_price( $regular_price ) : $regular_price ) . '</del> <ins class="no-underline bg-yellow-100 py-1 px-2">' . ( is_numeric( $sale_price ) ? wc_price( $sale_price ) : $sale_price ) . '</ins>';

  return $price;

}
add_filter('woocommerce_format_sale_price', 'miracleleaf_woocommerce_format_sale_price', 10, 3);



/**
 * @snippet       Plus Minus Quantity Buttons @ WooCommerce Single Product Page
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli. Taken from https://www.businessbloomer.com/woocommerce-add-plus-minus-buttons-to-add-to-cart-quantity-input/
 * @compatible    WooCommerce 8
 * @community     https://businessbloomer.com/club/
 */
 
 add_action( 'woocommerce_before_quantity_input_field', 'miracleleaf_display_quantity_minus' );
 
 function miracleleaf_display_quantity_minus() {
    if ( ! is_product() ) return;
    echo '<button type="button" class="minus border-2 border-green-dark bg-green-dark-transparent rounded-lg w-7 h-10" >-</button>';
 }
  
 add_action( 'woocommerce_after_quantity_input_field', 'miracleleaf_display_quantity_plus' );
  
 function miracleleaf_display_quantity_plus() {
    if ( ! is_product() ) return;
    echo '<button type="button" class="plus border-2 border-green-dark bg-green-dark-transparent rounded-lg w-7 h-10" >+</button>';
 }
  
 add_action( 'woocommerce_before_single_product', 'miracleleaf_add_cart_quantity_plus_minus' );
  
 function miracleleaf_add_cart_quantity_plus_minus() {
    wc_enqueue_js( "
       $('form.cart').on( 'click', 'button.plus, button.minus', function() {
             var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
             var val   = parseFloat(qty.val());
             var max = parseFloat(qty.attr( 'max' ));
             var min = parseFloat(qty.attr( 'min' ));
             var step = parseFloat(qty.attr( 'step' ));
             if ( $( this ).is( '.plus' ) ) {
                if ( max && ( max <= val ) ) {
                   qty.val( max );
                } else {
                   qty.val( val + step );
                }
             } else {
                if ( min && ( min >= val ) ) {
                   qty.val( min );
                } else if ( val > 1 ) {
                   qty.val( val - step );
                }
             }
          });
    " );
 }


// Disable WooCommerce styles
add_filter('woocommerce_enqueue_styles', '__return_false');
