/**
 * Creo el evento onclick en los botones y llamo a las funciones
 */ 
document.getElementById("btn_register").addEventListener("click", register);
document.getElementById("btn_login").addEventListener("click", login);
/**
 * Hace que se vaya ejecutando la función a mendida que la ventana cambia de ancho 
 */
window.addEventListener("resize", anchoPagina);

/**
 * Variables del formulario
 */
var contenedor_login_register=document.querySelector(".contenedor_login_register");
var formulario_login=document.querySelector(".formulario_login");
var formulario_register=document.querySelector(".formulario_register");
var caja_trasera_login=document.querySelector(".caja_trasera_login");
var caja_trasera_register=document.querySelector(".caja_trasera_register");

/**
 * Función para mover el formulario del registro a la derecha
 *  y ocultar el formulario del login y el texto de la caja_trasera_register
 */
function register(){
    /**
     * Hago el formulario responsive
     */
    if(window.innerWidth > 850){
        formulario_register.style.display = "block";
        formulario_login.style.display = "none";
        
        contenedor_login_register.style.left = "410px";

        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";

    } else {
        
        formulario_register.style.display = "block";
        formulario_login.style.display = "none";
        
        contenedor_login_register.style.left = "0px";

        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
    
}
    
/**
 * Función para mover el formulario del login a la izquierda
 *  y ocultar el formulario del registro y el texto de la caja_trasera_login
 */
function login(){
    /**
     * Hago el formulario responsive
     */
    if(window.innerWidth > 850){
        formulario_register.style.display = "none";
        formulario_login.style.display = "block";
    
        contenedor_login_register.style.left = "10px";

        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";

    } else{
    
        formulario_register.style.display = "none";
        formulario_login.style.display = "block";
    
        contenedor_login_register.style.left = "0px";

        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

/**
 * Funcion para que a medida que vas cambiando el tamaño de la ventana
 *  poner los formularios y el contenido de las cajas responsive
 */
function anchoPagina(){
    if(window.innerWidth > 850){
    
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    
    } else {

        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";

    }
}

anchoPagina();