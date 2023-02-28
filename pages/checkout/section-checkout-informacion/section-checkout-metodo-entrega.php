<section class="container mt-[200px] mb-[2000px] flex">
  <div class="flex flex-col gap-6">
    <h3 class="font-bold text-2xl">Envio 1 de 2</h3>
    <div class="flex md:flex-col gap-7 items-center md:items-start">
      <div class="flex flex-col md:flex-row items-center gap-4 md:gap-8">
        <figure class="border-y-2 border-y-gray-900 p-1">
          <img src="https://i.postimg.cc/MGDSWNPv/Whats-App-Image-2022-10-19-at-11-05-3.png" alt="">
        </figure>
        <div class="flex flex-col gap-3">
          <h3 class="font-bold text-text-sm">Porsche Design</h3>
          <p class=" font-bold text-text-sm">s/ 4099</p>
          <p class="text-xs">Cantidad: 1</p>
        </div>
      </div>
      <div class=" flex flex-col md:flex-row gap-5">
        <div class="flex flex-col p-3 bg-primary-400 md:flex-row items-center gap-1 md:gap-3 rounded-t-3xl">
          <i class="fa-solid fa-truck text-lg"></i>
          <div>
            <p class="font-bold text-sm">Delivery </p>
            <p class="text-xs">Envio a mi casa/oficina</p>
          </div>
        </div>
        <div class="flex flex-col p-3 bg-primary-400 md:flex-row items-center gap-1 md:gap-3 rounded-t-3xl">
          <i class="fa-solid fa-store text-lg"></i>
          <div>
            <p class="font-bold text-sm">Retiro en tienda</p>
            <p class="text-xs">Envio a mi casa/oficina</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-6 flex flex-col">
      <h3 class="text-2xl font-bold">Dirección de envío</h3>
      <input class="outline-0 py-2" type="text" placeholder="Seleccione una dirección o ingrese una nueva">
      <hr class="h-[2px] bg-gray-500">
    </div>

    <select class=" border-2 text-sm rounded-lg outline-0 focus:border-pink-500 block w-full p-2.5  border-gray-600   focus:ring-pink-300">
      <option selected>Departamento</option>
      <option value="US">Lima</option>
    </select>
    <select class=" border-2 text-sm rounded-lg outline-0 focus:border-primary-100 block w-full p-2.5  border-gray-600   focus:ring-pink-300">
      <option selected>Provincia</option>
      <option value="US">Lima</option>
    </select>
    <select class=" border-2 text-sm rounded-lg outline-0 focus:border-primary-100 block w-full p-2.5  border-gray-600   focus:ring-pink-300">
      <option selected>Distrito</option>
      <option value="US">Lima</option>
    </select>
    <input type="text" class="outline-0 text-sm border-2 rounded-lg py-2.5 px-3 border-gray-600 " placeholder="Ingrese su dirección">
    <input type="text" class="outline-0  text-sm border-2 rounded-lg py-2.5 px-3 border-gray-600 " placeholder="Referencia">
    <div class="flex justify-center ">
      <button class="bg-primary-100 px-8 py-2 rounded-xl text-white">Confirmar Dirección</button>
    </div>

    <!-- checkbox -->
    <div class="flex items-center gap-4 mb-4">
      <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 ">
      <div class="flex flex-col gap-2">
        <h3 for="default-radio-1 " class="ml-2 text-2xl font-bold text-gray-900  ">Rango de fecha</h3>
        <p for="">S/0.00 Entre Viernes 19/08 y 23/08</p>
      </div>
    </div>
    <div class="flex items-center gap-4 mb-4">
      <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 ">
      <div class="flex flex-col gap-2">
        <h3 for="default-radio-1" class="ml-2 text-2xl font-bold text-gray-900 ">Rango de fecha</h3>
        <p for="">S/0.00 Entre Viernes 19/08 y 23/08</p>
      </div>
    </div>
    <hr class="h-[2px] bg-gray-500">
    <h3 class="font-bold text-2xl">¿Quién recibirá el pedido?</h3>
    <div class="flex gap-3">
      <p class="text-sm  rounded-t-2xl bg-primary-400 p-4">Yo</p>
      <p class="text-sm  rounded-t-2xl bg-primary-400 p-4">Otra persona</p>
    </div>
  </div>

</section>