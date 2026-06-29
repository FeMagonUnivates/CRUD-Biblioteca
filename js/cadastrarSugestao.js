const form = document.getElementById("form");

form.addEventListener("submit", async function(e){

    e.preventDefault();

    const cliente = document.getElementById("cliente").value;
    const livro = document.getElementById("livro").value;
    const comentario = document.getElementById("comentario").value;

    const response = await fetch("https://6a39d1da917c7b14c74c53b2.mockapi.io/sugestoes",{
        method:"POST",
        headers:{ 'Content-Type':'application/json'},
        body:JSON.stringify({ cliente, livro, comentario })
    });

    if(response.ok){

        window.location.href = "../view/listasugestao.php";

    }

});