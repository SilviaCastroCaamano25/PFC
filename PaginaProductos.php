<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería</title>
    <link rel="shortcut icon" href="./imagenes/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css\PaginaProductos.css">
</head>
<body>
    <!--Cabecera de la página-->
    <div class="cabecera">
        <img class="logotipo" src="./imagenes/logotipo.png" alt="logotipo">
        <span>Panadería Pallares</span>

        <div class="mis_datos">
            <a href="#"><div class="btn"><img src="./imagenes/log_in.png" alt="Log_in">Iniciar Sesión</div></a>
            <a href="#"><div class="btn"><img src="./imagenes/log_out.png" alt="Log_out">Cerrar Sesión</div></a>
        </div>
    
    </div>

    <!--Navegador de la página-->
    <div class="navegador">
        <div class="submenu"><a href="PaginaPrincipal.html"><div class="boton">Nosotros</div></a></div>
        <div class="submenu"><a href="PaginaProductos.php"><div class="boton">Productos</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Panes</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Empanadas</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Dulces</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Contáctanos</div></a></div>
    </div>

    <!--Cuerpo de la página-->

    <div class="btn_categoria">
        <button type="button"><img src="imagenes/panes.jpg" alt="Categoría Panes"></button>
        <button type="button"><img src="imagenes/empanadas.jpg" alt="Categoría Empanadas"></button>
        <button type="button"><img src="imagenes/dulces.jpg" alt="Categoría Dulces"></button>
    </div>
    <?php
/*        include "conexion.php";
        session_start();
        
        $categoria=mysqli_query($db, "SELECT categoria, foto FROM tcategoria") or die ("Fallo en la consulta");
            if(mysqli_num_rows($categoria)>0){
                while($cate=mysqli_fetch_array ($categoria) ) {

                    echo "<p>Categoria: ".$cate["categoria"]."<br>";
                    echo "Foto: <img src='imagenes/".$cate["foto"]."'><br>";
                    
                }
            } else {
                echo "Error";
            }

        mysqli_free_result ($categoria);
        mysqli_close ($db);
*/
    ?>
</body>
</html>