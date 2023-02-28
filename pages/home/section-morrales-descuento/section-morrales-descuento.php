<?php

$showcase = [
  "title" => "Morrales",
  "images" => [
    "mobile" => "/img/morral.png",
    "desktop" => "/img/morral.png",
    "alt" => "Imagen de morral",
  ],
  "descuento" => 60,
  "info" => "Productos seleccionados"
];

$en_descuento = [
  [
    "title" => "Morrales",
    "images" => [
      "mobile" => "/img/morral.png",
      "desktop" => "/img/morral.png",
      "alt" => "Imagen de morral",
    ],
    "descuento" => 30,
    "info" => "Productos seleccionados"
  ],
  [
    "title" => "Morrales",
    "images" => [
      "mobile" => "/img/morral.png",
      "desktop" => "/img/morral.png",
      "alt" => "Imagen de morral",
    ],
    "descuento" => 40,
    "info" => "Productos seleccionados"
  ],
];

?>

<section class="section-morrales-descuento">
  <h2 class="h2 section-morrales-descuento__title">Morrales en descuentos</h2>

  <div class="section-morrales-descuento__grid">

    <div class="section-morrales-descuento__card-showcase">
      <picture class="section-morrales-descuento__picture">
        <source media="(min-width: 768px)" srcset="<?php echo constant('HOST').$showcase["images"]["desktop"] ?>">
        <img src="<?php echo constant('HOST').$showcase["images"]["mobile"] ?>" alt="<?php echo $showcase["images"]["alt"] ?>" class="">
      </picture>
      <div class="section-morrales-descuento__body">
        <h4 class="section-morrales-descuento__body-title"><?php echo $showcase["title"] ?></h4>
        <span class="section-morrales-descuento__body-discount"><?php echo $showcase["descuento"] ?> %DCTO</span>
        <span class="section-morrales-descuento__body-info"><?php echo $showcase["info"] ?></span>
      </div>
    </div>

    <div class="md:px-12 lg:px-16 xl:px-10 swiper section-morrales-descuento__swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach ($en_descuento as $descuento) : ?>
          <div class="swiper-slide">
            <div class="section-morrales-descuento__card">
              <picture class="section-morrales-descuento__picture">
                <source media="(min-width: 768px)" srcset="<?php echo constant('HOST').$descuento["images"]["desktop"] ?>">
                <img src="<?php echo $descuento["images"]["mobile"] ?>" alt="<?php echo $descuento["images"]["alt"] ?>" class="">
              </picture>
              <div class="section-morrales-descuento__body">
                <h4 class="section-morrales-descuento__body-title"><?php echo $descuento["title"] ?></h4>
                <span class="section-morrales-descuento__body-discount"><?php echo $descuento["descuento"] ?> %DCTO</span>
                <span class="section-morrales-descuento__body-info"><?php echo $descuento["info"] ?></span>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev">
        <i class="fa-solid fa-arrow-left"></i>
      </div>
      <div class="swiper-button-next">
        <i class="fa-solid fa-arrow-right"></i>
      </div>
    </div>

  </div>

</section>