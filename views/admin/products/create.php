<?php include('views/admin/layout/header.php'); ?>
<?php include('views/admin/layout/sidebar.php'); ?>
<div class="main-panel">
   <div class="content-wrapper">
      <div class="row">
         <div class="col-md-9 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <div class="col-12 grid-margin stretch-card">
                     <div class="card">
                        <div class="card-body">
                           <h3 class="">Registrar nuevo producto</h3>
                           <form action="" method="POST" class="forms-sample">
                              <div class="form-group">
                                 <label for="">Marca</label>
                                 <select name="" class="form-control">
                                    <option value="" selected> Seleccione </option>
                                    <option value="">Samsung</option>
                                 </select>
                              </div>

                              <div class="form-group">
                                 <label for="">Gama</label>
                                 <select name="" class="form-control">
                                    <option value="" selected> Seleccione </option>
                                    <option value="">Alta</option>
                                 </select>
                              </div>

                              <div class="form-group">
                                 <label for="">Nombre</label>
                                 <input name="name" value="" type="text" class="form-control" id="nombre" placeholder="Introduzca Nombres">
                              </div>

                              <div class="form-group">
                                 <label for="">Año</label>
                                 <select name="" class="form-control">
                                    <option value="" selected> Seleccione </option>
                                    <option value="">2001</option>
                                 </select>
                              </div>

                              <div class="form-group">
                                 <label for="">Descripcion</label>
                                 <input name="description" value="" type="text" class="form-control" id="nombre" placeholder="">
                              </div>

                              <!-- <div class="form-group">
                                            <label for="">Seleccione una imagen </label>
                                            <form enctype="multipart/form-data" action="uploader.php" method="POST">
                                                <input name="uploadedfile" type="file" />
                                                <input type="submit" value="Subir archivo" />
                                            </form>
                                        </div> -->

                              <div class="form-group">
                                 <label for="">Precio de compra</label>
                                 <input name="purchase_price" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Precio de venta</label>
                                 <input name="sale_price" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Cantidad</label>
                                 <input name="stock" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <h4>Detalles</h4>

                              <div class="form-group">
                                 <label for="">Pantalla</label>
                                 <input name="screen" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Procesados</label>
                                 <input name="processor" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Ram</label>
                                 <input name="ram" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Almacenamiento</label>
                                 <input name="storage" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Expansion</label>
                                 <input name="expansion" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Camara</label>
                                 <input name="camera" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Bateria</label>
                                 <input name="battery" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Sistema operativo</label>
                                 <input name="os" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Perfil</label>
                                 <input name="profile" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
                              </div>

                              <div class="form-group">
                                 <label for="">Peso</label>
                                 <input name="weight" value="" type="text" class="form-control" id="dep" placeholder="Introduzca Numero de Deposito">
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

         <div class="col-md-3 grid-margin stretch-card ">
            <form enctype="multipart/form-data" action="uploader.php" method="POST">
               <div class="form-group">
                  <label for="">Seleccione una imagen </label>
                  <input name="uploadedfile" type="file" />
                  <input type="submit" value="Subir archivo" />
               </div>

            </form>
         </div>
      </div>

      <?php include('views/admin/layout/footer.php'); ?>