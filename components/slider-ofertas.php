<?php

$ofertas = [
  [
    "title" => "Modelo Carol, gris ",
    "images" => [
      "mobile" => "https://i.postimg.cc/KvsPGg2p/modelo-carol-gris.png",
      "desktop" => "https://i.postimg.cc/KvsPGg2p/modelo-carol-gris.png",
      "alt" => "carol gris",
    ],
    "link" => "Carol",
    "precio" => 89,
  ],
  [
    "title" => "Modelo Sofía, blanco",
    "images" => [
      "mobile" => "https://i.postimg.cc/ZqzVmyPt/modelo-sofia-blanco.png",
      "desktop" => "https://i.postimg.cc/ZqzVmyPt/modelo-sofia-blanco.png",
      "alt" => "sofia-blanco",
    ],
    "link" => "Sofia",
    "precio" => 90,
  ],
  [
    "title" => "Modelo Franco, marrón",
    "images" => [
      "mobile" => "https://i.postimg.cc/vZ0fqgPt/modelo-franco-marron.png",
      "desktop" => "https://i.postimg.cc/vZ0fqgPt/modelo-franco-marron.png",
      "alt" => "franco-marron",
    ],
    "link" => "Franco",
    "precio" => 66,
  ],
]

?>

<section class="slider-ofertas">
  <h2 class="h2 slider-ofertas__title">Ofertas que no te puedes perder</h2>

  <div class="md:px-12 lg:px-16 swiper slider-ofertas__swiper">
    <div class="swiper-wrapper">
      <?php foreach ($ofertas as $oferta) : ?>
        <div class="swiper-slide">
          <div class="slider-ofertas__card">
            <picture class="slider-ofertas__picture">
              <source media="(min-width: 768px)" srcset="<?php echo $oferta["images"]["desktop"]; ?>">
              <img src="<?php echo $oferta["images"]["mobile"]; ?>" alt="<?php echo $oferta["images"]["alt"]; ?>" class="">
            </picture>
            <div class="slider-ofertas__body">
              <h3 class="h3"><?php echo $oferta["title"]; ?></h3>
              <span class="slider-ofertas__body-price">Precio: <b>S/<?php echo $oferta["precio"]; ?></b></span>
              <a href="<?php echo constant('HOST'); ?>/detalle.php?modelo=<?php echo $oferta["link"]; ?>" class="btn btn--p-to-ghost">Ver detalles</a>
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
</section>


