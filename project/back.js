function validar(){
    var nome = formulario.nome.value;
    var email = formulario.email.value;
    var telefone = formulario.telefone.value;

    if(nome == ""){
        alert ("É preciso preencher o campo (nome).");
        formulario.nome.focus();
        return false;
    }

    if(email == "" || email.indexOf('@') == -1){
        alert ("É preciso preencher o campo (e-mail) com um endereço valido.");
        formulario.email.focus();
        return false;
    }

    if(telefone == "" || telefone.length <= 10){
        alert ("É preciso preencher o campo (telefone) com um numero valido incluindo o DDD.");
        formulario.telefone.focus();
        return false;
    }
}