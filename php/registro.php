<?php
    /**
     * Abrimos la conexión con la BBDD
     */
    include "conexion.php";
    /**
     * Recojo los datos del formulario formulario_register
     */
    $nombre=$_POST['nombre'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $usuario=$_POST['usuario'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    /**
     * Definimos la consulta SQL en la tabla
     */
    $tusuarios=mysqli_query($db, "INSERT INTO tusuarios (usuario, nombre, apellido1, apellido2, email, contrasenha) VALUES ('$usuario', '$nombre', '$apellido1', '$apellido2', '$email', '$password')") or die ("Fallo en la consulta");

    /**
     * Si el usuario se registra correctamente me mostrará un alert y te llevará a la página principal,
     * si el usuario no pudo registrarse se mostrará un alert y te llevará a la página del login
     */
    if($tusuarios){
        echo '<script>
                alert("Usuario Registrado");
                window.location = "../PaginaPrincipal.html";
             </script>';
    } else {
        echo '<script>
                alert("Prueba otra vez, usuario no registrado");
                window.location = "../login.html";
             </script>';
    }

    /**
     * Cerramos la conexión con la BBDD
     */
    mysqli_free_result ($categoria);
    mysqli_close ($db);
?>