<?
    session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería</title>
    <link rel="shortcut icon" href="./imagenes/favicon.ico"/>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <main>
        <div class="contenedor">
            <!--Contenedor trasero del Login y Registrer-->
            <div class="caja_trasera">
                <!--Caja trasera del login-->
                <div class="caja_trasera_login">
                    <h3>¿Tienes una cuenta?</h3>
                    <p>Puedes iniciar sesión</p>
                    <button id="btn_login" name="btn_login">Iniciar sesión</button>
                </div>
                <!--Caja trasera del register-->
                <div class="caja_trasera_register">
                    <h3>¿No tienes una cuenta?</h3>
                    <p>Puedes registrarte</p>
                    <button id="btn_register" name="btn_register">Registrarse</button>
                </div>
            </div>

            <!--Contenedor delantero de Login y de Register-->
            <div class="contenedor_login_register">
                <!--Formulario de Login-->
                <form action="php\login.php" method="post" class="formulario_login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" name="usuario" placeholder="Nombre de usuario" required>
                    <input type="email" name="email" placeholder="Correo Electrónico" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <button type="submit">Iniciar sesión</button>
                </form>
                <!--Formulario de Register-->
                <form action="php\registro.php" method="post" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="text" name="apellido1" placeholder="Primer apellido" required>
                    <input type="text" name="apellido2" placeholder="Segundo apellido" required>
                    <input type="text" name="usuario" placeholder="Nombre de usuario" required>
                    <input type="email" name="email" placeholder="Correo Electrónico" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <button type="submit">Registrarse</button>
                </form>
            </div>

        </div>
    </main>
    <!--Archivo js-->
    <script src="js\login.js"></script>
</body>
</html>