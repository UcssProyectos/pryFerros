<?php
    session_start();
       include_once '../Modelo/Conexion.php';
             $obj=new Conexion();
             $id=$_REQUEST["id"];
             $vec=$obj->DetUsu($id);
