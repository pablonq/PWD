// --------- GUARDAMOS NUESTRO FORMULARIO E INPUTS EN CONSTANTES ---------------
const $formulario = document.getElementById("formulario");
const $inputs = document.querySelectorAll("#formulario input");/*La función document.querySelectorAll() es una función integrada del objeto document, que se utiliza para seleccionar múltiples elementos que coinciden con un selector CSS especificado. En este caso, el selector CSS utilizado es #formulario input, lo que significa que se seleccionarán todos los elementos <input> que se encuentren dentro de un elemento con el ID "formulario".*/


// --------- OBJETO CON NUESTRAS EXPRESIONES REGULARES ---------------
const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // AQUI LE ESTAMOS DICIENDO QUE EN EL CAMPO USUARIO ACEPTE LETRAS MINUSCULAS Y MAYUSCULAS DE LA A HASTA LA Z, NÚMEROS DEL 0 HASTA EL 9, GUIONES BAJOS, GUIONES MEDIO Y UNA CANTIDAD MINIMA DE 4 CARACTERES Y MAXIMA DE 16 CARACTERES
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // AQUI ACEPTARA LETRAS CON O SIN ACENTO Y ESPACIOS
    password: /^.{8,12}$/, // SÓLO ACEPTARA UN MINIMO DE 8 DIGITOS Y UN MÁXIMO DE 12 DIGITOS
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // ACEPTA DE TODO MENOS CARACTERES ESPECIALES
    telefono: /^\d{7,14}$/ // ACEPTARA MINIMO 7 Y MAXIMO 14 NÚMEROS
}


// -------------- OBJETO CON NUESTROS CAMPOS ----------------------
const campos = {
    usuario: false,
    password: false,
    }
