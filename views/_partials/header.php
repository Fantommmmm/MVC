

<!doctype html>
<html lang="en">

<head>
    <title><?= CONFIG['app']['name'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/solar/bootstrap.min.css" integrity="sha512-SGLY63IpxQgjNZfOfmayBxXeh5Uw6/b3ZgAxONQb9OW5MosjvFOPmT6aTgLEerDOTc03knEaeeTdV6q5lOkLKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body style="background-color:dimgrey ;" >

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASE; ?>">Boutique</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASE; ?>">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASE . 'cart/view'; ?>">Panier</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Produits</a>
          <div class="dropdown-menu">
<?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 'ROLE_ADMIN'):?>
              <a class="dropdown-item" href="<?= BASE . 'produit/gestion'; ?>">Gestion produit</a>
              <a class="dropdown-item" href="<?= BASE . 'produit/ajout'; ?>">Ajouter produit</a>
              <a class="dropdown-item" href="<?= BASE . 'user/gestion'; ?>">Gestion Utilisateurs</a>
<?php endif; ?>
          </div>
        </li>

      </ul>
      <?php if (isset($_SESSION['user'])): ?>
          <a href="<?= BASE . 'user/logout'; ?>" class="btn btn-outline-primary">Se déconecter</a>
      <?php else: ?>
          <a href="<?= BASE . 'user/inscription'; ?>" class="btn btn-outline-secondary me-3">Inscription</a>
          <a href="<?= BASE . 'user/login'; ?>" class="btn btn-outline-primary">Se connecter</a>
      <?php endif; ?>
    </div>
  </div>
</nav>

<?php 
  // echo '<pre>';
  // var_dump($_SESSION);
  // echo'</pre>';
?>
<div class="container mt-5 ">
    <?php if(isset($_SESSION['messages'])): 
       foreach($_SESSION['messages'] as $type => $messages ): 
         foreach($messages as $message): ?>

            <div class="w-50 text-center mx-auto alert alert-<?= $type; ?>"><?= $message; ?></div>
            
          <?php endforeach;
        endforeach; 
        unset($_SESSION['messages']);
    endif; ?>
</div>

