<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/estilos_1.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../icon/style.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <style>
            .link { color: #FFFFFF; } /* CSS link color */
        </style>
        
    </head>
    <body background="../Img/ft.jpg">

        <?php
        include_once '../Controlador/modEmpleado.php';
        ?>
    <center>
        <a href="">
            <div class="logo"><h1><span>LISTA DE EMPLEADOS DEL DEPARTAMENTO: </span><strong><?= $veco[0] ?></strong></h1></div>

        </a>
        <center><br><br><br><br><div><h2></h2></div></center>
        <table class="table table-hover table-dark" style="text-align:center;">
            <tr><th>Codigo<th>Nombre Completo<th>Telefono<th>País<th>Edad<th>Sueldo
                    <?php
                    foreach ($vec as $k => $d) {
                        echo "<tr><td>$d[0]<td>$d[1]<td>$d[2]<td>$d[3]<td>$d[4]<td>S/. $d[5]";
                    }
                    ?>
        </table>
        <a href="pagEspecialidad.php" title="Volver" class="link"><H1>Volver</H1></a>
        <a href="../cerrar_sesion.php" title="Cerrar" class="link"><H1>Cerrar Sesion</H1></a>
    </center>
</body>
</html>
