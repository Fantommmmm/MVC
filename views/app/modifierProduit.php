<?php include(VIEWS . '_partials/header.php'); ?>

<?php 
echo '<pre>';
var_dump($category);
echo'</pre>';


?>
<h1 class="text-center">Modifier Produit</h1>

<div class="container mt-4">
    <form method="post" enctype="multipart/form-data"> 
    <fieldset>
        <input type="hidden" value="<?= $produit['image'] ?? ""; ?>" name="ancienneImg">
        <div class="form-group">
        <label for="name" class="form-label mt-4">Nom</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="name du produit" name="name" value="<?= $produit['name'] ?? '' ; ?>">
        <small class="text-danger"><?= $error['name'] ?? '' ; ?></small>
        </div>
        <div class="form-group">
        <label for="category" class="form-label mt-4">Categorie</label>
        <select class="form-select" id="category" name="category">
        <?php foreach($produits as $produit): ?>
                        <option <?= (isset($produit['category']) && $produit['category'] == $produit['category']) ? 'selected' : ''; ?> value="<?= $produit['category']; ?>"><?= $produit['name']; ?></option>
        <?php endforeach ?>
        </select>
        </div>
        <div class="form-group">

        <label for="image" class="form-label mt-4">Image</label>
        <input class="form-control" onchange="loadFile(event)" type="file" id="image" name="image">
        <small class="text-danger"><?= $error['ancienneImg'] ?? ""; ?></small>

        <img src="<?= UPLOAD . $produit['image']; ?>" width="300" alt="">

        <img id="photo" width="300" alt="">
        
        </div>
        <div class="form-group">
        <label for="description" class="form-label mt-4">Description</label>
        <textarea class="form-control" id="description" name="description" rows="8"><?= $produit['description'] ?? ""; ?></textarea>
        </div>
        <small class="text-danger"><?= $error['description'] ?? ""; ?></small>
        <div class="form-group">
        <label for="price" class="form-label mt-4">Prix</label>
        <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" value="<?= $produit['price'] ?? ""; ?>">
        </div>
        <small class="text-danger"><?= $error['price'] ?? ""; ?></small>
        <button type="submit" class="mt-3 col-12 btn btn-primary">modifier</button>
    </fieldset>
    </form>
</div>

<script>
    let loadFile = function(event)
    {
        let image = document.getElementById('photo');

        image.src = URL.createObjectURL(event.target.files[0]);
    }

</script>
<?php include(VIEWS . '_partials/footer.php'); ?>