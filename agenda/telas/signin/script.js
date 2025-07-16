const btnSubmit = document.querySelector("#btn-logar-usuario");

btnSubmit.addEventListener("click", validarFormulario);

function validarFormulario() {
    const inputs = document.querySelectorAll("input");
    const div = document.querySelector("#mensagem-erro");

    if (inputsVazios(inputs, div)) {
        event.preventDefault()
    }
}

function inputsVazios(inputs, div) {
    let controle = false;

    for (const input of inputs) {
        if (input.value.length === 0 || input.value.trim() === '') {
            input.style.borderColor = "red";
            div.textContent = "Preencha todos os campos."
            div.style.visibility = 'visible';
            controle = true;
        } else {
            input.style.border = "1px solid #ccc";
        }
    }
    return controle;
}