<?php
/**
 * @package MiracleLeafPosts
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$posts = get_posts();

?>

    <!-- BEGIN MAIN -->
    <main id="content">

      <!-- BEGIN POSTS -->
      <section id="posts" class="max-w-7xl mx-auto px-10 pt-5 pb-14 bg-green-dark bg-[url('../../src/img/background-front-mobile.webp')] bg-no-repeat bg-right bg-contain sm:flex-row lg:px-36 sm:bg-none">
        <div id="front-left" class="font-plex-500 font-medium sm:basis-1/2">

          <?php

            foreach($posts as $post) {
              
              $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
              $thumbnail = "";
              if ($image[0])
                $thumbnail = $image[0];

          ?>
            <div class="post bg-white mb-8 flex flex-col sm:flex-row sm:h-96 lg:h-[21rem]">
              <div class="post-img h-48 sm:h-full sm:w-[30%]">
                <img src="<?= $thumbnail ?>" class="h-full w-full object-cover" alt="" />
              </div>
              <div class="post-content px-4 pb-12 sm:px-8 sm:w-[70%]">
                <h1 class="text-3xl post-title font-poppins font-bold my-4 sm:mt-6 lg:mt-10"><?= $post->post_title ?></h1>
                <p class="post-text pb-8">
                  <?= wp_trim_words($post->post_content, 50) ?>
                </p>
                <a href="<?= get_permalink($post) ?>" class="btn-primary mt-4 mb-2">Ver más</a>
              </div>
            </div>

          <?php
            }
          ?>

        </div>
      </section>
      <!-- END POSTS -->

    </main>
    <!-- END MAIN -->