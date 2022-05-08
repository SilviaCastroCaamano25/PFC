<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería</title>
    <link rel="shortcut icon" href="./imagenes/favicon.ico" />
    <link rel="stylesheet" href="./css/detalles.css">
</head>
<body>
    <!--Cabecera de la página-->
    <div class="cabecera">
        <img class="logotipo" src="./imagenes/logotipo.png" alt="logotipo">
        <span>Panadería Fariña</span>

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
        <div class="submenu"><a href="#"><div class="boton">Bolleria Salada</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Bolleria Dulce</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Chocolates y Bombones</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Navidades y Festivos</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Contáctanos</div></a></div>
    </div>

    <!--Cuerpo de la página-->
    <div class="cuerpo">
        <?php
            include "conexion.php";

            $idc=$_POST["idc"];
            if($_POST){
                
                $vcategoria_producto=mysqli_query($db, "SELECT * FROM vcategoria_producto WHERE categoria='$idc'") or die ("Fallo en la consulta");
                if(mysqli_num_rows($vcategoria_producto)>0){
                    while($prod=mysqli_fetch_array ($vcategoria_producto) ) {
                        echo "<p>Producto: ".$prod["producto"]."</p>";
                        echo "<p>Precio: ".$prod["precio"]."€</p>";
                        echo "<input type='hidden'><input type='image' id='imagen' src='imagenes/".$prod["foto"]."'>";
                    }
                } else {
                    echo "Error Producto";
                }

                mysqli_free_result ($vcategoria_producto);
                mysqli_close ($db);
            }
        ?>
    </div>

</body>
</html>