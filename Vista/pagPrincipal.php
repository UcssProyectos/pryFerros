<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sesion iniciada</title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../css/style1.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <style>

            body{
                background: url(../Img/fosn.jpg) no-repeat center center fixed;
                background-size: cover;
            }

            .welcome{
                width: 100%;
                max-width: 500px;
                margin: auto;
                margin-top: 100px;
                background: rgba(0,0,0,0.6);
                text-align: center;
                padding: 20px;
            }

            .welcome img{
                width: 120px;
                height: 120px;
                text-align: center;
            }

            .welcome h1{
                font-size: 50px;
                color: white;
                font-weight: 100;
                margin-top: 20px;
            }
            .welcome h2{
                font-size: 50px;
                color: white;
                font-weight: 100;
                margin-top: 20px;
            }
            .welcome h3{
                font-size: 20px;
                color: white;
                font-weight: 100;
                margin-top: 20px;
            }
            .welcome h4{
                font-size: 15px;
                color: black;

                font-weight: 100;
                margin-top: 8px;
            }
            .welcome a{
                display: block;
                margin-top: 40px;
                font-size: 20px;
                padding: 10px;
                border: 1px solid white;
            }

            .welcome a:hover{
                color: black;
                background: white;
            }


        </style>

    </head>
    <body>
        <?php
        include_once '../Controlador/modPrincipal.php';
        ?>
        <div class="welcome">
            <img src="../Img/02.png" >
            <h1>Bienvenido Usuario</h1>

            <center>
                <table>
                    <tr><td><h3>Usuario:<?= $vec[1] ?></h3>
                    <tr><td><h3>Correo:<?= $vec[2] ?></h3>
                </table>
                <a href="pagEspecialidad.php"><h4>Especialidades</h4></a>
                <a href="../cerrar_sesion.php"><h4>Cerrar sesion</h4></a>
            </center>  
        </div>
    </body>
</html>