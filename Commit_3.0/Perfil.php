<?php

class Perfil{
     
    var $Cargo;
    var $Nombre;
    var $Apellidos;
    var $Tdoc;
    var $Ndoc;
    var $Ciudad;
    var $Email;
    var $Telefono;
     
    public function __construct($par1, $par2, $par3, $par4, $par5, $par6, $par7, $par8)
    {
        $this->Cargo = $par1;
        $this->Nombre = $par2;
        $this->Apellidos = $par3;
        $this->Tdoc = $par4;
        $this->Ndoc = $par5;
        $this->Ciudad = $par6;
        $this->Email = $par7;
        $this->Telefono = $par8;
    }
     
    function asignarCargo($Cargo){

        return $this->Cargo;
    }
     
    function asignarNombre($Nombre){

        $this->Nombre = $Nombre;
    }
     
    function asignarApellidos($Apellidos){
        $this->Apellidos = $Apellidos;
    }
     
    function asignarTdoc($Tdoc){
        $this->Tdoc = $Tdoc;
    }
     
    function asignarNdoc($Ndoc){
        return $this->Ndoc = $Ndoc;
    }
    
    function asignarCiudad($Ciudad){
        $this->Ciudad = $Ciudad;
    }

    function asignarEmail($Email){
        $this->Email = $Email;
    }

    function asignarTelefono($Telefono){
        $this->Telefono = $Telefono;
    }
    function getCargo()
    {return $this->Cargo;}
    function getNombre()
    {return $this->Nombre;}
    function getApellidos()
    {return $this->Apellidos;}
    function getTdoc()
    {return $this->Tdoc;}
    function getNdoc()
    {return $this->Ndoc;}
    function getCiudad()
    {return $this->Ciudad;}
    function getEmail()
    {return $this->Email;}
    function getTelefono()
    {return $this->Telefono;}
}
?>
<!DOCTYPLE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/542680d256.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="StyleSheet" href="Perfil.css" type="text/css">
    <title>Perfil Del Usuario</title>
</head>
<body>
<!--Encabezado-->
    <header>
    <img src="LOGO.png" alt="" height="200px" width="auto" class="imag">   
    <h1><br><br>Control De <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Seguridad Privada</h1>
    <p>Bienvenido:Lenny Steban Patiño Plata<br>
        <button tipe="sumbit"><a class="link" href="Actualizar_datos.php">Actualizar Datos</a></button>
        <button tipe="sumbit"><a class="link" href="Iniciar Sesion.html">Cerrar Sesion</a></button></p>
        <br></header>
<!--Menu o Navegacion-->
    <div class="vertical">
        <section id="menu">
        <ul>
            <i class="fas fa-home fa-2x">
                <a href="#">Inicio</a></i>
            <i class="fas fa-user fa-2x">
                <a href="Perfil.php">Perfil</a></i>
            <i class="fas fa-building fa-2x">
                <a href="BuscarEmpresa.html">Buscar Empresa</a></i>
            <i class="fas fa-search fa-2x">   
                <a href="Procesos.html">Consultar aplicaciones</a></i> 
            <i class="fas fa-file-contract fa-2x">
                <a href="Perfil.html">Consultar contratos</a></i>
            <i class="fas fa-id-card-alt fa-2x">
                <a href="PROYECTO2.html">Realizar encuesta</a></i>
        </ul>
        </section>
    </div>
<!--Formulario-->
<?php

$Perfil1 = new Perfil('Manejador De Medios','Lenny Steban','Patiño Plata','C.C','1.000.591.739','Bogotá','lennyz0689@gmail.com','301 561 0422');
$Perfil2 = new Perfil('Vigilante','Jahelin Nicol','Arias Rodriguez','C.C','1.000.688.238','Bogotá','jahelinicol01@gmail.com','304 660 4755');
$Perfil3 = new Perfil('Escolta','Johan Sebastian','Matinez Estupiñan','C.C','1.001.300.073','Bogotá','jsmartinez370@misena.edu.co','312 606 8670');
$Perfil4 = new Perfil('Manejador De Medios','Katherine Julieth','Cifuentes Piña','C.C','1.007.472.902','Bogotá','samayju105@gmail.com','302 343 2003');
$Perfil5 = new Perfil('Escolta','Daniel Andres','Pineda Castiillo','C.C','1.000.603.963','Soacha','nomoks@gmail.com','319-426-7604');
$Perfil6 = new Perfil('Vigilante','Jorge Enrique','Buitrago Muñoz','C.C','1001044226','Bogotá','jorgeebm13@gmail.com','310 693 5159');
?>
    <form action="" method="">
    <h3><br><i class="far fa-address-book"></i>Cargo:
    <input type="text" name="cargo" value="<?php echo $Perfil1->getCargo()?>"></h3>
    <h3><br><i class="far fa-user icon"></i>Nombre:
    <input type="text" name="nombre" value="<?php echo $Perfil1->getNombre()?>"></h3>
    <h3><br><i class="far fa-user icon"></i>Apellidos:    
    <input type="text" name="apellidos" value="<?php echo $Perfil1->getApellidos()?>"></h3>
    <h3><br><i class="far fa-address-card"></i>Tipo De Documento:
    <input type="text" name="apellidos" value="<?php echo $Perfil1->getTdoc()?>"></h3>
    <h3><br><i class="far fa-check-square"></i>Numero De Documento:   
    <input type="text" name="numero" value="<?php echo $Perfil1->getNdoc()?>"></h3>
    <h3><br><i class="far fa-building"></i>Ciudad:   
    <input type="text" name="ciudad" value="<?php echo $Perfil1->getCiudad()?>"></h3>
    <h3><br><i class="far fa-envelope"></i>E-mail:    
    <input type="email" name="email" value="<?php echo $Perfil1->getEmail()?>"></h3>
    <h3><br><i class="fa fa-mobile" aria-hidden="true"></i>Telefono:   
    <input type="text" name="telefono" value="<?php echo $Perfil1->getTelefono()?>"></h3>
</form>
</body>
</html>