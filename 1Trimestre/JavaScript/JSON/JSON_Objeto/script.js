window.addEventListener('load',function(){
    fetch("https://pokeapi.co/api/v2/generation/1")
        .then(response => response.json())
        .then(dados => {
            this.document.getElementById('texto').innerHTML=dados.name;
        })
        .catch(erro => {
            console.error("Erro na requisição:", erro);
        });
})