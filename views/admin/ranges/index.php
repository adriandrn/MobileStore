<?php include('views/admin/layout/header.php'); ?>
<?php include('views/admin/layout/sidebar.php'); ?>
<div class="main-panel">
   <div class="content-wrapper">
      <div class="row">
         <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <p class="card-title mb-0">Listado de Gama</p>
                  <a href="<?= APP_URL?>/adminrange/create" class="float-right btn btn-primary btn-rounded btn-fw" role="button">Nueva Gama</a>
                  <div class="table-responsive">
                     <table class="table table-striped table-borderless">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Gama</th>
                              <th>Descripcion</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td class="float-right">
                                 <a href="<?= APP_URL?>/adminrange/create" class="btn btn-outline-behance" role="button">Editar</a>
                                 <a href="" class="btn btn-outline-danger" role="button" onclick="return(confirm('Esta seguro ???'))">Eliminar</a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <?php include('views/admin/layout/footer.php'); ?>