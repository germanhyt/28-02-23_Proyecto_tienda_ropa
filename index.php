<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once("components/head.php"); ?>
  <!-- Swiper -->

</head>

<body>
  <?php
  include_once(__DIR__ . "/config/config.php");

  // Header
  include_once("components/nav.php");
  include_once("components/btnWhatsapp.php");

  // Section home
  include_once("pages/home/home.php");

  // Footer
  include_once("components/footer.php"); ?>



  <script src="./js/mixitup.min.js"></script>
  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/slider.js"></script>
  <script>
    /*=========== MIXITUP FILTER ================*/

    const filtroActive = document.querySelectorAll(".filtro__btn")

    function activeBtn() {
      filtroActive.forEach((l) => {
        l.classList.remove("active")
      })

      this.classList.add("active")
    }

    filtroActive.forEach((l) => {
      l.addEventListener("click", activeBtn)
    })

    let mixerPorfolio = mixitup(".productos", {
      selectors: {
        target: ".productos__card",
      },
      animation: {
        duration: 300,
      },
    });
  </script>
</body>

</html>