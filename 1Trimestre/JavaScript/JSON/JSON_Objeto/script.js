window.addEventListener('load',function(){

    fetch("https://pokeapi.co/api/v2/pokemon/1")
        .then(response => response.json())
        .then(dados => {
            this.document.getElementById('texto').src=dados.sprites['front_default'];
        })
        .catch(erro => {
            console.error("Erro na requisição:", erro);
        });
        
})