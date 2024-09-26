<?php
include 'inc/header.php';
Session::CheckLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

  $register = $users->userRegistration($_POST);
}

if (isset($register)) {
  echo $register;
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
                  <label for="name">Tu nombre</label>
                  <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Su nombre de usuario</label>
                  <input type="text" name="username"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Dirección de correo electrónico</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Número de teléfono móvil</label>
                  <input type="text" name="mobile"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" name="password" class="form-control">
                  <input type="hidden" name="roleid" value="3" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="register" class="btn btn-success">Registrarse</button>
                </div>


            </form>
          </div>


        </div>
      </div>



  <?php
  include 'inc/footer.php';

  ?>
