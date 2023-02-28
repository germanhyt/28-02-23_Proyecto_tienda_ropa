<?php
$pasos = [
  [
    "title" => "Buscar tu producto de preferencia",
    "description" => "Escoge el morral favorito por modelos o en descuentos, y presiona ver detalles, para obtener más información del producto.",
    "images" => [
      "mobile" => "https://i.postimg.cc/bvBrC2Xb/paso-enviar-datos.png",
      "desktop" => "https://i.postimg.cc/bvBrC2Xb/paso-enviar-datos.png",
      "alt" => "alt",
    ],
  ],
  [
    "title" => "Presionar el botón de comprar ahora",
    "description" => "Luego de escoger tu producto, y ver la información de este, presionar el botón comprar.",
    "images" => [
      "mobile" => "https://i.postimg.cc/Xqv5G00c/pasos-comprar.png",
      "desktop" => "https://i.postimg.cc/Xqv5G00c/pasos-comprar.png",
      "alt" => "alt",
    ],
  ],
  [
    "title" => "Enviar la información del producto",
    "description" => "Finalmente, al presionar el botón se redirigirá al whatssap de la empresa y para poder completar la compra del producto.",
    "images" => [
      "mobile" => "https://i.postimg.cc/bvBrC2Xb/paso-enviar-datos.png",
      "desktop" => "https://i.postimg.cc/bvBrC2Xb/paso-enviar-datos.png",
      "alt" => "alt",
    ],
  ],
]

?>

<section class="section-pasos">
  <h2 class="h2 section-pasos__title">Pasos a realizar la compra</h2>

  <div class=" section-pasos__cards">
    <?php foreach ($pasos as $paso) : ?>
      <div class="section-pasos__card">
        <picture class="section-pasos__picture">
          <source media="(min-width: 768px)" srcset="<?php echo $paso["images"]["desktop"]; ?>">
          <img src="<?php echo $paso["images"]["mobile"]; ?>" alt="<?php echo $paso["images"]["alt"]; ?>" class="section-pasos__img">
        </picture>

        <div class="section-pasos__card-content">
          <h3 class="section-pasos__card-title h3"><?php echo $paso["title"]; ?></h3>
          <p class="section-pasos__card-text"><?php echo $paso["description"]; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class=" section-pasos__swiper swiper">
    <div class="swiper-wrapper">
      <?php foreach ($pasos as $paso) : ?>
        <div class="swiper-slide">
          <div class="section-pasos__card">
            <picture class="section-pasos__picture">
              <source media="(min-width: 768px)" srcset="<?php echo $paso["images"]["desktop"]; ?>">
              <img src="<?php echo $paso["images"]["mobile"]; ?>" alt="<?php echo $paso["images"]["alt"]; ?>" class="section-pasos__img">
            </picture>

            <div class="section-pasos__card-content">
              <h3 class="section-pasos__card-title h3"><?php echo $paso["title"]; ?></h3>
              <p class="section-pasos__card-text"><?php echo $paso["description"]; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>


</section>