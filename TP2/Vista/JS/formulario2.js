
/// Example starter JavaScript for disabling form submissions if there are invalid fields
		(() => {
            'use strict'
      
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')
      
            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity() && !validaUsuarioPass()) {
              event.preventDefault()
              event.stopPropagation()
            }
      
            form.classList.add('was-validated')
          }, false)
            })
              })()


// --------- GUARDAMOS NUESTRO FORMULARIO E INPUTS EN CONSTANTES ---------------
const $formulario = document.getElementById("formulario");
const $inputs = document.querySelectorAll("#formulario input");/*La función document.querySelectorAll() es una función integrada del objeto document,
 que se utiliza para seleccionar múltiples elementos que coinciden con un selector CSS especificado. En este caso, el selector CSS utilizado es #formulario input,
 lo que significa que se seleccionarán todos los elementos <input> que se encuentren dentro de un elemento con el ID "formulario".*/


// --------- OBJETO CON NUESTRAS EXPRESIONES REGULARES ---------------
const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // AQUI LE ESTAMOS DICIENDO QUE EN EL CAMPO USUARIO ACEPTE LETRAS MINUSCULAS Y MAYUSCULAS DE LA A HASTA LA Z, NÚMEROS DEL 0 HASTA EL 9, GUIONES BAJOS, GUIONES MEDIO Y UNA CANTIDAD MINIMA DE 4 CARACTERES Y MAXIMA DE 16 CARACTERES
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // AQUI ACEPTARA LETRAS CON O SIN ACENTO Y ESPACIOS
    password: /^.{8,12}$/, // SÓLO ACEPTARA UN MINIMO DE 8 DIGITOS Y UN MÁXIMO DE 12 DIGITOS
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // ACEPTA DE TODO MENOS CARACTERES ESPECIALES
    telefono: /^\d{7,14}$/ // ACEPTARA MINIMO 7 Y MAXIMO 14 NÚMEROS
}

function validaUsuarioPass(){
  let input_usuario, input_pass, cumple;
  cumple=false;
  input_usuario = document.getElementById("usuario");
  input_pass = document.getElementById("password");

  if(expresiones.usuario.test(input_usuario.value) && expresiones.password.test(input_pass.value)){
    let elemento = document.querySelector('formulario_grupo-input-error');
    console.log(elemento);
    elemento.style[0]='display: none';
  }
  else{
    let elemento = document.querySelector('formulario_grupo-input-error');
    console.log(elemento);
    elemento.style[0]='display: block;';
  }
  return cumple;
}

/* 
function validaUsuarioPass(){
  let input_usuario = document.getElementById("usuario");
  let input_pass = document.getElementById("password");
  let cumple=false;
  if(expresiones.usuario.test(input_usuario.value) && expresiones.password.test(input_pass.value)){
    
    document.getElementById('grupo_usuario').classList.remove("formulario_grupo-incorrecto");
    document.getElementById('grupo_usuario').classList.add("formulario_grupo-correcto");
    document.getElementById('grupo_usuario i').classList.add("formulario_grupo-correcto");
    document.getElementById('grupo_usuario i').classList.remove("bi bi-patch-check-fill");
    document.getElementById('grupo_password i').classList.add("bi bi-patch-check-fill");
    document.getElementById('grupo_password i').classList.remove("bi bi-patch-check-fill"); 
    document.getElementById('grupo_password').classList.remove("formulario_grupo-incorrecto");
    document.getElementById('grupo_password').classList.add("formulario_grupo-correcto");
    document.getElementById('grupo_usuario.formulario_input-error').classList.remove("formulario_input-error-activo");
    document.getElementById('grupo_password.formulario_input-error').classList.remove("formulario_input-error-activo");
    cumple=true;
    console.log("funciona");

  }
  else{
    
    document.getElementById('alerta').classList.add('formulario_grupo-incorrecto');
    document.getElementById("grupo_usuario").classList.add("formulario_grupo-incorrecto");
    document.getElementById("grupo_usuario").classList.remove("formulario_grupo-correcto");
    document.getElementById("grupo_usuario i").classList.remove("bi bi-patch-check-fill");
    document.getElementById("grupo_usuario i").classList.add("bi bi-patch-check-fill");
    document.getElementById("grupo_password i").classList.remove("bi bi-patch-check-fill");
    document.getElementById("grupo_password i").classList.add("bi bi-patch-check-fill"); 
    document.getElementById("grupo_password").classList.add("formulario_grupo-incorrecto");
    document.getElementById("grupo_password").classList.remove("formulario_grupo-correcto");
    document.getElementById("alerta").classList.add("formulario_grupo-incorrecto");
    document.querySelector("grupo_password.formulario_input-error").classList.add("formulario_input-error-activo");  
    console.log("no cumple");
  }return cumple;
}
function passIgualUsuario(){
  let input_usuario, input_pass, iguales;
  input_usuario = document.getElementById("usuario");
  input_pass = document.getElementById("password");
  iguales=false;
  if(input_usuario.value==input_pass.value){
    document.getElementById("alerta").classList.add("formulario_grupo-incorrecto");
    console.log("iguales")
  }
  else{
    document.querySelector("grupo_password.formulario_input-error").classList.remove("formulario_input-error-activo");
    iguales=true;
    console.log("funciona");

}return iguales;
}
 */
// --------- VALIDAMOS TODO NUESTRO FORMULARIO ---------------
