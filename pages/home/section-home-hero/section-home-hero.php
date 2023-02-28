
<section class="relative py-10 md:py-[13rem]">
  <div class="container flex flex-col gap-7">
    <h1 class="h1 text-primary-300"> <span class="text-primary-100">Atendemos</span> pedidos <br>
      a nivel nacional</h1>
    <p class="text-[#AAA6A6] font-cardo text-lg md:text-xl max-w-[25rem]">Somos tu mejor elección y aliado estratégico, que vamos a dar soluciones en buen
      nivel. Somos un soporte integral para nuestros clientes.</p>
    <div class="relative w-fit">
      <button class="btn btn--primary">Entrar al catálogo</button>
      <!-- flecha mobile -->
      <figure class="w-[8rem] absolute -bottom-3 translate-y-[100%] lg:hidden">
        <img src="<?php echo constant('HOST') . '/img/svg/flecha-mobile.svg'; ?>" alt="">
      </figure>
      <!-- flecha desktop -->
      <figure class="hidden lg:block w-[20rem] absolute bottom-0 translate-y-[100%] lg:translate-x-[75%] 2xl:translate-x-[95%] 2xl:w-[35rem] right-0">
        <img src="<?php echo constant('HOST') . '/img/svg/flecha-desktop.svg'; ?>">
      </figure>
    </div>
    <!-- Imagen grande Mobile -->
    <figure class="mr-[-1rem] flex justify-end lg:hidden">
      <img loading="lazy" class="w-[70%]" src="https://i.postimg.cc/XJq2VBLF/Group-18-1.png" alt="morrales">
    </figure>
  </div>
  <!-- Imagen grande Desktop -->
  <figure class="hidden lg:block absolute right-0 bottom-0 w-[560px] xl:w-[650px] 2xl:w-[950px] 2xl:h-[740px] 2xl:top-0 2xl:pt-[70px]">
    <img loading="lazy" class="object-contain" src="https://i.postimg.cc/zBLntsqZ/Group-20.png" alt="morrales">
    <div class="hidden 2xl:block bg-primary-100 h-[593px] w-[50%] absolute top-[70px] right-0 z-[-1]"></div>
  </figure>
  <?php include_once(__DIR__."../../../../components/redes-sociales.php"); 
  ?>
 
</section>