<!DOCTYPE html>
<html lang="es">

<heade>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CEMAF Administrador</title>
  <script src="<?= APP_URL ?>assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= APP_URL ?>assets/admin/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= APP_URL ?>assets/admin/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= APP_URL ?>assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?= APP_URL ?>assets/admin/js/dataTables.select.min.js"></script>
  <script src="<?= APP_URL ?>assets/admin/js/off-canvas.js"></script>
  <script src="<?= APP_URL ?>assets/admin/js/hoverable-collapse.js"></script>
  <script src="<?= APP_URL ?>assets/admin/js/template.js"></script>
  <script src="<?= APP_URL ?>assets/admin/js/settings.js"></script>
  <script src="<?= APP_URL ?>assets/admin/js/todolist.js"></script>
  <script src="<?= APP_URL ?>assets/admin/js/dashboard.js"></script>
  <script src="<?= APP_URL ?>assets/admin/js/Chart.roundedBarCharts.js"></script>
  <link rel="stylesheet" href="<?= APP_URL ?>assets/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= APP_URL ?>assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= APP_URL ?>assets/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= APP_URL ?>assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= APP_URL ?>assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="<?= APP_URL ?>views/admin/js/select.dataTables.min.css">
  <link rel="stylesheet" href="<?= APP_URL ?>assets/admin/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="<?= APP_URL ?>assets/admin/images/icono2.png" />
</heade>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="<?= APP_URL ?>admin/index"><img src="<?= APP_URL ?>assets/admin/images/icono2.png" class="mr-2" alt="logo" />CEMAF</a>
        <a class="navbar-brand brand-logo-mini" href="<?= APP_URL ?>admin/index"><img src="<?= APP_URL ?>assets/admin/images/icono2.png" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            </a>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?= APP_URL ?>assets/admin/images/faces/face28.jpg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Ajustes
              </a>
              <a class="dropdown-item" href="<?= APP_URL ?>home/index" > 
                <i class="ti-power-off text-primary"></i>
                Salir
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">Color barra lateral</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Claro
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Oscuro
          </div>
          <p class="settings-heading mt-2">Color barra superior</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>