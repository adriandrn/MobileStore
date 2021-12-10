<?php include('views/admin/layout/header.php'); ?>
<?php include('views/admin/layout/sidebar.php'); ?>
<div class="main-panel">
   <div class="content-wrapper">
      <div class="row">
         <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <p class="card-title mb-0">Lista de Usuarios</p>
                  <a href="<?= APP_URL ?>adminuser/create" class="float-right btn btn-primary btn-rounded btn-fw" role="button">Nuevo Usuario</a>
                  <div class="table-responsive">
                     <table class="table table-striped table-borderless">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>CI</th>
                              <th>Nombres</th>
                              <th>Email</th>
                              <th>Telefono</th>
                              <th>Rol</th>
                              <th>Direccion</th>
                              <th>Contraseña</th>
                              <th colspan="2"></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php for ($i = 0; $i < 50; $i++) : ?>
                              <tr>
                                 <td><?= $i ?></td>
                                 <td>AAAA</td>
                                 <td>AAAA</td>
                                 <td>MMMM</td>
                                 <td>MMMM</td>
                                 <td>MMMM</td>
                                 <td>NNNNNN</td>
                                 <td>82458845</td>
                                 <td class="float-right">
                                    <a href="<?= APP_URL ?>adminuser/edit" class="btn btn-outline-behance" role="button">Editar</a>
                                 </td>
                                 <td>
                                    <a href="<?= APP_URL ?>adminuser/delete" class="btn btn-outline-danger" role="button" onclick="return(confirm('Esta seguro ???'))">Eliminar</a>
                                 </td>
                              </tr>
                           <?php endfor; ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <?php include('views/admin/layout/footer.php'); ?>