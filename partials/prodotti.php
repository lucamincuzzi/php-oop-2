<div class="container mt-4">
    <div class="row row-cols-2">
        <?php foreach ($prodotti as $prodotto) { ?>
            <div class="col g-4">
                <div style="height: 330px" class="card">
                    <div class="card-body">
                        <div style="height: 180px" class="d-flex justify-content-center">
                            <img style="height: 140px" src="<?php echo 'assets/' . $prodotto->getFoto(); ?>" alt="">
                        </div>
                        <div class="text-center">
                            <h2><?php echo $prodotto->getNomeCategoria(); ?></h2>
                            <h3><?php echo $prodotto->getNome(); ?></h3>
                            <p><?php echo $prodotto->getPeso();?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>