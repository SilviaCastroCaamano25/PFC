<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería</title>
    <link rel="shortcut icon" href="../imagenes/favicon.ico" />
    <link rel="stylesheet" href="../css/detalles_producto.css">
</head>
<body>
    <!--Cabecera de la página-->
    <div class="cabecera">
        <img class="logotipo" src="../imagenes/logotipo.png" alt="logotipo">
        <span>Panadería Fariña</span>

        <div class="mis_datos">
            <a href="#"><div class="btn"><img src="../imagenes/log_in.png" alt="Log_in">Iniciar Sesión</div></a>
            <a href="#"><div class="btn"><img src="../imagenes/log_out.png" alt="Log_out">Cerrar Sesión</div></a>
        </div>
    
    </div>

    <!--Navegador de la página-->
    <div class="navegador">
        <div class="submenu"><a href="../PaginaPrincipal.html"><div class="boton">Nosotros</div></a></div>
        <div class="submenu"><a href="PaginaProductos.php"><div class="boton">Productos</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Contáctanos</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Ubicación</div></a></div>
    </div>

    <!--Cuerpo de la página-->
    <div class="cuerpo">
        <?php
            include "conexion.php";

            $idp=$_POST["idp"];
            if($_POST){
                
                $vcategoria_producto_ingrediente=mysqli_query($db, "SELECT * FROM vcategoria_producto_ingrediente WHERE producto='$idp'") or die ("Fallo en la consulta");
                if(mysqli_num_rows($vcategoria_producto_ingrediente)>0){
                    while($desc=mysqli_fetch_array ($vcategoria_producto_ingrediente) ) {
                        echo "<div class='producto'>";
                            echo "<p>".$desc["producto"]."</p>";
                            echo "<input type='hidden'><input type='image' id='imagen' src='../imagenes/".$desc["foto"]."'>";
                            echo "<p>".$desc["precio"]."€</p>";    
                        echo "</div>";

                        echo "<div class='ingredientes'>";
                                $cadena = $desc["ingredientes"];
                                $array = explode(",", $cadena);
                                foreach ( $array as $palabra ){
                                    echo $palabra."<br><br>";
                                }
                            
                        echo "</div>";
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
                <a href="https://es-es.facebook.com"><img src="../imagenes/facebook.png" alt="facebook" width="50px" height="50px"></a>
                <a href="https://twitter.com"><img src="../imagenes/twitter.png" alt="twitter" width="50px" height="50px"></a>
                <a href="https://www.instagram.com"><img src="../imagenes/instagram.png" alt="instagram" width="50px" height="50px"></a>
                <a href="https://www.pinterest.es"><img src="../imagenes/pinterest.png" alt="pinterest" width="50px" height="50px"></a>
            </div> 
        </div>
    </div>

</body>
</html>