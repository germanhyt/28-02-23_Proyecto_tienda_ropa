<?php
include_once(__DIR__ . "/../../components/nav-attributes/attributes.php");

if (isset($_GET["modelo"])) {
  $title = $_GET["modelo"];
  foreach ($data as $key => $info) {
    if ($info["link"] === $title) {
      $des = $info["des"];
      $precio = $info["precio"];
      $especificaciones = $info["especificaciones"];
      $imagenes = $info["imagenes"];
      $colores = $info["colores"];
      $tabla = $info["tabla"];
    }
  }
} else {
  header('Location: //www.sumacc.com/');
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>

  <!-- Swiper -->
  <link rel="stylesheet" href="/css/swiper-bundle.css">

  <!-- XZoom -->
  <link rel="stylesheet" href="/css/xzoom.min.css">
  <link rel="stylesheet" href="/css/fancybox.css">
  <link rel="stylesheet" href="/css/sweetalert2.min.css" />
</head>

<body>
  <?php
  include_once(__DIR__ . "/../../components/nav.php");
  include_once(__DIR__ . "/../../components/btnWhatsapp.php");

  include_once("section-detalle/section-detalle.php");

  include_once(__DIR__ . "/../../components/footer.php"); ?>

  <script src="/js/xzoom.min.js"></script>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/fancybox.umd.js"></script>
  <script src="/js/sweetalert2.min.js"></script>
  <script src="/js/contacto.js"></script>

  <script>
    $(".xzoom, .xzoom-gallery").xzoom({
      zoomWidth: 400,
      zoomHeight: 400,
      tint: '#333',
    });
  </script>
</body>

</html>