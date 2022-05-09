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
                
                $vcategoria_producto_ingrediente=mysqli_query($db, "SELECT * FROM vcategoria_producto_ingrediente WHERE categoria='$idc'") or die ("Fallo en la consulta");
                if(mysqli_num_rows($vcategoria_producto_ingrediente)>0){
                    while($prod=mysqli_fetch_array ($vcategoria_producto_ingrediente) ) {
                        echo "<div class='produc'><form method='post' action='detalles_producto.php'>";
                            echo "<p><span>Producto: </span>".$prod["producto"]."</p>";
                            echo "<p><span>Precio: </span>".$prod["precio"]."€</p>";
                            echo "<input type='hidden'><input type='image' id='imagen' style='width: 250px; border: 1px solid orange;' src='imagenes/".$prod["foto"]."'>";
                            echo "<input type='submit' id='idp' name='idp' value='".$prod["producto"]."'>";
                        echo "</form></div>";
                    }
                } else {
                    echo "Error Producto";
                }

                mysqli_free_result ($vcategoria_producto_ingrediente);
                mysqli_close ($db);
            }
        ?>
    </div>

    <!--Footer de la página-->
    <div class="footer">
        <div class="col1" >
            <h2>Políticas</h2>
            <a href="#">Política de privacidad</a>
            <a href="#">Política de cookies</a>
            <a href="#">Aviso legal</a>
        </div>
        <div class="col2" >
            <h2>Horario</h2>
            <p>Lunes – Sábado: 7:30 – 21:00</p>
            <p>Domingo: 9:00 – 14:00</p>
        </div>
        <div class="col3">
            <h2>Siguenos en:</h2>
            <div class="social">
                <img src="imagenes/facebook.png" alt="facebook" width="50px" height="50px">
                <img src="imagenes/twitter.png" alt="twitter" width="50px" height="50px">
                <img src="imagenes/instagram.png" alt="instagram" width="50px" height="50px">
                <img src="imagenes/pinterest.png" alt="pinterest" width="50px" height="50px">
            </div> 
        </div>
    </div>

</body>
</html>