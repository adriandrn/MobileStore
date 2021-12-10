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
                           <h4 class="card-title">Editar nuevo celular</h4>
                           <p class="card-description">Editar Registro Celular</p>
                           <div class="form-group">
                              <label for="nombre">Nombres</label>
                              <input name="nombres" value="" type="text" class="form-control" id="nombre" placeholder="Introduzca Nombres">
                           </div>
                           <form action="" method="POST" class="forms-sample">
                              <input type="hidden" name="" value="">
                              <div class="form-group">
                                 <label for="ano">Año</label>
                                 <select name="" class="form-control" id="us">
                                    <option value=""> Seleccione </option>
                                    <option value="" selected=""></option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="descripcion">Descripcion</label>
                                 <input name="nombres" value="" type="text" class="form-control" id="nombre" placeholder="">
                              </div>
                              <div class="form-group">
                                 <label for="image">Seleccione una imagen </label>
                                 <form enctype="multipart/form-data" action="uploader.php" method="POST">
                                    <input name="uploadedfile" type="file" />
                                    <input type="submit" value="Subir archivo" />
                                 </form>
                              </div>
                              <div class="form-group">
                                 <label for="dep">Precio de compra</label>
                                 <input name="" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>
                              <div class="form-group">
                                 <label for="dep">Precio de venta</label>
                                 <input name="" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
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