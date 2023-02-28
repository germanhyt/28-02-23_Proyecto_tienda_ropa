<section class="container">
  <div class="flex flex-col lg:flex lg:flex-grow">
    <div>
      <form action="" method="POST" class="section-contacto__formulario">
        <div class=" section-contacto__form-group">
          <label for="nombre" class="section-contacto__sub">Nombre</label>
          <input id="nombre" class="section-contacto__input" placeholder="Juan Perez" type="text" />
        </div>
        <div class=" section-contacto__form-group">
          <label for="apellido" class="section-contacto__sub">Apellidos</label>
          <input id="apellido" class="section-contacto__input" placeholder="Dominc Flores" type="text" />
        </div>
        <div class="section-contacto__form-group">
          <label for="numero" class="section-contacto__sub">Correo Electrónico</label>
          <input id="numero" class="section-contacto__input" placeholder="example@gmail.com" type="email" />
        </div>
        <div class="section-contacto__form-group">
          <label for="numero" class="section-contacto__sub">Número de teléfono</label>
          <input id="numero" class="section-contacto__input" placeholder="958 245 289" type="text" />
        </div>
        <div class="flex flex-col section-contacto__form-group">
          <label for="documento" class="section-contacto__sub">Tipo de documento</label>
          <select class="section-contacto__select" name="documento" id="documento">
            <option selected>Seleccione un documento</option>
            <option value="dni">DNI</option>
            <option value="pasaporte">pasaporte</option>

          </select>
          <div class="section-contacto__form-group">
            <label for="nrodcocumento" class="section-contacto__sub">Nro de documento</label>
            <input id="nrodcocumento" class="section-contacto__input" placeholder="85147569" type="text" />
          </div>
        </div>
        <div class="section-contacto__boton">
          <button class="btn btn--form">Enviar</button>
        </div>
      </form>
    </div>
    <div class="container bg-primary-100 rounded-xl">
      <div class="flex ">
        <div>
          <img src="https://i.postimg.cc/3RNGy0F2/item-1.png" alt="">
          <h2>Porsche Design</h2>
        </div>

        <div class="flex flex-col">
          <p>S/ 4099</p>
          <p>S/ 4099</p>
        </div>
      </div>
      <div class="flex">

      </div>
    </div>
  </div>
</section>