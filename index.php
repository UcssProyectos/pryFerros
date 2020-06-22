<?php 
session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: Vista/pagPrincipalPrueba.php');
    }else{
        header('location: Vista/pagLoginPrueba.php');
    }

//prueba 2
?>