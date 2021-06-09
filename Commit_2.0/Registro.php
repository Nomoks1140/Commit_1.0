<?php
$conexion = mysqli_connect('localhost','root','','usuario')
or die(mysqli_error($mysqli));

insertar($conexion);

function insertar($conexion){
    $email = $_POST['email'];
    $pasword = $_POST['pasword'];

    $consulta = "INSERT INTO usuarios(email, pasword)
    VALUES ('$email', '$pasword')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}
?> 