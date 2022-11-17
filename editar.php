<?php

    include("conexion.php");

    //print_r($_GET);

    $id = $_GET["id"];

    $consulta = "SELECT * FROM usuarios WHERE id = " . $id;

    $query = $bd->prepare($consulta);
    $query->execute();

    $usuario = $query->fetchAll();


?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Editar Usuario</title>
        
        <link rel="stylesheet" href="style.css" type="text/css">
        <style>
             body{
                padding: 20px;
               
            }
        </style>
        
    </head>
    
    <body>
        
        <h1>Editar Usuario</h1>
        
        <form action="editar_respuesta.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre" value="<?php echo $usuario[0]["nombre"]; ?>"><br><br>
            
            <div>Correo</div>
            <input type="text" name="correo" value="<?php echo $usuario[0]["correo"]; ?>"><br><br>
            
            <div>Clase</div>
            <input type="text" name="curso" value="<?php echo $usuario[0]["curso"]; ?>"><br><br>
            
            <div>Contraseña</div>
            <input type="text" name="password" value="<?php echo $usuario[0]["pass"]; ?>"><br><br>
            
            <input type="hidden" name="id" value="<?php echo $usuario[0]["id"]; ?>">
            
            <button>Modificar Usuario</button>
            
        </form>
    
    </body>
    
</html>




