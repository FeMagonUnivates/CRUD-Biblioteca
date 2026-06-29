async function excluirSugestao(id) {

    const confirmar = confirm("Deseja realmente excluir esta sugestão?");

    if (!confirmar) {
        return;
    }

    const response = await fetch(`https://6a39d1da917c7b14c74c53b2.mockapi.io/sugestoes/${id}`, {
        method: "DELETE"
    });

    listarSugestoes();

}

async function listarSugestoes() {

    const response = await fetch("https://6a39d1da917c7b14c74c53b2.mockapi.io/sugestoes");

    const sugestoes = await response.json();

    const tabela = document.getElementById("tabela");
    const corpoTabela = document.getElementById("tabelaSugestoes");
    const mensagem = document.getElementById("mensagemVazia");

    corpoTabela.innerHTML = "";

    if (sugestoes.length === 0) {
        tabela.style.display = "none";
        mensagem.style.display = "block";
        return;
    }

    tabela.style.display = "table";
    mensagem.style.display = "none";

    sugestoes.forEach(sugestao => {

        corpoTabela.innerHTML += `
            <tr>
                <td>${sugestao.id}</td>
                <td>${sugestao.cliente}</td>
                <td>${sugestao.livro}</td>
                <td>${sugestao.comentario}</td>
                <td>
                    <button class="btnExcluir" onclick="excluirSugestao('${sugestao.id}')">
                        Excluir
                    </button>
                </td>
            </tr>
        `;

    });

}

listarSugestoes();