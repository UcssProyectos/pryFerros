<?php

session_start();
if (isset($_SESSION["login"])) {

    header('location: ../Vista/pagPrincipal.php');
    
} else {

    include_once '../Modelo/Conexion.php';
    $obj = new Conexion();
    $mensaje = "";
    if (isset($_POST["envia"])) {
        $vec = $obj->Login($_REQUEST["txtusr"], $_REQUEST["txtpas"]);
        if (count($vec) == 0)
            $mensaje = "Usuaro o Clave incorrecto";
        else {
            $vece[] = [$_REQUEST["txtusr"], $_REQUEST["txtpas"]];
            $_SESSION["login"] = $vece;
            header("location: ../Vista/pagPrincipal.php?id=$vec[0]");
        }
    }
}

             
            