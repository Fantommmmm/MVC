<?php include(VIEWS . '_partials/header.php'); ?>

<?php 
// var_dump($_POST);
// echo '<br>';
// var_dump($_FILES);
?>
<style>
    /* Ajouter du style au titre */
    body{
        color:white;
    }
    .text-center {
        text-align: center;
    }
    .mt-3 {
        margin-top: 3rem;
    }

    /* Styling pour le formulaire */
    .container {
        margin-top: 4rem;
    }

    .form-label {
        margin-top: 1rem;
    }

    .form-control {
        width: 100%;
        padding: 0.5rem;
        font-size: 1rem;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .form-select {
        width: 100%;
        padding: 0.5rem;
        font-size: 1rem;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .text-danger {
        color: red;
    }

    .btn-primary {
        margin-top: 1rem;
        width: 100%;
        padding: 0.5rem;
        font-size: 1rem;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 0.25rem;
    }
</style>

<h1 class="text-center mt-3">Ajout Produit</h1>

<div class="container mt-4">
    <form method="post" enctype="multipart/form-data"> 
        <fieldset>
            <div class="form-group">
                <label for="name" class="form-label mt-4">Nom</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="nom du produit" name="name" value="<?= $_POST['name'] ?? '' ; ?>">
                <small class="text-danger"><?= $error['name'] ?? '' ; ?></small>
            </div>

            <div class="form-group">
                <label for="category" class="form-label mt-4">Categorie</label>
                <select class="form-select" id="category" name="id_category">
                    <?php foreach($categories as $category): ?>
                        <option <?= (isset($_POST['id_category']) && $_POST['id_category'] == $category['id_category']) ? 'selected' : ''; ?> value="<?= $category['id_category']; ?>"><?= $category['name']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>


            <div class="form-group">
                <label for="image" class="form-label mt-4">Image</label>
                <input class="form-control" type="file" id="image" name="image">
                <small class="text-danger"><?= $error['image'] ?? ""; ?></small>
            </div>

            <div class="form-group">
                <label for="description" class="form-label mt-4">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"><?= $_POST['description'] ?? ""; ?></textarea>
                <small class="text-danger"><?= $error['description'] ?? ""; ?></small>
            </div>

            <div class="form-group">
                <label for="price" class="form-label mt-4">Prix</label>
                <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" value="<?= $_POST['price'] ?? ""; ?>">
                <small class="text-danger"><?= $error['price'] ?? ""; ?></small>
            </div>

            <button type="submit" class="mt-3 col-12 btn btn-primary">Ajouter</button>
        </fieldset>
    </form>
</div>

<?php include(VIEWS . '_partials/footer.php'); ?>