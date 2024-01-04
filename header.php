<?php
/**
 * @package MiracleLeafPosts
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>

    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="La hoja milagrosa" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mlcolombia.com/" />
    <meta property="og:image" content="https://mlcolombia.com/opengraph.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:locale" content="es" />

    <!-- Meta Pixel Code -->
    <!-- <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', 'XXXXX');
      fbq('track', 'PageView');
    </script> -->
    <!-- <noscript>
      <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=XXXXX&ev=PageView&noscript=1" />
    </noscript> -->
    <!-- End Meta Pixel Code -->
    <link rel="stylesheet" crossorigin href="<?php bloginfo('template_directory') ?>/assets/index-KLCFwwXW.css">
    <link rel="stylesheet" crossorigin href="<?php bloginfo('template_directory') ?>/assets/custom.css">
    <!-- <link rel="stylesheet" crossorigin href="<?php bloginfo('template_directory') ?>/assets/flickity.min.css"> -->
    <?php wp_head(); ?>
  </head>
  
  <body class="bg-[url('../../src/img/background.webp')] bg-repeat font-plex-500 text-lg " <?php body_class(); ?>>

    <!-- BEGIN HEADER -->
    <header class="flex flex-row max-w-7xl mx-auto mt-10 px-4 py-10 bg-green-dark">
      <div id="logo" class="text-center basis-4/5 sm:basis-1/5 md:basis-1/4">
        <a href="/" alt="Inicio">
          <img src="<?php bloginfo('template_directory') ?>/assets/logo-Bb8Tjpev.webp" alt="" class="max-w-[50%] mx-auto" />
        </a>
      </div>
      <div class="basis-1/5 text-right sm:basis-4/5 md:basis-3/4">

        <!-- BEGIN MOBILE MENU -->
        <nav id="menu-mobile" class="flex text-right justify-end uppercase text-beige sm:hidden">
          <label class="relative z-40 cursor-pointer px-3 py-6" for="mobile-menu">
            <input class="peer hidden" type="checkbox" id="mobile-menu" />
            <div class="relative z-50 block h-[1px] w-7 bg-white   bg-transparent content-[''] before:absolute before:top-[-0.35rem] before:z-50 before:block before:h-full before:w-full before:bg-white  before:transition-all before:duration-200 before:ease-out before:content-[''] after:absolute after:right-0 after:bottom-[-0.35rem] after:block after:h-full after:w-full after:bg-white  after:transition-all after:duration-200 after:ease-out after:content-[''] peer-checked:bg-transparent before:peer-checked:top-0 before:peer-checked:w-full before:peer-checked:rotate-45 before:peer-checked:transform after:peer-checked:bottom-0 after:peer-checked:w-full after:peer-checked:-rotate-45 after:peer-checked:transform"></div>
            <div class="fixed inset-0 z-40 hidden h-full w-full bg-white  /50 backdrop-blur-sm peer-checked:block">&nbsp;</div>
            <div class="fixed top-0 right-0 z-40 h-full w-full translate-x-full overflow-y-auto overscroll-y-none transition duration-500 peer-checked:translate-x-0">
              <div class="float-right min-h-full w-[85%] bg-green-dark px-6 pt-32 shadow-2xl">
                <?php wp_nav_menu(array('header-menu' => 'header-menu')); ?>
                <div id="cart-mobile" class="">
                  <a href="/cart">
                    <?php
                      $cart = WC()->cart;
                      $quantity = $cart->get_cart_contents_count();

                      if ($quantity > 0) {
                        echo '<div class="bg-red-600 text-white text-[0.75rem] p-[0.35rem] rounded-2xl leading-[0.5rem] mt-[-0.4rem] float-right">' . $quantity . '</div>';
                      }
                    ?>
                    <img src="data:image/webp;base64,UklGRjIFAABXRUJQVlA4WAoAAAAwAAAAMwAAKgAASUNDUKACAAAAAAKgbGNtcwRAAABtbnRyUkdCIFhZWiAH6AABAAMAEwAgAB9hY3NwQVBQTAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9tYAAQAAAADTLWxjbXMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA1kZXNjAAABIAAAAEBjcHJ0AAABYAAAADZ3dHB0AAABmAAAABRjaGFkAAABrAAAACxyWFlaAAAB2AAAABRiWFlaAAAB7AAAABRnWFlaAAACAAAAABRyVFJDAAACFAAAACBnVFJDAAACFAAAACBiVFJDAAACFAAAACBjaHJtAAACNAAAACRkbW5kAAACWAAAACRkbWRkAAACfAAAACRtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACQAAAAcAEcASQBNAFAAIABiAHUAaQBsAHQALQBpAG4AIABzAFIARwBCbWx1YwAAAAAAAAABAAAADGVuVVMAAAAaAAAAHABQAHUAYgBsAGkAYwAgAEQAbwBtAGEAaQBuAABYWVogAAAAAAAA9tYAAQAAAADTLXNmMzIAAAAAAAEMQgAABd7///MlAAAHkwAA/ZD///uh///9ogAAA9wAAMBuWFlaIAAAAAAAAG+gAAA49QAAA5BYWVogAAAAAAAAJJ8AAA+EAAC2xFhZWiAAAAAAAABilwAAt4cAABjZcGFyYQAAAAAAAwAAAAJmZgAA8qcAAA1ZAAAT0AAACltjaHJtAAAAAAADAAAAAKPXAABUfAAATM0AAJmaAAAmZwAAD1xtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAEcASQBNAFBtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJBTFBIIQIAAAGQLUm2aVu9dc65tm3btm3btm3btm3btm3j2Ksf9l5zjr2+ICImIPGpsJ9bp7uPyQPLXqNiUH7LRKjwoGW+K0VntkrtcNL/zZs3b0lybSEL5nECSNm0CNyv0apB42wwb24ZcoCC6xM5ZZgFx/3nCwWMIPvBiuf4WSVxCF/ZPbgSCMd2ixvGiypYRdZ1m/6fwtFXswPNycFKuQ2eBlCSXtwHbCczK+E0mQeo542L8PXnI6jXIVcBzsdy4fVQg5ykYX/FkMSAq0oT4UapgBVkIQ30JUcCiD94hejcsoD9Gz/YdOL487ML9vuUroRS5AJozyNbIBPFl2MWWUEvUzSvw/lerB5e8bdTD/vJ4si54rbo+e6O3OR6CFYgtwFA9kL6sQGMIetJ4AEjUiPdQwqG9AbuMDimSEdyKuZQNDROOoN7Ier3k79jLJUJi9uXbCuDyWSXDG8lIkfgHCMTCqWM4CObM08h/URIFMnTkN5CVoJsB7KXWFHSf/gwyRGvGJ1GDMcovwXyHcWMHbG8cCa6kGzBxBB3pC5lHISoM3VKu1D8Ob9J7oglkHDhX/Lr+BgSyZ/T472EWmle0+PNuAJnaLpHx3aZppv1SlIxl0ZFmhuZtMaoHBymflaBXbTmq3hxhNZQlXmV1dertNHKZZhFpoV6QYWwZFrYYDYfujvMpkE/5glPe3y04pzztNUpAEfHS4H+51rYoO/sejXo/+nGNrgDAFZQOCBCAAAAsAMAnQEqNAArAD4xGItEIiGhEVQAIAMEtIAACfiKJTR7VxOeX2AA/v5V4zVHK4iHpSwT9Azf3bU53PPZTePApgAA" alt="" class="max-w-[12%] float-right" />
                  </a>
                </div>    
              </div>
            </div>
          </label>
        </nav>
        <!-- END MOBILE MENU -->

        <!-- BEGIN DESKTOP MENU -->
        <nav id="menu-desktop" class="text-base text-right justify-end uppercase text-beige hidden sm:flex">
          <div class="menu-items">
            <?php wp_nav_menu(array('header-menu' => 'header-menu')); ?>
          </div>
          <div id="cart-desktop" class="ml-4">
            <a href="/cart">
              <?php
                $cart = WC()->cart;
                $quantity = $cart->get_cart_contents_count();

                if ($quantity > 0) {
                  echo '<div class="absolute bg-red-600 text-white text-[0.75rem] p-[0.35rem] rounded-2xl leading-[0.5rem] ml-4 mt-[-0.4rem]">' . $quantity . '</div>';
                }
              ?>
              <img src="data:image/webp;base64,UklGRjIFAABXRUJQVlA4WAoAAAAwAAAAMwAAKgAASUNDUKACAAAAAAKgbGNtcwRAAABtbnRyUkdCIFhZWiAH6AABAAMAEwAgAB9hY3NwQVBQTAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9tYAAQAAAADTLWxjbXMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA1kZXNjAAABIAAAAEBjcHJ0AAABYAAAADZ3dHB0AAABmAAAABRjaGFkAAABrAAAACxyWFlaAAAB2AAAABRiWFlaAAAB7AAAABRnWFlaAAACAAAAABRyVFJDAAACFAAAACBnVFJDAAACFAAAACBiVFJDAAACFAAAACBjaHJtAAACNAAAACRkbW5kAAACWAAAACRkbWRkAAACfAAAACRtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACQAAAAcAEcASQBNAFAAIABiAHUAaQBsAHQALQBpAG4AIABzAFIARwBCbWx1YwAAAAAAAAABAAAADGVuVVMAAAAaAAAAHABQAHUAYgBsAGkAYwAgAEQAbwBtAGEAaQBuAABYWVogAAAAAAAA9tYAAQAAAADTLXNmMzIAAAAAAAEMQgAABd7///MlAAAHkwAA/ZD///uh///9ogAAA9wAAMBuWFlaIAAAAAAAAG+gAAA49QAAA5BYWVogAAAAAAAAJJ8AAA+EAAC2xFhZWiAAAAAAAABilwAAt4cAABjZcGFyYQAAAAAAAwAAAAJmZgAA8qcAAA1ZAAAT0AAACltjaHJtAAAAAAADAAAAAKPXAABUfAAATM0AAJmaAAAmZwAAD1xtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAEcASQBNAFBtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJBTFBIIQIAAAGQLUm2aVu9dc65tm3btm3btm3btm3btm3j2Ksf9l5zjr2+ICImIPGpsJ9bp7uPyQPLXqNiUH7LRKjwoGW+K0VntkrtcNL/zZs3b0lybSEL5nECSNm0CNyv0apB42wwb24ZcoCC6xM5ZZgFx/3nCwWMIPvBiuf4WSVxCF/ZPbgSCMd2ixvGiypYRdZ1m/6fwtFXswPNycFKuQ2eBlCSXtwHbCczK+E0mQeo542L8PXnI6jXIVcBzsdy4fVQg5ykYX/FkMSAq0oT4UapgBVkIQ30JUcCiD94hejcsoD9Gz/YdOL487ML9vuUroRS5AJozyNbIBPFl2MWWUEvUzSvw/lerB5e8bdTD/vJ4si54rbo+e6O3OR6CFYgtwFA9kL6sQGMIetJ4AEjUiPdQwqG9AbuMDimSEdyKuZQNDROOoN7Ier3k79jLJUJi9uXbCuDyWSXDG8lIkfgHCMTCqWM4CObM08h/URIFMnTkN5CVoJsB7KXWFHSf/gwyRGvGJ1GDMcovwXyHcWMHbG8cCa6kGzBxBB3pC5lHISoM3VKu1D8Ob9J7oglkHDhX/Lr+BgSyZ/T472EWmle0+PNuAJnaLpHx3aZppv1SlIxl0ZFmhuZtMaoHBymflaBXbTmq3hxhNZQlXmV1dertNHKZZhFpoV6QYWwZFrYYDYfujvMpkE/5glPe3y04pzztNUpAEfHS4H+51rYoO/sejXo/+nGNrgDAFZQOCBCAAAAsAMAnQEqNAArAD4xGItEIiGhEVQAIAMEtIAACfiKJTR7VxOeX2AA/v5V4zVHK4iHpSwT9Azf3bU53PPZTePApgAA" alt="" class="max-w-[50%]" />
            </a>
          </div>
        </nav>
        <!-- END DESKTOP MENU -->
        <div class="mt-5 absolute right-0 hidden border-t-[1px] border-green-dark sm:flex">
          <hr class="md:w-[70vw] lg:w-[60vw]" />
        </div>
      </div>
    </header> 
    <!-- END HEADER-->
