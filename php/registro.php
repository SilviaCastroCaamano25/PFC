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
     * Encripta la contraseña
     */
    $password=hash('sha512', $password);

    /**
     * Definimos la consulta SQL en la tabla
     */
    $consulta="INSERT INTO tusuarios (usuario, nombre, apellido1, apellido2, email, contrasenha) VALUES ('$usuario', '$nombre', '$apellido1', '$apellido2', '$email', '$password')";

    /**
     * Verificar que la contraseña no tenga una longitud menor de 8 caracteres y no se guarde en la BBDD
     */
    if(strlen($password) < 8){
        echo '<script>
                alert("La contraseña debe tener 8 o más caracteres");
                window.location = "../login.html";
              </script>';
        exit();
    } else {
        echo 'Error en la verificación de la contraseña';
    }

    /**
     * Verificar que el correo no se repita en la BBDD
     */
    $verificar=mysqli_query($db, "SELECT * FROM tusuarios WHERE email='$email'");
    if(mysqli_num_rows($verificar) > 0){
        echo '<script>
                alert("Este correo ya está registrado");
                window.location = "../login.html";
              </script>';
        exit();
    } else {
        echo 'Error en la verificación del correo';
    }

    /**
     * Verificar que el usuario no se repita en la BBDD
     */
    $verificar_usuario=mysqli_query($db, "SELECT * FROM tusuarios WHERE usuario='$usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '<script>
                alert("Este usuario ya está registrado");
                window.location = "../login.html";
              </script>';
        exit();
    } else {
        echo 'Error en la verificación del usuario';
    }

    /**
     * Si el usuario se registra correctamente me mostrará un alert y te llevará a la página principal,
     * si el usuario no pudo registrarse se mostrará un alert y te llevará a la página del login
     */
    $registra=mysqli_query($db, $consulta);
    if($registra){
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

     mysqli_close ($db);
?>