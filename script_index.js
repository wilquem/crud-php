function validar () {
    document.getElementById("nome").required = true;
    document.getElementsByClassName("invalid-feedback").innerHTML = "Nome inválido";
}