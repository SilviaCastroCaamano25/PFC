<?php
    /**
     * Abrimos la sesión
     */
    session_start();
    /**
     * Abrimos la conexión con la BBDD
     */
    include "conexion.php";

    /**
     * Recojo los datos del formulario formulario_register
     */
    $usuario=$_POST['usuario'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    /**
     * Para que pueda detectar la contraseña encritada
     */
    $password=hash('sha512', $password);

    /**
     * Verificamos los datos en la BBDD
     */
    $verifi=mysqli_query($db, "SELECT * FROM tusuarios WHERE usuario='$usuario' AND email='$email' AND contrasenha='$password'") or die ("Fallo en la consulta");

    /**
     * Verificamos el usuario que quiere iniciar la sesión
     */
    if(mysqli_num_rows($verifi) > 0){
        $_SESSION['usuario'] = $email;
        echo '<script>
                alert("Usuario logueado");
              </script>';
        header("location: ../PaginaPrincipal.html");
        exit;
    } else {
        echo '<script>
                alert("Usuario no existe");
                window.location="../login_formulario.php";
              </script>';
        exit;
    }



?>