// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
      if (!form.checkValidity() || !contraseñaIgUsuario()) {
          event.preventDefault()
          event.stopPropagation()
      }

      form.classList.add('was-validated')
      }, false)
  })
  })()

  function contraseñaIgUsuario(){
      let input_pass, input_usuario, distintos = true
      input_usuario = document.getElementById("usuario");
      input_pass = document.getElementById("password");
      error = document.getElementsByClassName("contraseña_usuario_iguales");
      
      if(input_pass.value == input_usuario.value){
        distintos = false;
        input_usuario.style="border: 1px solid red";
        input_pass.style="border: 1px solid red";
        divAlerta[0].style="display: block; color: red;";
        divAlerta[1].style="display: block; color: red;";
      }else{
        input_usuario.style="border: 1px solid green";
        input_contraseña.style="border: 1px solid green";
        divAlerta[0].style="display: none;";
        divAlerta[1].style="display: none;";
      }
      return distintos;
  }