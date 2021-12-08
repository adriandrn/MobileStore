<?php include('views/layout/includes/header.php'); ?>

<div class="bg-info">
  <ul class="nav nav-pills nav-fill">
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i>Carrito de compras</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#"><i class="far fa-file-alt"></i> Saber mas informacion</a>
    </li>
  </ul>
</div>


<section class="container-fluid mt-4" id="infor" >
  <div class="row">
    <div class="col">
      <img src="../assets/img/cell.jpg" class="mx-auto d-block mt-5" alt="" style="max-height: 500px; height: 500px; width: 70%;">
    </div>
    <div class="col mt-5">
      <h1>Modelo del celular</h1>
      <p>4GB+164GB , Gris Carbono</p>
      <p>1000 $</p>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <p class="card-text">Iva incluido</p>
          <p class="card-text">Facil devolucion en 20 dias</p>
          <p class="card-text">Garantia de 2 años</p>
          <p class="card-text">Envio gratuito</p>
        </div>
      </div>

      <form class="row g-3">
        <div class="col-12">
          <label for="" class="form-label">Capacidad</label><br>
          <input type="radio" class="btn-check" name="capacidad" id="option1" autocomplete="off">
          <label class="btn btn-primary" for="option1">4GB + 128GB</label>

          <input type="radio" class="btn-check" name="capacidad" id="option2" autocomplete="off">
          <label class="btn btn-primary" for="option2">4GB + 64GB</label>
        </div>

        <div class="col-12">
          <label for="" class="form-label">Color</label><br>
          <input type="radio" class="btn-check" name="color" id="option3" autocomplete="off">
          <label class="btn btn-light" for="option3">Color 1</label>

          <input type="radio" class="btn-check" name="color" id="option4" autocomplete="off">
          <label class="btn btn-dark" for="option4">Color 2</label>

          <input type="radio" class="btn-check" name="color" id="option5" autocomplete="off">
          <label class="btn btn-danger" for="option5">Color 3</label>
        </div>

        <div class="col-md-4">
          <label for="inputState" class="form-label">Cantidad</label>
          <input type="number">
        </div>
        <p class="col-9">Celular mas las caracteristicas escogidas</p>
        <p class="col-3">Monto del celular</p>
        <p class="col-9">Total</p>
        <p class="col-3">10000$</p>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Comprar ahora</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include('views/layout/includes/footer.php'); ?>
