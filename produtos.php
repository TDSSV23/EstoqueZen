<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estoque Zen - Produtos</title>
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
                <h1 class="h2 text-gray-900 mb-4">Cadastro de Produtos</h1>
              </div>
              <form class="user" action="#" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nome" id="nomedoproduto" placeholder="Nome do Produto">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="idade" id="idade" placeholder="Marca do Produto">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="telefone" id="telefone" placeholder="Fornecedor">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="idade" id="idade" placeholder="Categoria do Produto">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="telefone" id="telefone" placeholder="Código do Produto">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="idade" id="idade" placeholder="Unidade">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="telefone" id="telefone" placeholder="Estoque Disponível">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="idade" id="idade" placeholder="Estoque Máximo">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="telefone" id="telefone" placeholder="Estoque Mínimo">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="idade" id="idade" placeholder="Valor de Custo">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="telefone" id="telefone" placeholder="Valor de Venda">
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary btn-user btn-lg btn-block btn-salvar">Cadastrar Produto</button>
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