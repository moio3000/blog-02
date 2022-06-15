<!-- TOPO DO NAV -->

<?php 
include "config/connection.php"; 

$stmt = $connect->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<!-- ÍNICIO HTML -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="images/logo02.png" width="180" height="70">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mais carros em:
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Esportivos</a></li>
            <li><a class="dropdown-item" href="#">SUV</a></li>
            <li><a class="dropdown-item" href="#">Econômicos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">DICAS</a>
        </li>
      </ul>
      <form class="d-flex" role="Pesquisar">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>

