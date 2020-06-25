<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../icon/style.css">
    <link rel="stylesheet" href="../css/style.css">
      <style>
    .link { color: #FFFFFF; } /* CSS link color */
  </style>
    </head>
    <body>
       
        <?php
        include_once '../Controlador/Cabecera.php';
           include_once '../Controlador/modDepartamentos.php'; 
        ?>
        <center>
            
            <div>
        <table cellpadding="15" cellspacing="15">
        
           <?php
            $cuenta=0;
            
            foreach($vec as $k=>$d){
              ?>
               <td>
                   <a href="pagEmpleado.php?id=<?=$d[0]?>" title="Ir a <?=$d[1]?>" class="link">
                       <center><img src="../Img/<?=$d[0]?>.jpg" height="200" width="200" class="prod-categ"></center>
                       <br><center><h5><?=$d[1]?></h5></center>
                   </a>
            <?php
                $cuenta++;
                if($cuenta%3==0)echo "<tr>";
            } 
           ?>

        </table>
    </div>
</form>
        <a href="../cerrar_sesion.php" title="Cerrar" class="link"><H1>Cerrar Sesion</H1></a>
        </center>
    </body>
</html>