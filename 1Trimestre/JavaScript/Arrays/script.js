let frutas = ["maçã", "banana", "laranja"];

frutas.forEach(function(fruta) {
  console.log(fruta);
});

frutas.forEach(function(fruta, index) {
    console.log(`${index}: ${fruta}`);
});

frutas.forEach((fruta, i) => {
    console.log(`${i + 1}ª fruta: ${fruta}`);
});

let lista_tarefas = [];
const formulario = document.getElementById("formulario");
let tarefas = document.getElementById("tarefas");
formulario.addEventListener("submit",function(event){
    event.preventDefault();
    let tarefa = document.getElementById("tarefa").value;
    lista_tarefas.push(tarefa);
    tarefas.textContent = "";
    lista_tarefas.forEach(element => {
        const li = document.createElement("li");
        li.textContent = element;
        tarefas.appendChild(li);
    });
});