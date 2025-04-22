.addEventListener()

const formulario = document.getElementById("formulario")
formulario.addEventListener("submit",function(event){
    const formData = new FormData(this);
    let dados = Object.fromEntries(formData.entries());
    localStorage.setItem("nome",dados['nome']);
})