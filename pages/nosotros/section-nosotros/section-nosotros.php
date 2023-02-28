<?php include_once("attributes.php") ?>

<section class="container flex flex-col gap-20">
  <p class="max-w-[600px] m-auto text-base md:text-lg  text-center">Somos una empresa peruana dedicada a la confección, elaboración y producción de carteras, bolsos, morrales y afines que distribuye productos únicos y de primera calidad. Garantizamos que nuestros productos sean seguros, duraderos y, lo más importante, que usted nunca se cansará de ellos.
    Tenemos más de 13 años produciendo productos para nuestros clientes y todos ellos satisfechos por la buena calidad de nuestro producto. Ofrecemos también productos al por mayor, de tal manea que si eres emprendedor y deseas adquirir nuestros productos a un menor precio para hacer negocio estas en la página indicada, comunícate con nosotros para nuestras tarifas reducidas.</p>

  <div class="lg:grid grid-cols-[repeat(auto-fit,_minmax(200px,_1fr))] gap-7 hidden ">
    <?php foreach ($data as $datas) : ?>
      <div class="flex w-full flex-col items-center border-4 gap-5 border-primary-100 p-7 rounded-2xl">
        <img class="block w-28 h-24" src="<?php echo $datas["icono"] ?>" alt="">
        <div>
          <h3 class="font-bold text-base text-center"><?php echo $datas["subtitle"] ?></h3>
          <p class="text-center"><?php echo $datas["description"] ?></p>
        </div>
      </div>
    <?php endforeach ?>
  </div>


  <div class="swiper swiper__cardsomos">
    <div class="swiper-wrapper">
      <?php foreach ($data as $datas) : ?>
        <div class="swiper-slide">
          <div class="flex w-full justify-center md:justify-start flex-col items-center h-[300px] max-w-[250px]  gap-5  border-4 border-primary-100 rounded-2xl p-7 ">
            <img class=" w-28 h-24 " src="<?php echo $datas["icono"] ?>" alt="">
            <div>
              <h3 class="font-bold text-base text-center"><?php echo $datas["subtitle"] ?></h3>
              <p class="text-center "><?php echo $datas["description"] ?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>