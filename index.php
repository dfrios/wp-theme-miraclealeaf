<?php
/**
 * @package MiracleLeafPosts
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header();

if (get_the_content()) 
	get_template_part('parts/post');
else
	get_template_part('parts/home');

get_footer();

