<?php
include 'inc/header1.php';
Session::CheckLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register1'])) {

  $register1 = $empresa->empresaRegistration($_POST);
}

if (isset($register1)) {
  echo $register1;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>registro de empresa </h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="nit">NIT (Sin digito de verificacion)</label>
                  <input type="text" name="nit"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="social">Razon Social</label>
                  <input type="text" name="r_social"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="representante">Representante legal</label>
                  <input type="text" name="r_legal"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" name="password" class="form-control">
                  <input type="hidden" name="roleid" value="2" class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Número de teléfono móvil</label>
                  <input type="text" name="telefono"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="direccion">Direccion</label>
                  <input type="text" name="direccion"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Actividad Economica
                 <select  required name="id_actividad_economica">
                 <option value="1">ACTIVIDAD ARTISTICA DE ENTRETENIMIENTO Y RECREACION <BR><option>
                 <option value="2">ACTIVIDADES DE ATENCION DE LA SALUD HUMANA Y DE ASISTENCIA SOCIAL<option>
                 <option value="3">ACTIVIDADES DE LOS HOGARES INDIVIDUALES EN CALIIDAD DE EMPLEADORES: ACTIVIDADES NO DIFERENCIADAS DE LOS HOGARES <option>
                 <option value="4">ACTIVIDADES DE ORGANIZACIONES Y ENTIDADES EXTRATERRITORIALES<option>
                 <option value="5">ACTIVIDADES DE SERVICIOS ADMINISTRATIVOS Y DE APOYO<option>
                 <option value="6">ACTIVIDADES FINANCIERAS Y DE SEGUROS<option>
                 <option value="7">ACTIVIDADES INMOBILIARIAS<option>
                 <option value="8">ACTIVIDADES NO DEINIDAS<option>
                 <option value="9">ACTIVIDADES PROFESIONALES, CIENTIFICAS Y TECNICAS<option>
                 <option value="10">ADMINISTRACION PUBLICA Y DEFENSA: PLANES DE SEGURIDAD SOCIAL DE AFILIACION OBLIGATORIA<option>
                 <option value="11">AGRICULTURA, GANADERIA, CAZA, SILVICULTURA Y PESCA<option>
                 <option value="12">ALOJAMIENTO Y SERVICIOS DE COMIDA<option>
                 <option value="13">COMERCIO AL PRO MAYOR Y AL POR MENOS<option>
                 <option value="14">CONSTRUCCION<option>
                 <option value="15">DISTRIBUCION DE AGUA: EVACUACION Y TRATAMIENTO DE AGUAS RESIDUALES, GESTION DE DESECHOS Y ACTIVIDADES DE SENEAMIENTO<option>
                 <option value="16">EDUCACION<option>
                 <option value="17">EXPLOTACION DE MINAS Y CANTERAS<option>
                 <option value="18">INDUSTRIAS MANUFACTURERAS<option>
                 </select>
                </div>
                <div class="form-group">
                  <label for="password">Ciudad
                 <select  required name="id_ciudad">
                 <option value="">Seleccione una de las opciones<option>
                 <option value="1">AMAZONAS<option>
                 <option value="2">ANTIOQUIA<option>
                 <option value="3">ARAUCA<option>
                 <option value="4">ATLANTICO<option>
                 <option value="5">BOGOTA D.C<option>
                 <option value="6">BOLIVAR<option>
                 <option value="7">CALDAS<option>
                 <option value="8">CAQUETA<option>
                 <option value="9">CASANARE<option>
                 <option value="10">CAUCA<option>
                 <option value="11">CESAR<option>
                 <option value="12">CHOCO<option>
                 <option value="13">CORDOBA<option>
                 <option value="14">CUNDINAMARCA<option>
                 <option value="15">GUAINIA<option>
                 <option value="16">GUAJIRA<option>
                 <option value="17">GUAVIRE<option>
                 <option value="18">HUILA<option>
                 <option value="19">MAGDALENA<option>
                 <option value="20">META<option>
                 <option value="21">NARIÑO<option>
                 <option value="22">NORTE DE SANTANDER<option>
                 <option value="23">PUTUMAYO<option>
                 <option value="24">QUINDIO<option>
                 <option value="25">RISARALDA<option>
                 <option value="26">SAN ANDRES Y PROVIDENCIA<option>
                 <option value="27">SANTANDER<option>
                 <option value="28">SUCRE<option>
                 <option value="29">TOLIMA<option>
                 <option value="30">VALLE<option>
                 <option value="31">VAUPES<option>
                 <option value="32">VICHADA<option>
                 
                 </select>
                 </div>
               
                <div class="form-group">
                  <label for="password">Departamento
                 <select  required name="id_departamento">
                 <option value="">Seleccione una de las opciones<option>
                 <option value="">ARARACUARA<option>
                 <option value="">EL ENCANTO<option>
                 <option value="">LA CHORREARA <option>
                 <option value="">LA PEDRERA<option>
                 <option value="">LA VISCTORIA<option>
                 <option value="">LETICIA<option>
                 <option value="">MIRITI-PARANA<option>
                 <option value="">PUERTO ARICA<option>
                 <option value="">PUERTO NARIÑO<option>
                 <option value="">PUERTO SANTANDER<option>
                 <option value="">TARAPACA<option>
                 </option>
                 </select>

                 <div class="form-group">
                  <button type="submit" name="register1" class="btn btn-success">Registrarse</button>
                </div>

















            </form>
          </div>


        </div>
      </div>



  <?php
  include 'inc/footer.php';

  ?>
