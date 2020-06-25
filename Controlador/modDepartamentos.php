<?php

session_start();

if (isset($_SESSION["login"])) {
    include_once '../Modelo/Conexion.php';
    $obj = new Conexion();
    $vec = $obj->Departamentos();
} else {
    header('location: ../Vista/pagLogin.php');
}
