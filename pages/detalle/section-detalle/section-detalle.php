<section class="section-detalle max-w-[1440px] mx-auto">
  <div class="mb-12 section-detalle__flex-group lg:mb-16">
    <div class="section-detalle__containt-img">
      <div class="xzoom-container">
        <?php foreach ($imagenes as $image) : ?>
          <a href="<?php echo constant('HOST').$image["thumbs"][0]["desktop"] ?>" data-fancybox="gallery">
            <img class="xzoom" id="main_image" src="<?php echo constant('HOST').$image["principal"]["desktop"] ?>" xoriginal="<?php echo $image["principal"]["desktop"] ?>" alt="<?php echo $image["principal"]["alt"] ?>">
          </a>
          <div class="gallery xzoom-thumbs">
            <?php foreach ($image["thumbs"] as $thumb) : ?>
              <a href="<?php echo $thumb["desktop"] ?>" data-fancybox="gallery">
                <img class="xzoom-gallery" width="80" src="<?php echo constant('HOST').$thumb["imgmobile"] ?>" xpreview="<?php echo $thumb["desktop"] ?>" class="" alt="<?php echo $thumb["alt"] ?>">
              </a>
            <?php endforeach ?>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <div class="section-detalle__containt-card">
      <div class="section-detalle__card">
        <h2 class="section-detalle__tittle">
          Morral <span id="morral"><?php echo $title; ?></span>
        </h2>
        <p class="section-detalle__p"><?php echo $des; ?>
        </p>
        <div class="flex gap-2 text-white lg:my-2">
          <p>Precio:</p>
          <span class="text-[#FFFBF4]">S./ <span id="precio"><?php echo $precio; ?></span></span>
        </div>
        <div class="section-detalle__des md:my-5 lg:my-0">
          <span class="block text-white lg:hidden">Cantidad</span>
        </div>
        <hr />
        <span class="hidden text-white lg:block md:my-4 lg:my-2">Cantidad</span>
        <div class="section-detalle__containt-button">
          <a class="section-detalle__mas-menos restar">-</a>
          <span class="section-detalle__number">1</span>
          <a class="section-detalle__mas-menos sumar">+</a>
        </div>
        <form class="mt-4 section-detalle__form" id="form-detalle">
          <div class="mb-4">
            <label class="block mb-2" for="colores">Colores:</label>
            <select name="colores" id="colores">
              <?php foreach ($colores as $color) : ?>
                <option value="<?php echo $color["value"] ?>"><?php echo $color["value"] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="mb-4">
            <label class="block mb-2" for="nombres">Nombre y Apellido:</label>
            <input type="text" name="nombres" id="nombres" placeholder="Ingresa tu nombre" required>
          </div>

          <div class="mb-4">
            <label class="block mb-2" for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" placeholder="Ingresa tu correo">
          </div>
          <button type="submit" class="section-detalle__submit">Comprar ahora</button>
        </form>

        <span class="py-6 text-sm text-white">*Delivery dependiendo de la zona de acuerdo al distrito.</span>
      </div>

    </div>
  </div>

  <!-- sección especificaciones -->
  <div class="container">
    <div class="section-detalle__cont-specif">
      <h2 class="section-detalle__specif-title ">Especificaciones</h2>
      <div class="section-detalle__title-table">
        <div class="section-detalle__cont-text">

          <ul class="section-detalle__cont-list">
            <?php foreach ($especificaciones as $data) : ?>
              <li>
                <?php echo $data["especificacion"] ?>
              </li>

            <?php endforeach ?>

          </ul>
        </div>
        <div class="section-detalle__cont-table">
          <?php foreach ($tabla as $fila) : ?>
            <div class="section-detalle__rowtable section-detalle__rowtable--1">
              <?php if ($fila["titulo"] === "Colores") { ?>
                <p><?php echo $fila["titulo"] ?></p>
                <div class="flex gap-4">
                  <?php foreach ($fila["valor"] as $color) : ?>
                    <div class="section-detalle__circle-color rounded-full <?php echo $color["color"] ?>"></div>
                  <?php endforeach ?>
                </div>
              <?php } else { ?>
                <p><?php echo $fila["titulo"] ?></p>
                <p><?php echo $fila["valor"] ?></p>
              <?php } ?>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</section>