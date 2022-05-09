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
        <div class="submenu"><a href="#"><div class="boton">Contáctanos</div></a></div>
        <div class="submenu"><a href="#"><div class="boton">Ubicación</div></a></div>
    </div>

    <!--Cuerpo de la página-->
    <div class="contenido">

        <?php
            include "conexion.php";
            
            $categoria=mysqli_query($db, "SELECT * FROM tcategoria") or die ("Fallo en la consulta");
                if(mysqli_num_rows($categoria)>0){
                    while($cate=mysqli_fetch_array ($categoria) ) {

                        echo "<div class='btn_categoria'><form method='post' action='detalles.php'>";
                            echo "<p><span>Categoria: </span>".$cate["categoria"]."</p><br>";
                            echo "<input type='hidden'><input type='image' id='imagen' src='imagenes/".$cate["foto"]."'>";
                            echo "<input type='submit' id='idc' name='idc' value='".$cate["categoria"]."'>";
                        echo "</form></div>";

                    }
                } else {
                    echo "Error Categoria";
                }

            mysqli_free_result ($categoria);
            mysqli_close ($db);

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