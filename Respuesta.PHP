<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
    $respuesta="";

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasenia = $_POST['Contrasenia'];
    $confcontra = $_POST['Confcontra'];
    $genero = $_POST['genero'];
    $Nacimiento = $_POST['nacimiento'];

    if($confcontra == $contrasenia) 
    {$respuesta = "Correcto";} 
    else 
    {$respuesta = "Incorrecto";}
    ?>
    <form>
    <center>
     <h1>Respuesta</h1>
    <h2>Hola: <?php echo ($usuario); ?></h2>
    <h2>Tu inicio de sesión a sido: <?= $respuesta ?></h2>

    <h2>Datos registrados:</h2>
    <table>
        <tr>
            <th>Nombre: <?php echo ($nombre); ?></th>
        </tr>
        <tr>
            <th>Usuario: <?php echo ($usuario); ?></th>
        </tr>
        <tr>
            <th>Correo: <?php echo ($correo); ?></th>
        </tr>
        <tr>
            <th>Teléfono: <?php echo ($telefono); ?></th>
        </tr>
        <tr>
            <th>Contraseña: <?php echo ($contrasenia); ?></th>
        </tr>
        <tr>
            <th>Confirmar contraseña: <?php echo ($confcontra); ?></th>
        </tr>
        <tr>
            <th>Género: <?php echo ($genero); ?></th>
        </tr>
        <tr>
            <th>Fecha de nacimiento: <?php echo ($Nacimiento); ?></th>
        </tr>
    </table>
     </center>
    </form>
</body>
</html>