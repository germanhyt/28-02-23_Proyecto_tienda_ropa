<?php
$modelo = $_GET("id");
include("/pages/detalle/section-detalle/attribute.php");
echo $title[0];
function detalles($title, $des, $precio, $des1,$des2,$des3, $des4, $des5, $des6, $modelo, $material, $mInterno, $tamaño, $peso ): void
{ ?>
  <section class="section-detalle max-w-[1440px] mx-auto">
    <div class="mb-12 section-detalle__flex-group lg:mb-64">
      <div class="section-detalle__containt-img">
        <div class="xzoom-container">
          <a href="https://i.postimg.cc/28f9m2Cs/detalles-sumacc.png" data-fancybox="gallery">
            <img class="xzoom" id="main_image" src="https://i.postimg.cc/28f9m2Cs/detalles-sumacc.png" xoriginal="https://i.postimg.cc/28f9m2Cs/detalles-sumacc.png">
          </a>
          <div class="gallery xzoom-thumbs">
            <a href="https://i.postimg.cc/28f9m2Cs/detalles-sumacc.png" data-fancybox="gallery">
              <img class="xzoom-gallery" width="80" src="https://i.postimg.cc/28f9m2Cs/detalles-sumacc.png" xpreview="https://i.postimg.cc/28f9m2Cs/detalles-sumacc.png" class="">
            </a>
            <a href="https://i.postimg.cc/28f9m2Cs/detalles-sumacc.png" data-fancybox="gallery">
              <img class="xzoom-gallery" width="80" src="https://i.postimg.cc/28f9m2Cs/detalles-sumacc.png" class="">
            </a>
            <a href="https://i.postimg.cc/28f9m2Cs/detalles-sumacc.png" data-fancybox="gallery">
              <img class="xzoom-gallery" width="80" src="https://i.postimg.cc/28f9m2Cs/detalles-sumacc.png" class="">
            </a>           
          </div>
        </div>

      </div>
      <div class="section-detalle__containt-card">

        <div class="section-detalle__card">
          <h2 class="section-detalle__tittle"><?php echo $title ?></h2>
          <p class="section-detalle__p"><?php echo $des?>
          </p>
          <div class="section-detalle__des md:my-5">
            <span class="block text-white lg:hidden">Cantidad</span>
            <span class="text-[#FFFBF4]"><?php echo $precio ?></span>
          </div>
          <hr />
          <span class="hidden text-white lg:block md:my-4">Cantidad</span>
          <div class="section-detalle__containt-button">
            <a class="section-detalle__mas-menos">-</a>
            <span class="section-detalle__number">1</span>
            <a class="section-detalle__mas-menos">+</a>

          </div>
          <a class="section-detalle__agregar">Comprar ahora</a>
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
              <li>
                <?php echo $des1 ?>
              </li>
              <li>
                <?php echo $des2 ?>
              </li>
              <li>
                <?php echo $des3 ?>
              </li>
              <li>
                <?php echo $des4 ?>
              </li>
              <li>
                <?php echo $des5 ?>
              </li>
              <li>
                <?php echo $des6 ?>
              </li>
            </ul>
          </div>
          <div class="section-detalle__cont-table">
            <div class="section-detalle__rowtable section-detalle__rowtable--1">
              <p>Modelo</p>
              <p><?php echo $modelo ?></p>
            </div>
            <div class="section-detalle__rowtable section-detalle__rowtable--2">
              <p>Material</p>
              <p><?php echo $material ?></p>
            </div>
            <div class="section-detalle__rowtable section-detalle__rowtable--1">
              <p>Material interno:
              </p>
              <p><?php echo $mInterno ?></p>
            </div>
            <div class="section-detalle__rowtable section-detalle__rowtable--2">
              <p>Tamaño:</p>
              <p><?php $tamaño ?></p>
            </div>
            <div class="section-detalle__rowtable section-detalle__rowtable--1">
              <p>Peso:</p>
              <p><?php echo $peso ?></p>
            </div>
            <div class="section-detalle__rowtable section-detalle__rowtable--2">
              <p>Colores</p>
              <div class="section-detalle__cont-color">
                <div class="bg-black rounded-full section-detalle__circle-color"></div>
                <div class="section-detalle__circle-color bg-[#D8BCAB] rounded-full"></div>
                <div class="section-detalle__circle-color bg-[#F4A9AF] rounded-full"></div>
                <div class="section-detalle__circle-color bg-[#D9D9D9] rounded-full"></div>
                <div class="bg-white border-2 rounded-full section-detalle__circle-color"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>