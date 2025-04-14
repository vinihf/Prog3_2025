/*Grêmio = {
    nome:"Grêmio Football Porto-Alegrense",
    libertadores: 3,
    saudacao: function(){
        console.log(`Eu sou gremista!`)
    }
}*/

const times = [
    {
        nome:"Grêmio Football Porto-Alegrense",
        libertadores: 3,
        saudacao: function(){
            console.log(`Eu sou gremista!`)
        }
    },
    {
        nome:"Sport Club Internacional",
        libertadores: 2,
        saudacao: function(){
            console.log(`Eu sou colorado!`)
        }
    },
    {
        nome:"Esporte Clube Juventude",
         libertadores: 0,
        saudacao: function(){
            console.log(`Eu sou jaconero!`)
        }
    }
]






console.log(times[0].nome)
times[1].saudacao()











times.forEach(function(time){
    lista_times = document.getElementById("times");
    const li = document.createElement("li")
    li.textContent = `${time.nome}(${time.libertadores})`;
    lista_times.appendChild(li);
});

const tres = document.getElementById("times_3_libertadores");      
let tri = times.filter(p => p.libertadores > 2);
tri.forEach(function(time){
    lista_tri = document.getElementById("times_3_libertadores");
    const li = document.createElement("li")
    li.textContent = time.nome;
    lista_tri.appendChild(li);
});


//Usando filter, map e reduce juntos
preços = [
    {alimento:"Leite",preço:2.68,status:"perecível"},
    {alimento:"Feijão",preço:6.99,status:"não perecível"},
    {alimento:"Arroz",preço:6.75,status:"não perecível"},
    {alimento:"Manteiga",preço:3.29,status:"perecível"},
]

let total_perecivel = preços
    .filter(produto=>produto.status=="perecível")
    .map(produto=>produto.preço*1.10)
    .reduce((total,produto) => total+produto,0)
console.log(`Produtos perecíveis: R$ ${total_perecivel.toFixed(2)}`)

