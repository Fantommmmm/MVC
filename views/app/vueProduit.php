
<?php include(VIEWS . '_partials/header.php'); ?>

<div class="container col-3">
    <h1 class="text-center text-white"><?= $produit['name']; ?></h1>
    <div class="card text-white bg-white " style="max-width: 800px; margin: 0 auto; border-radius: 10px; border: 2px solid #fff;">
        <div class="card-header text-center" style=" border-bottom: none; margin: 10px 10px; background-color:white;">
            <img src="<?= UPLOAD . $produit['image']; ?>" alt="" class="img-fluid" style="border-radius: 10px; margin:auto; ">
        </div>
        <div class="card-body" style="background-color:burlywood; margin:15px; border-radius:5px;">
            <h4 class="card-title" style="color: #007bff;">Categorie : <?= $produits['category']; ?></h4>
            <hr>
            <h4 class="card-title" style="color: #007bff;">Description :</h4>
            <p class="card-text" style="color: #000;"><?= $produit['description']; ?></p>
            <h5 class="text-end text-dark">Prix : <?= $produit['price']; ?>€</h5>
            <!-- Suppose que $produit contient l'ID réel du produit -->
           
        </div>
    </div>
</div>


<?php include(VIEWS . '_partials/footer.php'); ?>