/* 
  O propósito da função runOnStart é lidar com um bug do Safari (versão 15.0 no momento desse comentário) que faz com que o evento do DOMContentLoaded é disparado antes do listener ser chamado, resultando, assim, em comportamentos indesejáveis.

  O código checa se o DOMContentLoaded já foi disparado (por isso o document não estar mais carregando (ver código abaixo da função runOnStart)), e se sim, roda o código. Se ele NÃO foi disparado ainda, então o listener é inicializado


  Referência da resolução: https://developer.apple.com/forums/thread/651215
*/

function runOnStart() {
  // Franquias

  setTimeout(() => {
    new Splide(".splide", {
      perPage: 2,
      gap: "1.315rem",
      breakpoints: {
        600: {
          perPage: 1,
          gap: 0,
        },
      },
    }).mount()
  }, 1000)

  // FORM STUFF

  // get all alerts of the form
  // const avisos = document.querySelectorAll(".alert")

  // SEND FORM -- fetch api

  const form = document.getElementById("enviar")
  const exitForm = document.getElementById("exitForm")

  // MODAL
  /* The form is inside a modal, which is display: none by default 
   The main purpose of the modal is to add a darker background behind the form
  */

  //get the modal
  const modal = document.querySelector(".modal--main-form")
  const exitModal = document.querySelector(".modal--exit-form")

  const nameForm = document.querySelector("#nameForm")
  nameForm.addEventListener("input", (e) => validateName(e.target))

  const cellphoneForm = document.querySelector("#cellphoneForm")
  cellphoneForm.addEventListener("input", (e) => validateNumber(e.target))

  const emailForm = document.querySelector("#emailForm")
  emailForm.addEventListener("input", (e) => validateEmail(e.target))

  // EXIT FORM STUFF

  /* The exit form has 2 steps:
  (1) the main trigger (which is above the trigger activator)
  (2) the trigger activator (which is a switch to allow or not the
      trigger to show to exit form)
  
  1: If the user enter the activator area, it will make the exitFormActivator
  variable true, hence allowing the next step to happen
  2: If the user enter the trigger area, and the exitFormActivator is true, then
  the form will be shown, and the hasExitFormBeenShown will become true, not allowing
  it to show again, until a page refresh
     
  */

  let hasExitFormBeenShown = false
  let exitFormActivator = false

  const exitFormTrigger = document.querySelector("#exitFormTrigger")
  exitFormTrigger.addEventListener("mouseenter", () => {
    if (
      !hasExitFormBeenShown &&
      exitFormActivator &&
      modal.classList.contains("is-hidden")
    ) {
      openModal(exitModal)

      hasExitFormBeenShown = true
    }
  })

  const exitFormTriggerActivator = document.querySelector(
    "#exitFormTriggerActivator"
  )
  exitFormTriggerActivator.addEventListener("mouseenter", () => {
    exitFormActivator = true

    // TODO: Change the detector from HTMLElements to mouse zones, to avoid block the user

    // prevents the div from blocking mouse events
    exitFormTriggerActivator.classList.add("is-hidden")
  })

  // Get the button that opens the modal
  const ctas = document.querySelectorAll(".btn--cta")

  // add click listeners to button to open the modal
  for (let i = 0; i < ctas.length; i++) {
    ctas[i].addEventListener("click", () => openModal(modal), true)
  }

  const alertForm = document.querySelector("#alertForm")

  // (F) OPENMODAL

  function openModal(modal) {
    if (modal.style.display == "none") {
      modal.style.display = "flex"
    } else {
      modal.classList.remove("is-hidden")
      modal.style.animation = "fade-in 1s both"
    }
  }

  // Get the button element that closes the modal
  const btnCloseForm = document.querySelector(".btn--close")

  btnCloseForm.onclick = function () {
    modal.classList.add("is-hidden")
  }

  const btnCloseExitForm = document.querySelector(".btn--close-exit")
  btnCloseExitForm.onclick = function () {
    exitModal.classList.add("is-hidden")
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      // delays the addition of the class for 1s to play the animation
      setTimeout(() => {
        modal.classList.add("is-hidden")
      }, 1000)
      modal.style.animation = "fade-out 1s both"
    }
  }

  form.addEventListener(
    "submit",
    function (e) {
      // e.preventDefault()

      if (validateForm()) {
        modal.classList.add("is-hidden")

        // Event snippet for Envio de formulário conversion page
        gtag("event", "conversion", {
          send_to: "AW-10814671575/nhbdCJjQ6YUDENeV66Qo",
        })

        return true
      } else {
        e.preventDefault()
        return false
        // cellphoneForm.setCustomValidity("Porfavor, use um número válido")
      }
    },
    true
  )

  exitForm.addEventListener("submit", function (e) {
    exitModal.classList.add("is-hidden")

    return true
  })

  // prevent the key "Enter" from submitting the form
  // window.addEventListener(
  //   "keydown",
  //   function (e) {
  //     if (
  //       e.keyIdentifier == "U+000A" ||
  //       e.keyIdentifier == "Enter" ||
  //       e.keyCode == 13
  //     ) {
  //       if (e.target.nodeName == "INPUT" && e.target.type !== "textarea") {
  //         e.preventDefault()
  //         return false
  //       }
  //     }
  //   },
  //   true
  // )

  // FORM
}

/**
 * Animation on scroll
 */
window.addEventListener("load", () => {
  AOS.init({
    duration: 1000,
    easing: "ease-in-out",
    once: true,
    mirror: false,
  })
})

if (document.readyState !== "loading") {
  runOnStart()
} else {
  document.addEventListener("DOMContentLoaded", function () {
    runOnStart()
  })
}

// (F) VALIDATEFORM

let isNumberValidated = false
let isNameValidated = false
let isEmailValidated = false

function validateName(element) {
  // if the element is not empty, validate
  if (element.value.length > 0) {
    element.style.borderBottom = "0.25rem solid green"

    // remove the alert to not confuse the user
    alertForm.classList.add("is-hidden")

    isNameValidated = true
    return true
  } else {
    element.style.borderBottom = "0.0625rem solid #aaaaaa"

    isNameValidated = false
    return false
  }
}

// VALIDATE NUMBER

function validateForm(e) {
  console.log(isNumberValidated, isNameValidated, isEmailValidated)
  if (isNumberValidated && isNameValidated && isEmailValidated) {
    return true
  } else {
    alertForm.classList.remove("is-hidden")
    return false
  }
}

const cellphoneRegex =
  /^\(?(?:[14689][1-9]|2[12478]|3[1234578]|5[1345]|7[134579])\)? ?(?:[2-8]|9[1-9])[0-9]{3}\-?[0-9]{4}$/

function validateNumber(element) {
  // if the number passes on the regExp, validate
  if (cellphoneRegex.test(element.value)) {
    element.style.borderBottom = "0.25rem solid green"

    // remove the alert to not confuse the user
    alertForm.classList.add("is-hidden")

    isNumberValidated = true
    return true
  } else {
    // if the element is empty, remove the border
    if (element.value.length === 0) {
      element.style.borderBottom = "0.0625rem solid #aaaaaa"
    } else {
      // else add a red border
      element.style.borderBottom = "0.25rem solid red"
    }

    isNumberValidated = false
    return false
  }
}

function mascara(telefone) {
  if (telefone.value.length == 0) telefone.value = "(" + telefone.value

  if (telefone.value.length == 3) telefone.value = telefone.value + ") " //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.

  if (telefone.value.length == 10) telefone.value = telefone.value + "-" //quando o campo já tiver 10 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
}

const emailRegex = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/

// VALIDATE EMAIL

function validateEmail(element) {
  // if the number passes on the regExp, validate
  if (emailRegex.test(element.value)) {
    element.style.borderBottom = "0.25rem solid green"

    // remove the alert to not confuse the user
    alertForm.classList.add("is-hidden")

    isEmailValidated = true
    return true
  } else {
    // if the element is empty, remove the border
    if (element.value.length === 0) {
      element.style.borderBottom = "0.0625rem solid #aaaaaa"
    } else {
      // else add a red border
      element.style.borderBottom = "0.25rem solid red"
    }

    isEmailValidated = false
    return false
  }
}
