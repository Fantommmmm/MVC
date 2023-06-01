<?php include(VIEWS . '_partials/header.php'); ?>

<h1 class="text-center"> Modification de l'utilisateur 'Wassim' , choisisez le code génétique : </h1>

<div class="container border border-danger p-5 ">
    <form action="" class="row " method="post">
<?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 'ROLE_USER'):?>

        <div class="form-group col-md-6">
            <label for="f_name" class="form-label mt-4">Prenom</label>
            <input type="text" class="form-control" name="f_name" id="f_name" value="<?= $user['f_name']??""; ?>" placeholder="Prénom">
            <small class="text-danger"><?= $error['f_name'] ?? ""; ?></small>
        </div>

        <div class="form-group col-md-6">
            <label for="l_name" class="form-label mt-4">Nom</label>
            <input type="text" class="form-control" name="l_name" id="l_name" value="<?= $user['l_name']??""; ?>" placeholder="Nom">
            <small class="text-danger"><?= $error['l_name'] ?? ""; ?></small>
        </div>

        <div class="form-group col-md-6">
            <label for="pseudo" class="form-label mt-4">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" id="pseudo" value="<?= $user['pseudo']??""; ?>" placeholder="Pseudo">
            <small class="text-danger"><?= $error['pseudo'] ?? ""; ?></small>
        </div>
        
        <div class="form-group col-md-6">
            <label for="email" class="form-label mt-4">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?= $user['email']??""; ?>" placeholder="Email">
            <small class="text-danger"><?= $error['email'] ?? ""; ?></small>
        </div>
<?php endif; ?>

<?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 'ROLE_ADMIN'):?>
        <div class="form-group">
                <label for="category" class="form-label mt-4">Role</label>
                <select class="form-select" id="category" name="category">
                    <option <?= (isset($_POST['role']) && $_POST['role'] == 'ROLE_USER')? 'selected' : ''; ?>>User</option>
                    <option <?= (isset($_POST['role']) && $_POST['role'] == 'ROLE_ADMIN')? 'selected' : ''; ?>>Admin</option>
                </select>
        </div>
<?php endif; ?>

        <button type="submit" class="btn btn-primary col-2 mt-5  m-auto">Modifier Wassim</button>
</form>
</div>

<?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 'ROLE_ADMIN'):?>
        <?php endif; ?>







<?php include(VIEWS . '_partials/footer.php'); ?>