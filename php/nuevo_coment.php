<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería</title>
    <link rel="shortcut icon" href="../imagenes/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="..\css\nuevo_coment.css">
</head>
<body>
    <!--Navegador de la página-->
    <div class="navegador">
        <div class="submenu"><a href="../PaginaPrincipal.html"><div class="boton">Nosotros</div></a></div>
        <div class="submenu"><a href="PaginaProductos.php"><div class="boton">Productos</div></a></div>
        <div class="submenu"><a href="comentarios.php"><div class="boton">Comentarios</div></a></div>
        <div class="submenu"><a href="../contacto.html"><div class="boton">Contáctanos</div></a></div>
    </div>

    <!--Cuerpo de la página-->
    <div class="contenido">

        <?php
            include "conexion.php";
            session_start();

            $comentario_nuevo=$_POST['comentario_nuevo'];

            $tcomentarios=mysqli_query($db, "INSERT INTO tcomentarios (comentario) VALUES ('".$comentario_nuevo."')") or die ("Fallo en la consulta");

                echo "<p>Nuevo comentario añadido</p>";
                echo "<a href='comentarios.php'>Volver a la página de comentarios</a>";

            mysqli_close ($db);

        ?>
    </div>

</body>
</html>