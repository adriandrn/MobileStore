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
                           <h4 class="card-title">Registro de tipo de Gama</h4>
                           <p class="card-description">
                              Crear nueva gamas
                           </p>
                           <form action=" method=" POST" class="forms-sample">
                              <input type="hidden" name="id_usuario" value="">
                              <div class="form-group">
                                 <label for="gama">Tipo de Gama</label>
                                 <input name="" value="" type="text" class="form-control" id="app" placeholder="Introduzca la gama">
                              </div>

                              <div class="form-group">
                                 <label for="des">Descripcion</label>
                                 <input name="des value="" type=" text" class="form-control" id="apm" placeholder="Introduzca la Descripcion">
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