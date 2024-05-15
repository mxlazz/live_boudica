function checkInput(event) {
  const pattern = new RegExp(/^[a-zA-Z\s]+$/);
  let currentValue = event.target.value;
  if (pattern.test(currentValue)) {
    let validValue = currentValue.match(pattern)[0];
    event.target.value = validValue;
  } else {
    // evitar cadenas con caracteres inválidos únicamente
    event.target.value = "";
  }
}

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
  var disabledElement = document.getElementById("BtnEnviar");
  form = document.getElementById("FormRegister");
  console.log(form);
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
