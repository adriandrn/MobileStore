<?php require_once 'views/layout/includes/header.php'; ?>
<section id="show-phone" class="">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="flexslider">
                    <ul class="slides">
                        <?php while($image = $images->fetch_object()):?>
                            <li data-thumb="<?=APP_URL?>uploads/<?=$image->path?>">
                                <img src="<?=APP_URL?>uploads/<?=$image->path?>" class="img-slide">
                            </li>
                        <?php endwhile;?>
                    </ul>
                </div>
            </div>
            <div class="col p-4">
                <h1><?= $product->name ?></h1>
                <p><?= $product->description ?></p>
                <p class="my-0"><span class="fw-bold">Pantalla:</span> <?= $product->screen ?></p>
                <p class="my-0"><span class="fw-bold">Procesador:</span><?= $product->processor ?></p>
                <p class="my-0"><span class="fw-bold">RAM:</span> <?= $product->ram ?></p>
                <p class="my-0"><span class="fw-bold">Almacenamiento:</span> <?= $product->storage ?></p>
                <p class="my-0"><span class="fw-bold">Expansión:</span> <?= $product->expansion ?></p>
                <p class="my-0"><span class="fw-bold">Cámara:</span><?= $product->camera ?></p>
                <p class="my-0"><span class="fw-bold">Batería:</span> <?= $product->battery ?></p>
                <p class="my-0"><span class="fw-bold">SO:</span> <?= $product->os ?></p>
                <p class="my-0"><span class="fw-bold">Perfil:</span> <?= $product->profile ?></p>
                <p class="my-0"><span class="fw-bold">Peso:</span> <?= $product->weight ?></p>
                <p class="my-0"><span class="fw-bold">Precio:</span> <?= $product->sale_price ?></p>
                <h5 class="mt-3 fw-bold">Detalles adicionales</h5>
                <div class="d-flex justify-content-between">
                    <div>
                        <p>
                            <strong>Cantidad:</strong> 5
                            <i class="fas fa-plus btn btn-warning text-light"></i>
                            <i class="fas fa-minus btn btn-warning text-light"></i>
                        </p>
                    </div>
                    <div>
                        <strong>Stock:</strong> 150
                    </div>
                </div>
                <button class="btn btn-warning text-light w-100" style="max-width: 70%;">Añadir a carrito</button>
            </div>
        </div>
    </div>
</section>
<script>
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
</script>

<?php require_once 'views/layout/includes/footer.php'; ?>