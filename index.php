<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CLINICA UMG</title>
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

          <form action="login.php" method="POST" autocomplete="off">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Clinica UMG</p>

            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0"></p>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" placeholder="Ingresa tu Correo Electronico" />
              <label class="form-label" for="usuario">Correo Electronico: </label>
            </div>


            <div class="form-outline mb-3">
              <input type="password" id="contra" name="contra" class="form-control form-control-lg" placeholder="Ingresa tu Contraseña" />
              <label class="form-label" for="contra">Contraseña</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">¿Aun no Tienes una Cuenta?
              <a href="#!" class="link-danger">Regristrate</a>
            </p>

          </form>
        </div>
      </div>
    </div>



  </section>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

</body>

</html>