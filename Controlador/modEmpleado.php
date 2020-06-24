<?php

include_once '../Modelo/Conexion.php';
$id = $_REQUEST["id"];
$obj = new Conexion();

$vec = $obj->EmpleadoporDepartamento($id);
$veco = $obj->NombreDepartamentos($id);
