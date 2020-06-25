<?php

session_start();

if (isset($_SESSION["login"])) {
    include_once 'Modelo/Conexion.php';
    $vect = $_SESSION["login"];
    $obj = new Conexion();
    foreach ($vect as $k => $d) {
        $vecl = $d;
    }
    $vec = $obj->ObtenerId($vect[0]);
    $id = $vec[0];
    header("location: Vista/pagPrincipal.php?id=$id");
} else {
    header('location: Vista/pagLogin.php');
}
