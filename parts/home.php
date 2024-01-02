<?php
/**
 * @package MiracleLeaf
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


$products = wc_get_products(array(
  'status' => 'publish',
  'orderby' => 'rand',
  'stockstatus' => 'instock',
));


?>

    <!-- BEGIN MAIN -->
    <main id="content">

      <!-- BEGIN FRONT -->
      <section id="front" class="flex flex-col max-w-7xl mx-auto px-10 pt-5 pb-14 bg-beige bg-[url('../../src/img/background-front-mobile.webp')] bg-no-repeat bg-right bg-contain sm:flex-row lg:px-24 sm:bg-none">
        <div id="front-left" class="font-plex-500 font-medium sm:basis-1/2">
          <h2 class="text-4xl leading-10 lg:text-6xl">
            Creemos en<br/>
            la poderosa<br/>
            <span class="text-green-dark text-5xl font-bold lg:text-8xl">conexión</span><br/>
            entre la naturaleza<br/>
            y el bienestar
          </h2>
          <div class="text-green text-lg my-5 lg:text-2xl">
            por eso nuestros productos están <br/>
            desarrollados a base de componentes <br/>
            naturales, libres de químicos.<br/>
            Así buscamos inspirarte a cuidarte de una forma integral: cuerpo, mente y espíritu.
          </div>
          <div class="mt-10 lg:mt-12">
            <a href="#!" class="btn-primary">Compra ahora</a>
          </div>
          <!-- <div class="mt-8 lg:mt-10">
            <a href="#!" class="btn-secondary">Más información</a>
          </div> -->
        </div>
        <div id="front-right" class="mt-14 mb-10 text-center sm:basis-1/2 ">
          <!-- BEGIN DESKTOP CAROUSE -->
          <!-- <div class="z-0 h-1/2 w-[70%] absolute hidden left-[50%] mt-[-90px] bg-no-repeat bg-left bg-contain bg-[url('../../src/img/background-carousel-tablet.webp')] sm:block lg:bg-[url('../../src/img/background-carousel-desktop.webp')] lg:h-full lg:w-full lg:mt-[-120px] lg:mr-10"></div> -->
          <div class="z-0 right-0 w-[55%] mt-[-80px] absolute hidden sm:block">
            <img src="<?php bloginfo('template_directory') ?>/assets/background-carousel-bCm19B-e.webp" alt="" class="w-full" />
          </div>
          <!-- END DESKTOP CAROUSEL -->
          <!-- BEGIN MOBILE CAROUSEL -->
          <div class="sm:z-10 sm:relative sm:mt-[-40px] sm:pl-8">
            <!-- <img src="<?php bloginfo('template_directory') ?>/assets/carousel-5YW2-63l.webp" alt="" class="rounded-lg"> -->
            <div class="carousel" data-flickity='{ "lazyLoad": true, "autoPlay": true, "wrapAround": true }'>
              <?php
                foreach ($products as $product) {
              ?>
              <div class="carousel-cell bg-white">
                <img class="carousel-cell-image" data-flickity-lazyload="<?= wp_get_attachment_image_url($product->get_image_id(), 'full') ?>" alt="" />
              </div>
              <?php
                }
              ?>
            </div>
          </div>
          <!-- END MOBILE CAROUSEL -->
        </div>
      </section>
      <!-- END FRONT -->

      <!-- BEGIN PRODUCTS -->
      <section id="productos" class="py-12 sm:pt-20">
        <div class="max-w-7xl mx-auto px-10">
          <h2 class="text-center text-5xl mb-3">Productos</h2>
          <div>
            <hr class="mx-auto md:w-[40vw] lg:w-[25vw]" />
          </div>
          <div class="flex flex-col text-center mt-14 sm:flex-row sm:flex-wrap sm:justify-evenly">

            <?php
              foreach ($products as $product) {
            ?>
              <article class="front-article" itemscope itemtype="http://schema.org/Product">
                <a href="<?= $product->get_permalink() ?>"><?= $product->get_image('woocommerce_thumbnail', array('class'=>'mx-auto')) ?></a>
                <a href="<?= $product->get_permalink() ?>"><h3 class="text-xl mt-4 capitalize" itemprop="name"><?= $product->get_name() ?></h3></a>
                <div class="mt-6">
                  <a href="<?= $product->get_permalink() ?>" class="btn-product">Más información</a>
                </div>
              </article>
            <?php
              }
            ?>

          </div>
        </div>
      </section>
      <!-- END PRODUCTS -->

      <!-- BEGIN STRIPE -->
      <section id="nosotros" class="bg-green-dark py-20">
        <div class="max-w-7xl mx-auto flex flex-col px-10 sm:flex-row sm:items-center">
          <div id="stripe-left" class="basis-2/5">
            <h1 class="title text-center text-white pb-10 font-plex-500 text-5xl sm:text-left">
              La hoja<br/>
              <span class="text-6xl">milagrosa</span>
            </h1>
            <p class="content text-center text-white mb-8 sm:text-left">
              Miracle Leaf nació en Medellín en 2021, con el propósito de contribuir en el cuidado de
              nuestro cuerpo a través de productos naturales a base de CBD.
            </p>
            <p class="content text-white text-center mb-12 sm:text-left sm:hidden lg:block">
              Con nuestros productos queremos transmitir y evidenciar los beneficios que tiene el Cannabis como uso medicinal.
              Actualmente hemos desarrollado 4 productos: dos con beneficios capilares como lo son nuestro shampoo y acondicionador,
              nuestras gotas de CBD y el ungüento corporal.
            </p>
          </div>
          <div id="stripe-right" class="basis-3/5">
            <img src="<?php bloginfo('template_directory') ?>/assets/cannabis-2FWNDyI0.webp" alt="Miracle Leaf" class="w-max" />
          </div>
        </div>
        <p class="px-10 max-w-7xl mx-auto content text-white text-justify hidden sm:block lg:hidden">
          Con nuestros productos queremos transmitir y 
          evidenciar los beneﬁcios que tiene el Cannabis como 
          uso medicinal. Actualmente hemos desarrollado 4 productos: 
          2 con beneﬁcios capilares como lo son nuestro 
          shampoo y acondicionador, nuestras gotas de CBD y 
          el ungüento corporal.
        </p>
      </section>
      <!-- END STRIPE -->

      <!-- BEGIN FAQS -->
      <section id="faqs" class="bg-brown text-white bg-[url('../../src/img/background-faqs-left.webp')] bg-contain bg-[position:left] bg-no-repeat pt-12 pb-16 sm:pt-20 lg:bg-[url('../../src/img/background-faqs-right.webp'),_url('../../src/img/background-faqs-left.webp')] lg:bg-[position:right,_left]">
        <div class="max-w-7xl mx-auto px-10 lg:px-32">
          <h2 class="text-center text-5xl mb-3">Preguntas y respuestas</h2>
          <div>
            <hr class="mx-auto mb-10 md:w-[80vw] lg:w-[40vw]" />
          </div>
          <h4 class="font-poppins font-bold mt-8 mb-4">¿Cómo funcionan los envíos?</h4>
          <p>
            Domicilios disponibles a nivel nacional. En la ciudad de Medellín y el Valle de Aburra contamos con el servicio de
            contra-entrega, en donde pagas tu pedido en el momento que el mensajero te entrega el pedido.
          </p>
          <p>
            En el resto de ciudades se debe realizar la transferencia a nuestra cuenta bancaria de Bancolombia o por medio de Nequi.
          </p>
          <h4 class="font-poppins font-bold mt-8 mb-4">¿Cuáles son sus opciones de pago?</h4>
          <p>
            Los medios de pago son:
            <ol class="list-decimal">
              <li>
                Cuenta de ahorros Bancolombia 508-643625-72<br/>
                Debe ser una transferencia, es decir, por medio de la aplicación movil de Bancolombia.
              </li>
              <li>
                Nequi 322-687-9513
              </li>
              <li>
                Servicio contra entrega. Valido solo para Medellín y el Valle de Aburrá.
              </li>
            </ol>
          </p>
        </div>
      </section>
      <!-- END FAQS -->

      <!-- BEGIN TESTIMONIALS -->
      <section id="testimonios">
        <div class="max-w-7xl mx-auto sm:w-[90%] lg:w-[50%]">
          <div class="splide">
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <div class="mt-10 px-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/testimonials-top-Mq-pRY3u.webp" class="w-max" alt="" />
                  </div>
                  <div class="px-3 text-white">
                    <!-- <div class="name uppercase text-center font-poppins bg-green-dark font-bold pt-4">
                      Nombre Persona
                    </div>
                    <div class="text-center bg-green-dark py-6">
                      <img src="data:image/webp;base64,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" class="w-1/2 mx-auto sm:w-1/3" alt="" />
                    </div> -->
                    <div class="message text-center text-base bg-green-dark px-5 sm:px-8 lg:px-12">
                      "Hace unos meses empecé a notar que mi cabello se estaba adelgazando, así que decidí probar el shampoo de Miracle Leaf Colombia para la caída del cabello.
                      Desde la primera vez que lo usé noté la diferencia: cabello se sentía más grueso y voluminoso. Después de usarlo durante unas semanas mi cabello comenzó
                      a creer en áreas donde antes había notado una disminución.<br/>
                      ¡Realmente estoy impresionado con los resultados!"
                    </div>
                    <div class="text-center bg-green-dark py-6">
                      <img src="<?php bloginfo('template_directory') ?>/assets/testimonials-01-ZsXyrSsG.webp" class="w-1/2 mx-auto" alt="" />
                    </div>
                  </div>
                  <div class="mx-auto px-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/testimonials-bottom-qEAoTaEP.webp" class="w-max" alt="" />
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="mt-10 px-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/testimonials-top-Mq-pRY3u.webp" class="w-max" alt="" />
                  </div>
                  <div class="px-3 text-white">
                    <!-- <div class="name uppercase text-center font-poppins bg-green-dark font-bold pt-4">
                      Nombre Persona
                    </div>
                    <div class="text-center bg-green-dark py-6">
                      <img src="data:image/webp;base64,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" class="w-1/2 mx-auto sm:w-1/3" alt="" />
                    </div> -->
                    <div class="message text-center text-base bg-green-dark px-5 sm:px-8 lg:px-12">
                      <br/><br/><br/>
                      “Súper bueno el shampoo, se me dejó de caer el cabello y se me quitó la caspa producida por la grasa.<br/>
                      Lo súper recomiendo”
                      <br/><br/><br/><br/>
                    </div>
                    <!-- <div class="text-center bg-green-dark py-6">
                      <img src="<?php bloginfo('template_directory') ?>/assets/testimonials-01-ZsXyrSsG.webp" class="w-1/2 mx-auto" alt="" />
                    </div> -->
                  </div>
                  <div class="mx-auto px-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/testimonials-bottom-qEAoTaEP.webp" class="w-max" alt="" />
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="mt-10 px-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/testimonials-top-Mq-pRY3u.webp" class="w-max" alt="" />
                  </div>
                  <div class="px-3 text-white">
                    <!-- <div class="name uppercase text-center font-poppins bg-green-dark font-bold pt-4">
                      Nombre Persona
                    </div>
                    <div class="text-center bg-green-dark py-6">
                      <img src="data:image/webp;base64,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" class="w-1/2 mx-auto sm:w-1/3" alt="" />
                    </div> -->
                    <div class="message text-center text-base bg-green-dark px-5 sm:px-8 lg:px-12">
                      <br/><br/><br/>
                      “Me ha crecido mucho el cabello, lo tengo brillante y suave.<br/>
                      La verdad me ha gustado mucho el producto y huele delicioso”.
                      <br/><br/><br/><br/>
                    </div>
                    <!-- <div class="text-center bg-green-dark py-6">
                      <img src="<?php bloginfo('template_directory') ?>/assets/testimonials-01-ZsXyrSsG.webp" class="w-1/2 mx-auto" alt="" />
                    </div> -->
                  </div>
                  <div class="mx-auto px-3">
                    <img src="<?php bloginfo('template_directory') ?>/assets/testimonials-bottom-qEAoTaEP.webp" class="w-max" alt="" />
                  </div>
                </li>
                <!-- <li class="splide__slide">Slide 02</li> -->
                <!-- <li class="splide__slide">Slide 03</li> -->
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- END TESTIMONIALS -->

      <!-- BEGIN CONTACT FORM -->
      <section id="contacto" class="py-12 sm:pt-20">
        <div class="max-w-7xl mx-auto px-10 lg:px-32">
          <h2 class="text-center text-5xl mb-3">Contáctanos</h2>
          <form class="mt-10">
            <input type="text" name="name" id="name" placeholder="Nombre y apellidos" class="my-2 w-full bg-beige h-14 px-3 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-brown focus:ring-opacity-50" />
            <input type="email" name="email" id="email" placeholder="Correo" class="my-2 w-full bg-beige h-14 px-3 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-brown focus:ring-opacity-50" />
            <input type="tel" name="cellphone" id="cellphone" placeholder="Celular" class="my-2 w-full bg-beige h-14 px-3 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-brown focus:ring-opacity-50" />
            <textarea placeholder="Mensaje" rows="10" class="py-3 my-2 w-full bg-beige px-3 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-brown focus:ring-opacity-50"></textarea>
            <button type="submit" class="btn-primary">Enviar</button>
          </form>
        </div>
      </section>
      <!-- END CONTACT FORM -->

    </main>
    <!-- END MAIN -->