<?php include(VIEWS . '_partials/header.php'); ?>

<!-- compteur de produits  -->





<?php if(isset($_SESSION['panier'])): ?>
 <div class="container border border-primary p-5 rounded">  
    <h1 class="text-center">Mon panier</h1>
    <div class="row d-flex align-items-center">
    <?php foreach($detailPanier as $cart): ?>
        <div class="col-7">
            <img src="<?= UPLOAD . $cart['produit']['image'] ; ?>" alt="" width="100">
            <h2><?= $cart['produit']['name']; ?></h2>
        </div>
        <div class="col-3 text-center">
            <a href="<?= BASE . 'cart/substract?id=' . $cart['produit']['id_product']; ?>" class="text-decoration-none">-</a>
            <?= $cart['quantity']; ?>
            <a href="<?= BASE . 'cart/add?id=' . $cart['produit']['id_product']; ?>" class="text-decoration-none">+</a>
        </div>
        <div class="col-1 text-end">
            <?= $cart['total']; ?>€
        </div>
        <div class="col-1 text-end">
            <a href="<?= BASE . 'cart/remove?id=' . $cart['produit']['id_product']; ?>"" class="text-danger"><i class="bi bi-trash3"></i></a>
        </div>
        <div class="col-12 my-3"><hr></div>

    <?php endforeach; ?>
    <h2 class="text-end"><?= $totalPanier ; ?>€</h2>
    <div class="text-end">
        <a href="<?= BASE . 'cart/delete'; ?>" class="btn btn-warning">Supprimer Panier</a>
        <a href="" class="btn btn-primary">Valider Panier</a>
    </div>
    </div>
</div> 
<?php else: ?>
    <h1 class="text-center">Panier vide</h1>

<?php endif; ?>

<?php include(VIEWS . '_partials/footer.php'); ?>