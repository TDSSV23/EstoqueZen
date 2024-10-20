<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estoque Zen - Entrar</title>
  <link rel="icon" href="/img/LogoG_UZ.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
  <!-- NAV-BAR -->

  <?php include ('./vendor/header.php') ?>

  <!-- Formulário -->
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card-e o-hidden border-0 shadow-lg">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h2 text-gray-900 mb-4">Acesse sua Conta</h1>
              </div>
              <form class="user" action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="senha" id="password" placeholder="Senha">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lembrar da senha</label>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-user btn-lg btn-block btn-salvar">Entrar</button>
                </div>
                <div class="n-po">
                    Não possui Conta? <a class="cd-entrar" href="./registrar.php">Registre-se</a>
                </div>
              </form> 
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include ('./vendor/footer.php') ?>

</body>

</html>