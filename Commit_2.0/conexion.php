<?php
$conexion = mysqli_connect('localhost','root','','persona')
or die(mysqli_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $usuario = $_POST['usuario'];
    $Tdoc = $_POST['Tdoc'];
    $numero = $_POST['numero'];
    $fecha   = $_POST['fecha'];
    $email = $_POST['email'];
    $pasword = $_POST['pasword'];

    $consulta = "INSERT INTO personas(usuario, Tdoc, numero, fecha, email, pasword)
    VALUES ('$usuario','$Tdoc', '$numero','$fecha', '$email', '$pasword')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
?> 