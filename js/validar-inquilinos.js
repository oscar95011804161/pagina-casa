//video tutorial: https://youtu.be/36S19D6kZkc?si=Iftpx8dHxBIasCLS

//Declaramos variables
// de los id del documento html
const locacion = document.getElementById ("locacion");
const nombre = document.getElementById("nombre");
const celular = document.getElementById("celular");
const email = document.getElementById("correo");
const textarea = document.getElementById("exampleFormControlTextarea1");
const form = document.getElementById("form");
const parrafo = document.getElementById("warnings");


//validamos que nombre no tenga mas de 6 caracteres
form.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings =""
    let entrar=false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ //creamos variable donde almacene expresion regular para validar email.
    parrafo.innerHTML =""  //para vaciar la memoria cache
    
    if(locacion.value == 0 || locacion.value == "") {
        warnings+= `el selecciona una locacion para continuar <br>`
        entrar="true"
    }
    
    if (nombre.value.length <6){
        warnings+= `el nombre no es valido <br>`
        entrar="true"
    }
    if (celular.value.length <10){
        warnings+= `el numero celular no es valido <br>`
        entrar="true"
    }
    if(!regexEmail.test(email.value)){
        warnings += `El correo no es valido <br>`
        entrar = true
    }
    if (textarea.value.length <6){
        warnings+= `el comentario es muy corto <br>`
        entrar="true"
    }
    

    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        parrafo.innerHTML = "enviado"
    }
})
