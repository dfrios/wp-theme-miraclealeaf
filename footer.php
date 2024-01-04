<?php
/**
 * @package MiracleLeafPosts
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header();


?>

    <!-- BEGIN FOOTER -->
    <footer class="text-center my-12">
      <div id="social" class="flex flex-row justify-center gap-x-5 lg:gap-x-7">
        <div>
          <a href="https://www.facebook.com/profile.php?id=100083318823402" target="_blank">
            <img src="data:image/webp;base64,UklGRuYDAABXRUJQVlA4WAoAAAAwAAAAHwAAOwAASUNDUKACAAAAAAKgbGNtcwRAAABtbnRyUkdCIFhZWiAH5wAMABMAAAAUACFhY3NwQVBQTAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9tYAAQAAAADTLWxjbXMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA1kZXNjAAABIAAAAEBjcHJ0AAABYAAAADZ3dHB0AAABmAAAABRjaGFkAAABrAAAACxyWFlaAAAB2AAAABRiWFlaAAAB7AAAABRnWFlaAAACAAAAABRyVFJDAAACFAAAACBnVFJDAAACFAAAACBiVFJDAAACFAAAACBjaHJtAAACNAAAACRkbW5kAAACWAAAACRkbWRkAAACfAAAACRtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACQAAAAcAEcASQBNAFAAIABiAHUAaQBsAHQALQBpAG4AIABzAFIARwBCbWx1YwAAAAAAAAABAAAADGVuVVMAAAAaAAAAHABQAHUAYgBsAGkAYwAgAEQAbwBtAGEAaQBuAABYWVogAAAAAAAA9tYAAQAAAADTLXNmMzIAAAAAAAEMQgAABd7///MlAAAHkwAA/ZD///uh///9ogAAA9wAAMBuWFlaIAAAAAAAAG+gAAA49QAAA5BYWVogAAAAAAAAJJ8AAA+EAAC2xFhZWiAAAAAAAABilwAAt4cAABjZcGFyYQAAAAAAAwAAAAJmZgAA8qcAAA1ZAAAT0AAACltjaHJtAAAAAAADAAAAAKPXAABUfAAATM0AAJmaAAAmZwAAD1xtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAEcASQBNAFBtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJBTFBItgAAAA2Asm3b+ef+2+a8pmZ7vw/xr2Nb9tatjLpuxX0J27YXX/yeGSUiJgDy+uzy0iif/+H27vJga3NLyhhpAtNit7mjEhITZNJGQRupB21hHWjjBkDcD+LUJKpKUCtST/cSvhixxY7pS0imQ3isHfJ+ob0GEI1ATY/QgipaoSNVxF/JvpQKb10oz8bbmueJDyXwBkG9SLZE9XxAtQLqJbJFsqV3t4wOXmGByPAp6wlo5CmKSO8x618kVlA4IGIAAACwAwCdASogADwAPikQhkKhoQ36AAwBQlpAMcwRJGKnSj8763/EAAD+yvf//dWD+GpXAe4RxHCFqT77AAheg4TR82N/9G7XXMdFv6+Ofl9XpRnrD/+lFNNQ///PyLnYpZ6AAA==" class="h-8 lg:h-10" alt="Facebook" />
          </a>
        </div>
        <div>
          <a href="https://www.instagram.com/ml_colombia" target="_blank">
            <img src="data:image/webp;base64,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" class="h-8 lg:h-10" alt="Instagram" />
          </a>
        </div>
        <!-- <div>
          <img src="data:image/webp;base64,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" class="h-8 lg:h-10" alt="WhatsApp" />
        </div> -->
      </div>
      <div id="copyright" class="mt-4">©2023 Miracle Leaf</div>
      <div id="other">
        <a href="#!" id="a-return-policies" data-id="return-policy-modal" class="underline decoration-dotted">Política de reembolso y garantía</a><br/>
        <a href="#!" id="a-shipping-policies" data-id="shipping-policy-modal" class="underline decoration-dotted">Política de envío</a>
      </div>
    </footer>
    <!-- END FOOTER -->


    <!-- BEGIN RETURN POLICIES POPUP -->
    <div id="return-policy-modal" class="modal top-[-97vh] sm:top-[-87vh]" role="dialog" tabindex="-1">
      <div class="modal-inner bg-white bg-[url('../../src/img/background.webp')] bg-[length:50%]">
        <img src="<?php bloginfo('template_directory') ?>/assets/return-popup-corner-VyFc9gaP.webp" alt="" class="absolute w-24 ml-[calc(-1rem-2px)] mt-[calc(-1rem-2px)]" />
        <div class="modal-border bg-beige p-4">
          <div class="modal-header">
            <h3 class="mx-auto text-center text-2xl mb-3 mt-14">Política de reembolso y garantía</h3>
            <button class="modal-close" data-id="return-policy-modal" aria-label="Close">
              &times;
            </button>
          </div>
          <p class="text-sm">
            En el caso de productos que sean mercancías irrevocables no-tangibles, no realizamos reembolsos después de que se
            envíe el producto, usted tiene la responsabilidad de entender antes de comprarlo. Le pedimos que lea
            cuidadosamente antes de realizar su compra. Hacemos solamente excepciones con esta regla cuando la descripción
            no se ajusta al producto. Hay algunos productos que pudieran tener garantía y posibilidad de reembolso pero este
            será especiﬁcado al comprar el producto. En tales casos la garantía sólo cubrirá fallas de fábrica y sólo se hará efectiva
            cuando el producto se haya usado correctamente. La garantía no cubre averías o daños ocasionados por uso indebido.
            Los términos de la garantía están asociados a fallas de fabricación y funcionamiento en condiciones normales de los
            productos y sólo se harán efectivos estos términos si el equipo ha sido usado correctamente. Esto incluye: • De
            acuerdo a las especiﬁcaciones técnicas indicadas para cada producto. • En condiciones ambientales acorde con las
            especiﬁcaciones indicadas por el fabricante. • En uso especíﬁco para la función con que fue diseñado de fábrica. • En
            condiciones de operación eléctrica acorde con las especiﬁcaciones y tolerancias indicadas.
          </p>
        </div>
      </div>
    </div>
    <!-- END RETURN POLICIES POPUP -->

    <!-- BEGIN SHIPPING POLICIES POPUP -->
    <div id="shipping-policy-modal" class="modal top-[-97vh] sm:top-[-87vh]" role="dialog" tabindex="-1">
      <div class="modal-inner bg-white bg-[url('../../src/img/background.webp')] bg-[length:50%]">
        <img src="<?php bloginfo('template_directory') ?>/assets/return-popup-corner-VyFc9gaP.webp" alt="" class="absolute w-24 ml-[calc(-1rem-2px)] mt-[calc(-1rem-2px)]" />
        <div class="modal-border bg-beige p-4">
          <div class="modal-header">
            <h3 class="mx-auto text-center text-2xl mb-3 mt-14">Política de envío</h3>
            <button class="modal-close-shipping" data-id="shipping-policy-modal" aria-label="Close">
              &times;
            </button>
          </div>
          <p class="text-sm">
            Los envíos se realizan desde la ciudad de Medellín: fuera de la ciudad deben ser pagados antes de ser procesados.
            Medellín y sus alrededores tienen la opción de elegir pago contra-entrega, cancelando su compra en el momento que
            el mensajero entrega el pedido.
          </p>
        </div>
      </div>
    </div>
    <!-- END SHIPPING POLICIES POPUP -->

    <?php wp_footer(); ?>

    <!-- <script crossorigin src="<?php bloginfo('template_directory') ?>/assets/flickity.pkgd.min.js"></script> -->
    <!-- <script crossorigin src="<?php bloginfo('template_directory') ?>/assets/splide.min.js"></script> -->
    <script crossorigin src="<?php bloginfo('template_directory') ?>/assets/custom.js"></script>
  </body>
</html>
