<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Swiper -->
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>
</head>

<body>
  <?php
  include_once(__DIR__ . "/../../components/nav.php");
  ?>

  <main>
    <?php

    include_once(__DIR__ . "/../../components/btnWhatsapp.php");
    ?>

    <?php include_once(__DIR__ . "/../../components/banner.php");
    // Renderizado Banner
    echo banner("¿Quiénes somos?", "https://i.postimg.cc/7ZTdcKKP/mobile.png", "https://i.postimg.cc/9MLPjZMJ/carol-5-colores-4.png", "imagen de morrales"); ?>

    <?php include_once("section-nosotros/section-nosotros.php"); ?>

    <?php include_once(__DIR__ . "/../../components/slider-ofertas.php"); ?>

  </main>

  <?php include_once(__DIR__ . "/../../components/footer.php"); ?>

  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/slider.js"></script>
</body>


</html>