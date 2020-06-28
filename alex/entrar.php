<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="estilos2.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

</head>
<body>
<?php require 'header.php'?>

    <h1>Ingresar </h1>

    <form action="entrar.php" method="post"></form>
    
    <input type="text" name="correo" placeholder="Ingresa tu email">
        <input type="password" placeholder="Ingresa tu contraseña">
           <input type="submit" value="Send">
    </body>
</html>