<?php include('views/layout/includes/header.php'); ?>

<div class="container-fluid mt-5" style="background-color: whitesmoke;">
    <div class="d-flex justify-content-center">
        <h1>Lorem, ipsum dolor.</h1>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <img src="../assets/img/cell_1.jpg" alt="imagen" class="w-100">
        </div>
        <div class="col-12 col-sm-6">
            <p class="">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, asperiores debitis ullam tempore voluptatibus perferendis deserunt architecto laborum corrupti enim ipsam doloribus dolor dicta animi quod accusantium voluptatem eos porro! Iste dicta obcaecati ipsam eveniet, vel laborum quas quos. Sunt optio similique magni delectus aspernatur, officiis ipsum in facere aperiam consequuntur doloremque nulla, inventore ad id error, quam omnis dolor!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui natus, magni iure odio hic vel accusantium consequuntur, assumenda doloremque expedita rerum! Natus velit aspernatur eaque, dolor sunt maiores sed recusandae commodi rerum laboriosam nisi blanditiis nam illo quisquam tempore voluptatem omnis aliquid deleniti neque, corrupti, quibusdam facere ipsum adipisci? Doloribus?
            </p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mx-5 my-3">
        <div class="dropdown d-grid mx-auto">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Marca
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php while ($brand = $brands->fetch_object()) :                ?>
                    <li class="dropdown-item " onclick="getByAjax(<?= $brand->id ?>)"><?= $brand->name ?></li>
                <?php endwhile; ?>
            </ul>
        </div>

        <div class="dropdown d-grid mx-auto">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Gama
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <?php while ($range = $ranges->fetch_object()) :                ?>
                    <li class="dropdown-item"><?= $range->gama ?></li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="dropdown d-grid mx-auto">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Año
            </button>
            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                <?php while ($year = $years->fetch_object()) :                ?>
                    <li class="dropdown-item"><?= $year->year ?></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>

<section class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-4 row-cols-xl-5 mx-5" id="cards-container">
        <?php if ($products->num_rows > 0) : ?>
            <?php while ($product = $products->fetch_object()) : ?>

                <div class="col">
                    <div class="card mb-2">
                        <img src="<?= APP_URL ?>assets/img/<?= $product->path ?>" alt="" height="180px" style="object-fit: cover;">
                        <div class="card-body">
                            <h3 style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:2;"><?= $product->name ?></h3>
                            <h5>Marca: <?= $product->brand ?></h5>
                            <h5>Año: <?= $product->year ?></h5>
                            <h6>Gama: <?= $product->range ?></h6>
                            <p style="overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-box-orient:vertical; -webkit-line-clamp:3;"><?= $product->description ?></p>
                            <h5><?= $product->sale_price ?> $</h5>
                            <a class="btn btn-primary d-block mx-auto" href="">Comprar ahora</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php else : ?>
            <div class="alert alert-danger">
                no hay productos
            </div>
        <?php endif; ?>
    </div>
</section>

<script>
    function getByAjax(brand_id) {
        $.ajax({
            url: "http://localhost/MobileStore/catalog/getByBrand&id=" + brand_id,
            type: "GET",
            success: function(data) {
                //alert("Success: " + response);
                console.log(data);
                $("#cards-container").html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Error");
            }
        });
    }
</script>

<script>
    document.getElementById('filter'), addEventListener("submit", (e) => {
        e.preventDefault();
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<?php include('views/layout/includes/footer.php'); ?>