<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ingreso</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= APP_URL ?>assets/css/style.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <?php if(isset($_SESSION['register-success'])):?>
    <div class="alert bg-success position-absolute px-3 py-2 text-light" style="font-size:20px;right:15px;top:15px;z-index:1000;">
      Registro exitoso
    </div>
  <?php endif;?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="../assets/img/logo.png" alt="logo" class="">
              </div>
              <h4>Bienvenido</h4>
              <h6 class="font-weight-light">Disfruta tu estadia</h6>
              <?php if(isset($_SESSION['login-error'])):?>
                  <span class="text-danger">(<?=$_SESSION['login-error']?>)</span>
                <?php endif;?>
              <form class="pt-3" action="<?= APP_URL ?>authentication/loginStore" method="POST">
                <div class="form-group" style="height: 50px;">
                  <label for="exampleInputEmail">Correo electronico
                    <?php if(isset($_SESSION['login']['email'])):?>
                      <span class="text-danger">(<?=$_SESSION['login']['email']?>)</span>
                    <?php endif;?>
                  </label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-sm border-left-0" name="email" value="<?=isset($_SESSION['data']) ? $_SESSION['data']['email'] : ""?>" id="exampleInputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group" style="height: 50px;">
                  <label for="exampleInputPassword">Contraseña
                    <?php if(isset($_SESSION['login']['password'])):?>
                      <span class="text-danger">(<?=$_SESSION['login']['password']?>)</span>
                    <?php endif;?>
                  </label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-sm border-left-0" name="password" id="exampleInputPassword" placeholder="Contraseña">
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="#" class="auth-link text-black">Olvido su contraseña?</a>
                </div>
                <div class="my-2">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium ">INGRESAR</button>
                </div>
                <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="fab fa-facebook-f mr-2"></i>Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                    <i class="fab fa-google mr-2" href="https://www.google.com"></i>Google
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  No tienes una cuenta? <a href="<?= APP_URL ?>authentication/register" class="text-primary">Crear</a>
                </div>
              </form>
              <?php Utils::deleteVars();?>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <img src="../assets/img/auth/login-bg.jpg" height="100%" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>