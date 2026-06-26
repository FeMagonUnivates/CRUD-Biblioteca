const campoCep = document.getElementById("cep");
const botao = document.getElementById("btnCep");

campoCep.addEventListener("input", function () {

    let cep = this.value.replace(/\D/g, "");

    cep = cep.substring(0, 8);

    if (cep.length > 5) {
        cep = cep.substring(0, 5) + "-" + cep.substring(5);
    }

    this.value = cep;
});

botao.addEventListener("click", buscarCEP);

function buscarCEP() {

    const cep = campoCep.value.replace(/\D/g, "");

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(dados => {

            document.getElementById("rua").value = dados.logradouro;
            document.getElementById("bairro").value = dados.bairro;
            document.getElementById("cidade").value = dados.localidade;

        });

}