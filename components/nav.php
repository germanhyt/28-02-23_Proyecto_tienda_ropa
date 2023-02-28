<?php


include_once(__DIR__ . "/nav-attributes/attributes.php");
?>
<header class="sticky top-0 z-20 bg-white">
  <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
  <nav class="nav--main">
    <ul class="nav__list--main">
      <li class="nav__logo">
        <a href="<?php echo constant('HOST') . '/'; ?>" class="block">
          <img src="<?php echo constant('HOST') . '/img/logo.png'; ?>" loading="lazy" alt="SUMACC">
        </a>
      </li>
      <li class="nav__menu">
        <a href="<?php echo constant('HOST') . '/'; ?>" class="flex items-center gap-2 font-semibold <?= ($activePage == 'index') ? 'active' : 'text-primary-100'; ?> hover:text-primary-100">
          Inicio
        </a>
        <a href="<?php echo constant('HOST') . '/nosotros.php' ?>" class="flex items-center gap-2 font-semibold <?= ($activePage == 'nosotros') ? 'active' : 'text-primary-100'; ?> hover:text-primary-100">
          Nosotros
        </a>
        <ul id="menu-btn">
          <li class="relative">
            <a class="flex items-center gap-2 font-semibold outline-none cursor-pointer <?= ($activePage == 'detalle') ? 'active' : 'text-primary-100'; ?> hover:text-primary-100">
              Morrales
              <div id="dropdown" class="absolute left-0 hidden rounded-md bg-primary-100 ">
                <ul class="flex flex-col gap-3 p-3 text-white w-44">
                  <?php foreach ($data as $link) : ?>
                    <li><a class="p-2" href="<?php echo constant('HOST'); ?>/detalle.php?modelo=<?php echo $link["link"] ?>"><?php echo $link["titulo"] ?></a></li>
                  <?php endforeach ?>
                </ul>
              </div>
            </a>
          </li>
        </ul>
      </li>
      <!-- catálogo -->
      <li class="col-[3] row-[1] md:col-[4]">
        <button class="px-6 py-1 text-base text-white bg-primary-100 rounded-xl">
          <span class="btn__span btn__span--catalogo-desktop">Descargar Catálogo</span>
          <span class="btn__span btn__span--catalogo-mobile">Catálogo</span>
        </button>
      </li>
    </ul>
  </nav>
  <hr>
</header>

<script>
  const menuBtn = document.querySelector('#menu-btn')
  const dropdown = document.querySelector('#dropdown')

  menuBtn.addEventListener('click', () => {

    dropdown.classList.toggle('hidden')
    dropdown.classList.toggle('flex')
  })
</script>