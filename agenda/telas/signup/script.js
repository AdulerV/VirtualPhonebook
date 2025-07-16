const btnSubmit = document.querySelector("#btn-cadastrar-usuario");

btnSubmit.addEventListener("click", validarFormulario);

function validarFormulario() {
    const inputs = document.querySelectorAll("input");
    const div = document.querySelector("#mensagem-erro");

    if (inputsVazios(inputs, div) || verificarTamanhoSenha(div)) {
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

function verificarTamanhoSenha(div) {
    const senha = document.querySelector("#senha-cadastro");

    if (senha.value.length < 8) {
        senha.style.borderColor = "red";
        div.textContent = "Senha com menos de 8 caracteres."
        return true;
    }
}