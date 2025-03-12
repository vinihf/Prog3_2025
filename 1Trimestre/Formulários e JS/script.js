// Vamos iniciar imprimindo um conteúdo no console do navegador
console.log("oi");

/*Em Javascript existem 3 tipos de escopo de variável:
 var - global
 let - escopo local
 const - constante

No Javascript há tipos primitivos e objetos. Os tipos primitivos são imutáveis e são atribuídos por valor.
Já os objetos são atribuídos por referência

*/

/* String */
let nome = "João";
let nome2 = 'Maria';
let mensagem = `Olá, ${nome}`;
console.log(mensagem);


/* Number */
let idade = 25;       
let valor = 99.99;    
let infinito = Infinity;  
let notANumber = NaN; 

/* Boolean */
let verdadeiro  = true;
let falso = false;














/* undefined */
let valorNovo;
console.log(valorNovo);

/* Null */
let valorNulo = null;









/* Entre os tipos objetos, citam-se os objetos, arrays e date */

/* Objetos */
let time = {
    nome: "Grêmio",
    mundiais: 2
};

console.log(time.nome);

/* Arrays */
let times = ["Grêmio","Juventude","Caxias","Internacional"];

console.log(times[1]);

/* Date */
let hoje = new Date();
console.log(hoje);

/* Vamos adicionar um evento ao nosso Formulário */
document.getElementById("formulario").addEventListener("submit", function(event) {
    // Prevenir o comportamento padrão
    event.preventDefault();

    //Objeto FormData
    const formData = new FormData(this);
    
    //Cria um objeto das entradas vindas do formulário
    let dados = Object.fromEntries(formData.entries());

    //Imprimindo no console e convertendo para Number
    console.log(`${dados['idade']} é do tipo ${typeof(parseInt(dados['idade']))}`);


    //Como verificar se um checkbox foi marcado?
    if (formData.has("proprio")) {
        console.log("O usuário marcou alguma opção de transporte proprio.");
    }
    if (formData.has("publico")) {
        console.log("O usuário marcou alguma opção de transporte público.");
    } 

    //Modificando um elemento via Javascript
    const texto = document.getElementById("Texto");

    //texto.textContent = `${dados['nome']} tem ${dados['idade']} anos.`;
    
    if(formData.has("publico") &&  formData.has("privado")){
        texto.textContent = `${dados['nome']} vem das duas formas`;
    }else if (formData.has("publico")){
        texto.textContent = `${dados['nome']} vem de transporte público`;
    }else if (formData.has("privado")){
        texto.textContent = `${dados['nome']} vem de transporte próprio`;
    }else{
        texto.textContent = `${dados['nome']} não vem`;
    }
    Texto.style.backgroundColor = 'red';
    Texto.style.color = 'white';
});