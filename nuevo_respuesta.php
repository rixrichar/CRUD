<?php
    
    include("conexion.php");

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST["nombre"];
    $email = $_POST["correo"];
    $course = $_POST["curso"];
    $pass = $_POST["password"];

    //Primer Paso - Generar la consulta
    $consulta = "INSERT INTO usuarios (nombre, correo, curso, pass) VALUES ('".$name."', '".$email."','".$course."','".$pass."')";

    //Segundo Paso - Prepara la consulta
    $query = $bd->prepare($consulta);

    //Tercer Paso - Ejecutar la consulta
    $query->execute();

    header("Location:ver.php");

?>