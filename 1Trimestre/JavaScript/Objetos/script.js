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
        nome:"Sport Club Internacionals",
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
    li.textContent = time.nome;
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
