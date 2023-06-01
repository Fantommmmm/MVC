<?php include(VIEWS . '_partials/header.php'); ?>

<h1 class="text-center">Connexion</h1>

<form action="" method="post" class="w-50 mx-auto border borger-primary rounded mt-5 p-5">

<div class="form-group ">
            <label for="email" class="form-label mt-4">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?= $_POST['email']??""; ?>" placeholder="Email">
            <small class="text-danger"><?= $error['email'] ?? ""; ?></small>
        </div>
        
        <div class="form-group col-12"> 
            <label class="form-label mt-4" for="password">Mot de passe</label>
            <div class="input-group">
            <input type="password" class="form-control" name="password" id="password">
            <div class="input-group-append">
            <span class="input-group-text">
            <i onclick="togglePasswordVisibility('password')" id="password-toggle-icon" class="bi bi-eye" ></i>
        </span>
       </div>
      </div>
    <small class="text-danger"><?= $error['password'] ?? ""; ?></small>
  </div>
</div>
<button type="submit" class="btn btn-primary mt-5 col-12">Se connecter</button>

</form>


<script>
function togglePasswordVisibility(passwordInputId) {
  let passwordInput = document.getElementById(passwordInputId);
  let toggleIcon = document.getElementById("password-toggle-icon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleIcon.classList.remove("bi-eye");
    toggleIcon.classList.add("bi-eye-slash");
  } else {
    passwordInput.type = "password";
    toggleIcon.classList.remove("bi-eye-slash");
    toggleIcon.classList.add("bi-eye");
  }
}
</script>


<?php include(VIEWS . '_partials/footer.php'); ?>