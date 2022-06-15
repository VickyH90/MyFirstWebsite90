<?php

include ("BD.php");

if (isset($_POST['save'])) {
    
    $ID_cliente = $_POST ['ID_cliente'];
    $nombre_cliente = $_POST ['nombre_cliente'];
    $apellidos_cliente = $_POST ['apellidos_cliente'];
    $tel = $_POST ['tel'];
    $direcc_cliente = $_POST ['direcc-cliente'];
    $email = $_POST ['email'];
    $fn = $_POST ['fn'];

    $query = "INSERT INTO 'tbl_cliente'('ID_cliente', 'nombre_cliente', 'apellidos_cliente', 'tel', 'direcc_client', 'email', 'fn') VALUES ('$ID_cliente','$nombre_cliente','$apellidos_cliente','$tel','$direcc_cliente','$email','$fn')"

    $result = mysqli_query ($bd, $query);

if (!$result) {
    die ("registro fallido");
}

else {
    header ("location: inicio.php");
}

}

?>