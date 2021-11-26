<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.1/sketchy/bootstrap.min.css" integrity="sha512-ekVfi4ctYpVeTlxoAjQHeTnaqoJsZ5xLHhNJHYCYC63vFquzBQQVQzM5JCpqoCKKxIAkC6xGtZvcjKSN55Kq9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href= "../../style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASE_PATH ?>">MyLibrary.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?= BASE_PATH ?>">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gestion</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= BASE_PATH.'book/list'?>">Gestion Livres</a>
            <a class="dropdown-item" href="<?= BASE_PATH.'genre/add'?>">Gestion genre</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container mt-4">

<?php if (isset($_SESSION['messages'])): ?>
  <?php foreach ($_SESSION['messages'] as $type => $messages) : ?>
      <?php foreach ($messages as $message): ?>
      <div class="alert alert-<?= $type ?>"><?= $message ?></div>
      <?php endforeach;?>
  <?php endforeach; ?>
  <?php unset($_SESSION['messages']); ?>
<?php endif; ?>
