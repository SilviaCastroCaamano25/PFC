document.getElementById("btn_register").addEventListener("click", register);

//Variables del formulario
var contenedor_login_register=document.querySelector(".contenedor_login_register");
var formulario_login=document.querySelector(".formulario_login");
var formulario_register=document.querySelector(".formulario_register");
var caja_trasera_login=document.querySelector(".caja_trasera_login");
var caja_trasera_register=document.querySelector(".caja_tarsera_register");

function register(){
    formulario_register.style.display = "block";
    formulario_login.style.display = "none";
    
    contenedor_login_register.style.left = "410px";

    caja_trasera_login.style.opacity = "1";
}