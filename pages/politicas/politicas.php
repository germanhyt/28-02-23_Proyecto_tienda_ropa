<!DOCTYPE html>
<html lang="es">
<head>
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>
</head>

<body>
  <?php include_once(__DIR__ . "/../../components/nav.php");
  include_once(__DIR__ . "/../../components/btnWhatsapp.php");

  include_once(__DIR__ . "/../../components/banner.php");
  // Renderizado Banner
  echo banner("Política de reembolso", "https://i.postimg.cc/3xVY6Lmn/tecleando-mobile.png", "https://i.postimg.cc/fRJM84tV/tecleando-desktop.png", "imagen de política");

  include_once("section-politica/section-politica.php");

  include_once(__DIR__ . "/../../components/footer.php"); ?>
</body>

</html>