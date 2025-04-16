const formulario = document.getElementById("formulario")
formulario.addEventListener("submit",function(event){
    event.preventDefault()
    const formData = new FormData(event.target)
    const obj = Object.fromEntries(formData.entries())
    
    /*
    parse(): Aceita uma string JSON como um parâmetro e retorna o objeto JavaScript correspondente.
    stringify(): Aceita um objeto como um parâmetro e retorna o formato equivalente de string JSON.
    */
    console.log(obj);
    const json = JSON.stringify(obj);
    console.log(json);
})