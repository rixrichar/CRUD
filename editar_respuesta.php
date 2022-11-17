<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $email = $_POST["correo"];
    $course = $_POST["curso"];
    $pass = $_POST["password"];
    $id = $_POST["id"];

    $consulta = "UPDATE usuarios SET nombre = '" . $name . "', correo = '" . $email. "', curso = '" . $course . "', pass = '" . $pass . "' WHERE id = " . $id;

    //echo $consulta;

    $query = $bd->prepare($consulta);

    $query->execute();

    header("Location:ver.php");

    
?>