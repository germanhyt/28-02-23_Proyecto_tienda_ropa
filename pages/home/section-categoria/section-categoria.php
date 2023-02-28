<?php
include_once("attributes.php")
?>
<section class="section-categoria">
  <div class="text-center">
    <h2 class="h2">Buscar por Modelos</h2>
  </div>
  <!-- Botones Filtro -->
  <div class="filtro">
    <button class="filtro__btn active" data-filter="all">
      Todos
    </button>
    <button class="filtro__btn" data-filter=".carol">
      Carol
    </button>
    <button class="filtro__btn" data-filter=".franco">
      Franco
    </button>
    <button class="filtro__btn" data-filter=".rosalia">
      Rosalía
    </button>
    <button class="filtro__btn" data-filter=".sofia">
      Sofía
    </button>
    <button class="filtro__btn" data-filter=".carlos">
      Carlos
    </button>
    <button class="filtro__btn" data-filter=".calavera">
      Calavera
    </button>
  </div>
  <!-- Productos -->
  <div class="productos">
    <?php foreach ($productos as $data) { ?>

      <div class="productos__card mix <?php echo $data["categoria"]; ?>">
        <figure>
          <img class="rounded-2xl" src="<?php echo constant('HOST').$data["img"]; ?>" alt="<?php echo $data["title"]; ?>">
        </figure>
        <div class="productos__body">
          <h3 class="h3"><?php echo $data["title"]; ?></h3>
          <p class="productos__price">
            <span class="text-[#ABA6A6]">Precio:</span>
            S/<?php echo $data["precio"] ?>
          </p>
          <a href="<?php echo constant('HOST').$data["link"] ?>" class="btn btn--p-to-ghost">Ver detalles</a>
        </div>
      </div>

    <?php } ?>


  </div>
</section>