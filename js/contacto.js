const counter = {
  count: 1,
}

const setCounter = obj =>{
  for(let key in obj){
    if(counter.hasOwnProperty(key)){
      counter[key] = obj[key]
    }
  }
}

// const $ =(selector) => document.querySelector(selector)
const number = document.querySelector(".section-detalle__number")
const sumar = document.querySelector(".sumar")
const restar = document.querySelector(".restar")
const precio = document.querySelector("#precio")
const precioOriginal = parseFloat(precio.textContent);

const modificarCantidad = (numero)=>{
  if(counter.count + numero === 0){
    return;
  }
  setCounter(counter.count = counter.count + numero)
}
sumar.addEventListener("click", ()=>{
  modificarCantidad(1)               //100 Precio de prueba   
  precio.innerHTML = counter.count * precioOriginal
  number.innerHTML = counter.count
})
restar.addEventListener("click", ()=>{
  modificarCantidad(-1)             //100 Precio de prueba
  precio.innerHTML = counter.count * precioOriginal
  number.innerHTML = counter.count
})

// -------------------- Formulario  ------------------------------

const form = document.getElementById("form-detalle")
const modelo_morral = document.getElementById("morral").innerHTML
const whatsapp = "+51992244235";

form.addEventListener("submit", (e)=> {
  e.preventDefault()

  const formData = new FormData(form)

  formData.append("cantidad", counter.count)
  formData.append("precio", precio.textContent)

  const nombres = formData.get("nombres");
  const color = formData.get("colores");
  const correo = formData.get("correo");

  const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
  const errors = [];
  
  regexEmail.test(correo) ? null : errors.push("Correo no valido");
  nombres.length <= 2 ? errors.push("El nombre debe ser mayor a 2 letras") : null;

  if(errors.length > 0) {
    Swal.fire({
      icon: 'error',
      title: 'Datos ingresados no válidos',
      text: errors,
      confirmButtonText:'Cerrar',
    });
  }else {
    Swal.fire("¡Gracias, su pedido fue enviado correctamente!", '', 'success')
    const text = `Hola 👋, quiero comprar:%0A*Modelo:* ${modelo_morral}%0A*Cantidad:* ${counter.count}%0A*Color:* ${color}%0A*Precio por Unidad:* S./${precioOriginal}%0A*Total a pagar:* S./${precio.textContent}%0A%0A*Mis datos son:*%0A*Nombres:* ${nombres}%0A*Correo:* ${correo}%0A`

    const url = `https://api.whatsapp.com/send?phone=${whatsapp}&text=${text}`;
    window.open(url, "_blank");
    form.reset();
  }
})