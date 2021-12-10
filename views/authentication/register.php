<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="../assets/img/logo.png" alt="logo">
              </div>
              <h4>Registro de usuario</h4>
              <form class="pt-3">
                <div class="form-group" style="height: 50px;">
                  <label>Nombres</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-sm border-left-0" placeholder="Nombre completo">
                  </div>
                </div>
                <div class="form-group" style="height: 50px;">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="far fa-envelope-open text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-sm border-left-0" placeholder="Ingrese su email">
                  </div>
                </div>
                <div class="form-group" style="height: 50px;">
                  <label>Telefono</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-phone-alt text-primary "></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-sm border-left-0" placeholder="Ingrese nu número de telefono">
                  </div>
                </div>
                <div class="form-group" style="height: 50px;">
                  <label>Direccion</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-map-marked-alt text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-sm border-left-0" placeholder="Ingrese su direccion">
                  </div>
                </div>
                <div class="form-group" style="height: 50px;">
                  <label>Contraseña</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-sm border-left-0" id="exampleInputPassword" placeholder="Contraseña">
                  </div>
                </div>
                <div class="form-group" style="height: 50px;">
                  <label>Contraseña</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fas fa-unlock-alt text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-sm border-left-0" id="exampleInputPassword" placeholder="Contraseña">
                  </div>
                </div>
                <div class="mb-4">
                  <div class="">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="">
                      <span class="">Estoy de acuerdo con los terminos y condiciones</span>

                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium" href="<?= APP_URL ?>home/index">REGISTRAR</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Ya tienes una cuenta? <a href="<?= APP_URL ?>authentication/login" class="text-primary">Ingresar</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <img src="../assets/img/auth/register-bg.jpg" height="100%" alt="">
          </div>
        </div>

      </div>

    </div>
  </div>
</body>

</html>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
