# Proyecto PFC

Desarrollo de una página web dinámica de una panadería.

### Descrición del proyecto:

La página web está desarrollada en un servidor local, dentro del repositorio PFC, el cual está estructurado de la siguiente manera:

* La carpeta **css**: Donde se encuentran los archivos para dar estilos a la página web (diseño responsive, modo claro/oscuro).

* La carpeta **imagenes**: Donde se encuentran todas las imágenes usadas en la página web. 
* La carpeta **js**: Donde se encuentran los archivos creados en lenguaje JavaScript.
* La carpeta **php**: Donde se encuentran los archivos creados en lenguaje PHP.
  * **conexion.php**: Se crea la conexión con la base de datos.
  
  * **PaginaProductos.php**: Muestra las categorías de productos que se sirven en la panadería.
  * **detalles.php**: Muestra los productos que hay en cada categoría.
  * **detalles_producto.php**: Muestra el producto, el precio y los ingredientes del producto.
  * **registro.php**: Recoge los datos del formulario (login_formulario.php) y los inserta en la base de datos, si los inserta correctamente te llevará a la página principal de la web (PaginaPrincipal.html), y si ha ocurrido un error en el registro te devolverá a la página del formulario (login_formulario.php). Consta de varias validaciones como:
    * Contraseña encriptada.
    * Verificación de que la contraseña no tenga una longitud menor de 8 caracteres.
    * Verificación que el correo electrónico no esté ya registrado.
    * Verificación de que el nombre de usuario no esté ya registrado. 
  * **login.php**: Recoge los datos del formulario (login_formulario.php) y comprueba que existen en la base de datos, si existen te llevará a la página principal de la web (PaginaPrincipal.html), de lo contrario, si no existe el usuario te devolverá a la página del formulario (login_formulario.php).
  * **logout.php**: Cerrará la sesión y te devolverá a la página principal de la página web (PaginaPrincipal.html).
  * **comentarios.php**: Hay un formulario que te permite introducir un comentario anónimo y debajo se mostrarán los comentarios existentes.
  * **nuevo_coment.php**: Esta página introduce el nuevo comentario a la base de datos y te señala que tu comentario se ha introducido correctamente y tiene un enlace que te llevará a la página de los comentarios.
* **PaginaPrincipal.html**: Muestra una descripción del establecimiento.
* **contacto.html**: Muestra la ubicación y los datos de contacto del negocio.
* **login_formulario.php**: Te permite iniciar sesión o registrarte en la página web.
* **panaderia_pfc.sql**: Base de Datos donde se guardan los productos de la página, los comentarios y los usuarios registrados de la página.
<br>

### Requisitos del repositorio:

* Recursos hardware:
  * Un navegador como el Opera GX, Opera, Google Chrome o Microsoft Edge, aunque no debería dar problemas con cualquier otro navegador.
  * Conexión a Internet.

* Recursos software:
  * Tener un sistema operativo Windows.
  * Tener descarga/instalación de XAMPP.
  * Descarga e importación de la Base de Datos.
  * Descarga del código fuente de GitHub.
<br>

> El proyecto ha sido creado usando:
> >Git para Windows 64-bit version 2.36.1
>
> >XAMPP para Windows 64-bit 8.1.6 (PHP 8.1.6)
>
> >Visual Studio Code para Windows 64-bit version 2.36.1
