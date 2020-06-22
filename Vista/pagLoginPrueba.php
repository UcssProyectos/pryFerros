<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sitio Web</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../icon/style.css">
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
   <?php
   include_once '../Controlador/modLogin.php';
   
   ?>
    <div class="container-form" style="border-radius: 40px">
        <div class="header">
            <div class="login-box">
                
                <img src="../Img/logo.png" class="avatar" alt="Avatar Image" >
                
            </div>
            <div class="menu">
                <a href="pagLoginPrueba.php"><li class="module-login active">Iniciar Sesión</li></a>
                <a href="pagRegistroPrueba.php"><li class="module-register">Registrarse</li></a>
            </div>
        </div>
        
        <form action="" method="post" class="form">
            <div class="welcome-form"><h2>Iniciar</h2><h2>Sesión</h2></div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="txtusr" font="#F44C30">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="txtpas">
            </div>
            
            <button type="submit" name="envia">Ingresare<label class="lnr lnr-chevron-right"></label></button>
            <center>
                <label type="text" style="color: red;font-size: 1em;"><?= $mensaje ?></center>
        </form>
    </div>
    
    <script src="../js/jquery.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
