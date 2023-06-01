<?php include(VIEWS . '_partials/header.php'); ?>

<?php if(isset($_SESSION['panier'])): ?>
 <div class="container">  
    <h1 class="text-center">Mon panier</h1>
    <div class="row d-flex align-items-center">
    <?php foreach($detailPanier as $cart): ?>
        <div class="col-7">
            <img src="<?= UPLOAD . $cart['produit']['image'] ; ?>" alt="" width="100">
            <h2><?= $cart['produit']['name']; ?></h2>
        </div>
        <div class="col-3 text-center">
            <a href="" class="text-decoration-none">-</a>
            <?= $cart['quantity']; ?>
            <a href="<?= BASE . 'cart/add?id=' . $cart['produit']['id_produit']; ?>" class="text-decoration-none">+</a>
        </div>
        <div class="col-1 text-end">
            <?= $cart['total']; ?>€
        </div>
        <div class="col-1 text-end">
            <a href="" class="text-danger">supp</a>
        </div>
        <div class="col-12 my-3"><hr></div>

    <?php endforeach; ?>
    <h2 class="text-end"><?= $totalPanier ; ?>€</h2>
    <div class="text-end">
        <a href="" class="btn btn-primary">Valider Panier</a>
    </div>
    </div>
</div> 
<?php else: ?>
    <h1 class="text-center">Panier vide</h1>

<?php endif; ?>

<?php include(VIEWS . '_partials/footer.php'); ?>