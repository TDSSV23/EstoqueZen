<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estoque Zen - Registrar</title>
  <link rel="icon" href="/img/LogoG_UZ.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

  <?php include ('./vendor/header.php') ?>
<br><br>
  <!-- Formulário -->
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card-r o-hidden border-0 shadow-lg">
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
                  <input type="text" class="form-control form-control-user" name="nome" id="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="cpf" id="cpf" placeholder="CPF">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="idade" id="idade" placeholder="Idade">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="telefone" id="telefone" placeholder="Telefone">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="endereco" id="endereco" placeholder="Endereço">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="observacao" id="observacao" placeholder="Observação">
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-user btn-lg btn-block btn-salvar">Registrar</button>
                </div>
                <div class="po">
                  Possui Conta? <a class="cd-entrar" href="./entrar.php">Entre</a>
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