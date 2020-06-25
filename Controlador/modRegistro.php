<?php

session_start();
include_once '../Modelo/Conexion.php';

$x = new Conexion();
$mensaje = "";
if (isset($_POST['Enviar'])) {
    if (empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['clave2'])) {
        $mensaje = "Rellene los datos faltantes";
    } else {
        if ($_REQUEST["clave"] == $_REQUEST["clave2"]) {
            $x->GrabaUser($_REQUEST["usuario"], $_REQUEST["correo"], $_REQUEST["clave"]);
            header("location: ../Vista/pagLogin.php");
        } else {
            $mensaje = "Claves no coinciden";
        }
    }
}
       