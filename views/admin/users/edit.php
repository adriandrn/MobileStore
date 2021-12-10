<?php include('views/admin/layout/header.php'); ?>
<?php include('views/admin/layout/sidebar.php'); ?>
<div class="main-panel">
   <div class="content-wrapper">
      <div class="row">
         <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <div class="col-12 grid-margin stretch-card">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title">Editar Administradores</h4>
                           <p class="card-description">
                              Editar registro Administrador
                           </p>
                           <form action="" method="POST" class="forms-sample">
                              <input type="hidden" name="id_usuario" value="">
                              <div class="form-group">
                                 <label for="app">Apellido Paterno</label>
                                 <input name="ap_paterno" value="" type="text" class="form-control" id="app" placeholder="Introduzca Ap Paterno">
                              </div>

                              <div class="form-group">
                                 <label for="apm">Apellido Materno</label>
                                 <input name="ap_materno" value="" type="text" class="form-control" id="apm" placeholder="Introduzca Ap Materno">
                              </div>

                              <div class="form-group">
                                 <label for="nombre">Nombres</label>
                                 <input name="nombres" value="" type="text" class="form-control" id="nombre" placeholder="Introduzca Nombres">
                              </div>

                              <div class="form-group">
                                 <label for="ci">Cedula de Identidad</label>
                                 <input name="ci" value="" type="text" class="form-control" id="ci" placeholder="Introduzca Cedula Identidad">
                              </div>
                              <div class="form-group">
                                 <label for="cor">Correo</label>
                                 <input name="correo" value="" type="text" class="form-control" id="cor" placeholder="Introduzca Correo">
                              </div>
                              <div class="form-group">
                                 <label for="pwd">Password</label>
                                 <input name="password" value="" type="text" class="form-control" id="pwd" placeholder="Introduzca Password">
                              </div>
                              <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                              <a href="" role="button" class="btn btn-light">Cancelar</a>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include('views/admin/layout/footer.php'); ?>