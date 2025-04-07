const campo_idade = document.getElementById("idade");
campo_idade.addEventListener("input",function(e){
    idade = parseInt(e.target.value);
    let mensagem = "";
    if(!isNaN(idade)){
        if(idade>=18){
            mensagem = "É maior de idade";
        }else{
            mensagem = "Não é maior de idade";
        }
    }else{
        mensagem = "Valor inválido."
    }
    document.getElementById("resposta_idade").textContent=mensagem;
})

const calcular = document.getElementById("calcular")
calcular.addEventListener("click",function(){
    let valor = parseInt(document.getElementById("valor").value);
    let tabuada = document.getElementById("tabuada");
    tabuada.textContent = "";
    if(!isNaN(valor)){
        for(i=0;i<=10;i++){
            $msg = `${valor} * ${i} = ${valor*i} `
            const li = document.createElement("li");
            li.textContent = $msg;
            tabuada.appendChild(li);
        }
    }
})