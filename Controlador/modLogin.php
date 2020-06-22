        <?php

             include_once '../Modelo/Conexion.php';
             
              $obj=new Conexion();
              $mensaje="";
              if(isset($_POST["envia"])){
                  $vec=$obj->Login($_REQUEST["txtusr"], $_REQUEST["txtpas"]);
                  if(count($vec)==0)
                      $mensaje="Usuaro o Clave incorrecto";
                  else{
                      header("location: pagPrincipalPrueba.php?id=$vec[0]");
                  }
              }

             
            
