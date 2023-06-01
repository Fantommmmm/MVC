<?php include(VIEWS . '_partials/header.php'); ?>

<?php 
echo '<pre>';
print_r($_POST);
echo '</pre>';


?>

<h1 class="text-center"> Inscription </h1>

<div class="container border border-danger p-5 ">
    <form action="" class="row " method="post">
        <div class="form-group col-md-6">
            <label for="f_name" class="form-label mt-4">Prenom</label>
            <input type="text" class="form-control" name="f_name" id="f_name" value="<?= $_POST['f_name']??""; ?>" placeholder="Prénom">
            <small class="text-danger"><?= $error['f_name'] ?? ""; ?></small>
        </div>

        <div class="form-group col-md-6">
            <label for="l_name" class="form-label mt-4">Nom</label>
            <input type="text" class="form-control" name="l_name" id="l_name" value="<?= $_POST['l_name']??""; ?>" placeholder="Nom">
            <small class="text-danger"><?= $error['l_name'] ?? ""; ?></small>
        </div>

        <div class="form-group col-md-6">
            <label for="pseudo" class="form-label mt-4">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" id="pseudo" value="<?= $_POST['pseudo']??""; ?>" placeholder="Pseudo">
            <small class="text-danger"><?= $error['pseudo'] ?? ""; ?></small>
        </div>
        
        <div class="form-group col-md-6">
            <label for="email" class="form-label mt-4">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?= $_POST['email']??""; ?>" placeholder="Email">
            <small class="text-danger"><?= $error['email'] ?? ""; ?></small>
        </div>
        
        <div class="form-group col-md-12">
    <label for="password" class="form-label mt-4">Mot de Passe</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
    <small class="text-danger"><?= $error['password'] ?? ""; ?></small>
</div>

<div class="form-group col-12"> 
            <label class="form-label mt-4" for="checkPwd">Confirmez mot de passe</label>
             <div class="input-group">
              <input type="password" class="form-control" name="checkPwd" id="checkPwd">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i onclick="togglePasswordVisibility('password','checkPwd')" id="password-toggle-icon" class="bi bi-eye" ></i>
                  </span>
                </div>
              </div>
            <small class="text-danger"><?= $error['checkPwd'] ?? ""; ?></small>
</div>

        <button type="submit" class="btn btn-primary mt-5 col-2 m-auto">S'inscrire</button>

<script>
function togglePasswordVisibility(passwordInputId, checkPwdInputId) {
  let passwordInput = document.getElementById(passwordInputId);
  let checkPwdInput = document.getElementById(checkPwdInputId);
  let toggleIcon = document.getElementById("password-toggle-icon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    checkPwdInput.type = "text";
    toggleIcon.classList.remove("bi-eye");
    toggleIcon.classList.add("bi-eye-slash");
  } else {
    passwordInput.type = "password";
    checkPwdInput.type = "password";
    toggleIcon.classList.remove("bi-eye-slash");
    toggleIcon.classList.add("bi-eye");
  }
}
</script>

        




        
        
    </form>
</div>

























<?php include(VIEWS . '_partials/footer.php'); ?>