<?php include('views/admin/layout/header.php'); ?>
<?php include('views/admin/layout/sidebar.php'); ?>
<div class="main-panel">
   <div class="content-wrapper">
      <div class="row">
         <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <p class="card-title mb-0">Lista de Productos</p>
                  <a href="<?= APP_URL ?>adminproduct/create" class="float-right btn btn-primary btn-rounded btn-fw" role="button">Nuevo Celular</a>
                  <div class="table-responsive">
                     <table class="table table-striped table-borderless">
                        <thead>
                           <tr>
                              <th>ID</th>
                              <th>Nombre</th>
                              <th>Año</th>
                              <th>Descripcion</th>
                              <th>Imagen</th>
                              <th>Precio de compra</th>
                              <th>Precio de ventas</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>fdsfdwqefs</td>
                              <td>fdsfdwqefs</td>
                              <td>fdsfdwqefs</td>
                              <td>fdsfdwqefs</td>
                              <td>fdsfdwqefs</td>
                              <td>fdsfdwqefs</td>
                              <td>fdsfdwqefs</td>
                              <td class="float-right">
                                 <a href="<?= APP_URL ?>adminproduct/edit" class="btn btn-outline-behance" role="button">Editar</a>
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