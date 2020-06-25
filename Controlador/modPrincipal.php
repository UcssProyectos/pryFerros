<?php

session_start();
if (isset($_SESSION["login"])) {
    include_once '../Modelo/Conexion.php';
    $vece = $_SESSION["login"];
    $obj = new Conexion();
    $vect = $_SESSION["login"];
    foreach ($vect as $k => $d) {
        $vecl = $d;
    }
    $vecp = $obj->ObtenerId($vecl[0]);
    $id = $vecp[0];
    $vec = $obj->DetUsu($id);
} else {
    header('location: ../Vista/pagLogin.php');
}
