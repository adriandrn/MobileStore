<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="shortcut icon" href="<?= APP_URL ?>assets/img/icon/icon.ico" type="image/x-icon">
   <link rel="stylesheet" href="<?= APP_URL ?>assets/bootstrap/css/bootstrap.css" />
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="<?= APP_URL ?>assets/vendors/FlexSlider/jquery.flexslider-min.js"></script>
   <link rel="stylesheet" href="<?= APP_URL ?>assets/vendors/FlexSlider/flexslider.css">
   <link rel="stylesheet" type="text/css" href="<?= APP_URL ?>assets/css/styles.css">
   <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Open+Sans:wght@300&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <title>Catalogo</title>
</head>

<body>
   <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
         <div class="container-fluid">
            <a class="navbar-brand" href="<?= APP_URL ?>home/index"><img src="<?= APP_URL ?>assets/img/logo.svg" alt="" style="width: 50px" />Phone</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
               <ul class="navbar-nav mx-auto g-0 gap-0">
                  <li class="nav-item">
                     <a class="nav-link active" href="<?= APP_URL ?>home/index">Inicio</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="<?= APP_URL ?>product/index">Productos</a>
                  </li>

                  <li class="nav-item">
                     <a class="nav-link" href="<?= APP_URL ?>brand/index">Marcas</a>
                  </li>                

                  <li class="nav-item">
                     <a class="nav-link" href="<?= APP_URL ?>home/sends">Sobre nosotros</a>
                  </li>

               </ul>
               <?php if(!Utils::auth()):?>
                  <div class="">
                     <a href="<?= APP_URL ?>authentication/register" class="btn btn-outline-light me-2">Registro</a>
                     <a href="<?= APP_URL ?>authentication/login" class="btn btn-outline-light me-2">Ingresar</a>
                  </div>
               <?php endif;?>
            </div>
            <?php if(Utils::auth()):?>
            <div class="dropdown text-end ">
               <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="me-1"><?=Utils::auth()->name?></span><img src="<?= APP_URL ?>assets/img/user - grey.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
               </a>
               <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Perfil</a></li>
                  <li>
                     <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="<?=APP_URL?>authentication/logout">Salir</a></li>
               </ul>
            </div>
            <?php endif;?>
         </div>
      </nav>
   </header>