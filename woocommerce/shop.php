<?php
/**
 * @package MiracleLeaf
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<section id="shop" class="py-12 sm:pt-20">
  <div class="max-w-7xl mx-auto px-10">
    <h2 class="text-center text-5xl mb-3">Productos</h2>
    <div>
      <hr class="mx-auto md:w-[40vw] lg:w-[25vw]" />
    </div>
    <div id="products">
      <?php woocommerce_content(); ?>
    </div>
  </div>
</section>
