<?php
/**
 * @package MiracleLeafPosts
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

    <!-- BEGIN MAIN -->
    <main id="content">

      <section id="posts" class="text-dark-green max-w-7xl mx-auto px-10 pt-5 pb-14 bg-beige bg-[url('../../src/img/background-front-mobile.webp')] bg-no-repeat bg-right bg-contain sm:flex-row lg:px-36 sm:bg-none">
        <div id="post" class="font-plex-500 font-medium sm:basis-1/2">
          <div id="title" class="font-poppins text-3xl my-8 text-center font-bold">
            <?= the_title(); ?>
          </div>
          <div id="img">
            <?= the_post_thumbnail('medium', array('class' => 'mx-auto mb-2 sm:float-left')); ?>
          </div>
          <div id="content" class="">
            <?= the_content() ?>
          </div>
        </div>
      </section>

      <section id="posts-navigation" class="text-dark-green max-w-7xl mx-auto px-10 pt-5 pb-14 bg-beige bg-[url('../../src/img/background-front-mobile.webp')] bg-no-repeat bg-right bg-contain sm:flex-row lg:px-36 sm:bg-none">
        <div class="flex flex-col items-center sm:flex-row sm:justify-between">

          <div class="previous-post">
            <?= previous_post_link('%link', '&#129044; %title') ?>
          </div>

          <div class="next-post text-right">
            <?= next_post_link('%link', '%title &#129046;') ?>
          </div>

        </div>
      </section>
    </main>
    <!-- END MAIN -->