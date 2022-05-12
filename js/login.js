document.getElementById("btn_register").addEventListener("click", register);
document.getElementById("btn_login").addEventListener("click", login);

//Variables del formulario
var contenedor_login_register=document.querySelector(".contenedor_login_register");
var formulario_login=document.querySelector(".formulario_login");
var formulario_register=document.querySelector(".formulario_register");
var caja_trasera_login=document.querySelector(".caja_trasera_login");
var caja_trasera_register=document.querySelector(".caja_trasera_register");

function register(){
    formulario_register.style.display = "block";
    formulario_login.style.display = "none";
    
    contenedor_login_register.style.left = "410px";

    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
}

function login(){
    formulario_register.style.display = "none";
    formulario_login.style.display = "block";
    
    contenedor_login_register.style.left = "10px";

    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
}