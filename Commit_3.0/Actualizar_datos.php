<!DOCTYPLE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/542680d256.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="StyleSheet" href="Actualizar_datos.css" type="text/css">
    <title>Perfil Del Usuario</title>
</head>
<body>
    <header>
    <img src="LOGO.png" alt="" height="200px" width="auto" class="imag">   
    <h1><br><br>Control De <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seguridad Privada</h1>
    <p>Bienvenido:Lenny Steban Patiño Plata<br>
        <button tipe="sumbit"><a class="link" href="Perfil.html">Cancelar</a></button>
        <button tipe="sumbit"><a class="link" href="Iniciar Sesion.html">Cerrar Sesion</a></button></p>
        <br><br><br><br></header>


    <form class="act" action="" method="">
    <h3><br><i class="fas fa-align-justify"></i>CARGO:
    <input type="text" name="cargo" ></h3>
    <h3><br><i class="far fa-user icon"></i>NOMBRE:
    <input type="text" name="nombre" placeholder="Nombres Completos"></h3>
    <h3><br><i class="far fa-user icon"></i>APELLIDOS:    
    <input type="text" name="apellidos" placeholder="Apellidos Completos"></h3>
    <h3><br><i class="far fa-address-card"></i>TIPO DE DOCUMENTO:
        <select name="documetno"></p>
            <option value="">Seleccione una opcion</option>
            <option value="C.C">CEDULA DE CIUDADANIA</option>
            <option value="C.E">CEDULA DE EXTRANJERIA</option>
            <option value="T.I">TARJETA DE IDENTIDAD</option>
        </select>
    <h3><br><i class="fas fa-address-card"></i>NUMERO DE DOCUMENTO:   
    <input type="number" name="numero" placeholder="Sin Ningun Caracter"></h3>
    <h3><br><i class="fas fa-city"></i>CIUDAD:   
    <input type="text" name="ciudad" placeholder="Residencia Actual"></h3>
    <h3><br><i class="fas fa-at"></i>E-MAIL:    
    <input type="email" name="email" placeholder="Correo Electronico Activo"></h3>
    <h3><br><i class="fas fa-mobile-alt"></i>TELEFONO:   
    <input type="number" name="telefono" placeholder="Fijo o Movil"></h3>
</div>
<button class="guardar" tipe="sumbit"><a class="link1" href="Perfil.php">Actualizar Datos</a></button>
</form>
</body>
</html>
<?php

?>