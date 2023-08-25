// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
  form.addEventListener('submit', event => {
    if (!form.checkValidity()) {
      event.preventDefault()
      event.stopPropagation()
    }

    form.classList.add('was-validated')
  }, false)
    })
      })()
      


// --------- GUARDAMOS NUESTRO FORMULARIO E INPUTS EN CONSTANTES ---------------
const $formulario = document.getElementById("formulario");
const $inputs = document.querySelectorAll("#formulario input");/*La función document.querySelectorAll() es una función integrada del objeto document, que se utiliza para seleccionar múltiples elementos que coinciden con un selector CSS especificado. En este caso, el selector CSS utilizado es #formulario input, lo que significa que se seleccionarán todos los elementos <input> que se encuentren dentro de un elemento con el ID "formulario".*/


// --------- OBJETO CON NUESTRAS EXPRESIONES REGULARES ---------------
const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // AQUI LE ESTAMOS DICIENDO QUE EN EL CAMPO USUARIO ACEPTE LETRAS MINUSCULAS Y MAYUSCULAS DE LA A HASTA LA Z, NÚMEROS DEL 0 HASTA EL 9, GUIONES BAJOS, GUIONES MEDIO Y UNA CANTIDAD MINIMA DE 4 CARACTERES Y MAXIMA DE 16 CARACTERES
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // AQUI ACEPTARA LETRAS CON O SIN ACENTO Y ESPACIOS
    password: /^.{8,12}$/, // SÓLO ACEPTARA UN MINIMO DE 8 DIGITOS Y UN MÁXIMO DE 12 DIGITOS
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // ACEPTA DE TODO MENOS CARACTERES ESPECIALES
    telefono: /^\d{7,14}$/, // ACEPTARA MINIMO 7 Y MAXIMO 14 NÚMEROS
    anio:/^\d{1,4}$/,
    duracion:/^\d{1,3}$/


}


// -------------- OBJETO CON NUESTROS CAMPOS ----------------------
const campos = {
    
    duracion:false,
    
    anio:false,
    
    }
/* //Aplicar Bootstrap y validar los siguiente:
- El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo 
aceptar números.
- El campo duración debe permitir un máximo de 3 números.
- Todos los datos son obligatorios
- Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el 
formulario. 
- El botón “Borrar” debe limpiar el formulario. // */
// --------- SWITCH PARA SELECCIONAR EL INPUT DONDE ÉSTE HACIENDO FOCO EL USUARIO  ---------------
const validarFormulario = (e) => {
  switch(e.target.name) {
      case "anio":
          validarCampo(expresiones.anio, e.target, "anio");
      break;
      case "duracion":
          validarCampo(expresiones.duracion, e.target, "duracion");
      break;
      
  }
}


// -------------- VALIDAMOS NUESTROS INPUTS ------------------------
const validarCampo = (expresion, input, campo) => {
  if (expresion.test(input.value)){
      document.querySelector(`#grupo_${campo} .formulario_input-error`).classList.remove("formulario_input-error-activo");
      campos[campo] = true;
      console.log("Funciona");
  } else {
        document.querySelector(`#grupo_${campo} .formulario_input-error`).classList.add("formulario_input-error-activo");
         campos[campo] = false;
         console.log("Funciona");
      }
}





// --------- VALIDAMOS TODO NUESTRO FORMULARIO ---------------
$formulario.addEventListener("submit", (e) => {
  e.preventDefault();

  
  if(campos.duracion && campos.anio){
      // formulario.reset();

      document.getElementById("formulario_mensaje-exito").classList.add("formulario_mensaje-exito-activo");
      setTimeout(() => {
          document.getElementById("formulario_mensaje-exito").classList.remove("formulario_mensaje-exito-activo");
         

      }, 3000);

  
      setTimeout(() => {
          location.reload();
      }, 5000);

  } else {
      document.getElementById("formulario_mensaje").classList.add("formulario_mensaje-activo");
  }
});