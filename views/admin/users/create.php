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
                           <h4 class="card-title">Registro de Administradores</h4>
                           <p class="card-description"> Crear nuevo Administrador </p>
                           <form action="" method="POST" class="forms-sample">
                              <input type="hidden" name="id_usuario" value="">
                              <div class="form-group">
                                 <label for="ci">CI</label>
                                 <input name="ci" value="" type="text" class="form-control" id="app" placeholder="Introduzca ceudla de identidad">
                              </div>

                              <div class="form-group">
                                 <label for="name">Nombres</label>
                                 <input name="name" value="" type="text" class="form-control" id="apm" placeholder="Introduzca su nombre complerto">
                              </div>

                              <div class="form-group">
                                 <label for="email">Correo</label>
                                 <input name="email" value="" type="text" class="form-control" id="cor" placeholder="Introduzca Correo">
                              </div>

                              <div class="form-group">
                                 <label for="phone">Telefono</label>
                                 <input name="phone" value="" type="text" class="form-control" id="nombre" placeholder="Introduzca telefono">
                              </div>

                              <div class="form-group">
                                 <label for="address">Direccion</label>
                                 <input name=address" value="" type="email" class="form-control" id="ci" placeholder="Introduzca Cedula Identidad">
                              </div>

                              <input type="text" name="role" value="Seller" hidden>

                              <div class="form-group">
                                 <label for="pwd">Password</label>
                                 <input name="password" value="" type="password" class="form-control" id="pwd" placeholder="Introduzca Password">
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