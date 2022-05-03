<?php
    $db = mysqli_connect("localhost", "root", "", "panaderia_pfc") or die('Fail');
    
    if ($db->connect_error) { 
        die("La conexión ha fallado: ".$db->connect_error); 
    }

    if (!$db->set_charset("utf8")) { 
        die("Error mostrando el conjunto de caracteres utf8"); 
    }
?>