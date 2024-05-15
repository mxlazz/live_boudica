function checkInput(event) {
  const pattern = new RegExp(/([a-z0-9áéíóúñü_\-]+ *)+/i);
  // const pattern = new RegExp(/^[a-zA-Z\s]+$/);
  let currentValue = event.target.value;
  if (pattern.test(currentValue)) {
     let validValue = currentValue.match(pattern)[0];
  event.target.value = validValue;
  } else {
  // evitar cadenas con caracteres inválidos únicamente
  event.target.value = "";
  }

  // var key = e.keyCode || e.which,
  //   tecla = String.fromCharCode(key).toLowerCase(),
  //   letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
  //   especiales = [8, 37, 39, 46],
  //   tecla_especial = false;

  // for (var i in especiales) {
  //   if (key == especiales[i]) {
  //     tecla_especial = true;
  //     break;
  //   }
  // }

  // if (letras.indexOf(tecla) == -1 && !tecla_especial) {
  //   return false;
  // }
}

var disabledElement = document.getElementById("FormHome");
function validarTelefono(valuePhone) {
  telefono = document.getElementById("tel1");
  message = document.querySelector(".phoneClass");
  if (telefono.value === valuePhone.value) {
    message.innerText = "";
    // disabledElement.classList.remove("button-disabled");
  } else {
    message.innerText =
      "Lo siento, el número de teléfono de confirmación que has proporcionado no coincide con el número previamente registrado";
    // disabledElement.classList.add("button-disabled");
  }
}

function validarForm() {
  form = document.getElementById("FormRegister");
  if (
    form[0].value != "" &&
    form[1].value != "" &&
    form[2].value != "" &&
    form[3].value != "" &&
    form[4].value != ""
  ) {
    disabledElement.classList.remove("button-disabled");
  } else {
    disabledElement.classList.add("button-disabled");
  }
}
