<?php 
    $page = basename($_SERVER['PHP_SELF']);

?>

<!-- NAV-BAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="./img/Logo_2.png" alt="Logo" width="140" height="45" class="d-inline-block align-text-top">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <!-- Links da navbar -->
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link <?php if($page == 'index.php'){ echo 'active';}?> " aria-current="page" href="index.php">
              <h5>Início</h5>
            </a>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link " href="#">
              <h5>Produtos</h5>
            </a>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link" href="#">
              <h5>Fornecedor</h5>
            </a>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link" href="#">
              <h5>Contato</h5>
            </a>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link <?php if($page == 'entrar.php'){ echo 'active';}?> " href="entrar.php">
              <h5>Entrar</h5>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>