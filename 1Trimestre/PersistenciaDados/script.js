window.addEventListener('load',function(){
    if(localStorage.getItem("nome")){
        this.document.getElementById("formulario").style.display='none';
        this.document.getElementById("nome_gravado").textContent = localStorage.getItem("nome");
        this.document.getElementById("texto").style.display='';
    }else{
        this.document.getElementById("formulario").style.display='';
        this.document.getElementById("texto").style.display='none';
    }
})

const formulario = document.getElementById("formulario")
formulario.addEventListener("submit",function(event){
    const formData = new FormData(this);
    let dados = Object.fromEntries(formData.entries());
    localStorage.setItem("nome",dados['nome']);
})

const apagar = document.getElementById("apagar")
apagar.addEventListener("click",function(){
    localStorage.removeItem("nome")
    window.location.reload() 
})