<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estoque Zen - Início</title>
  <link rel="icon" href="/img/LogoG_UZ.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
  
<?php include ('./vendor/header.php') ?>

  <!-- Introdução -->
  <section id="about" class="about section">
    <div class="container-intro">
      <div class="row align-items-center justify-content-between">
        <!-- Texto da introdução -->
        <div class="col">
          <span class="section-subtitle" data-aos="fade-up">Bem-Vindo</span>
          <h1 class="mb-4" data-aos="fade-up">
            Gerencie cada aspecto da sua loja e impulsione as vendas com a praticidade que você procura.
          </h1>
          <p data-aos="fade-up">
            Desenvolvido para atender lojas de qualquer porte, o Estoque Zen é gratuito e permite que você gerencie tudo
            sem desviar a atenção do principal objetivo: vender.
          </p>
        </div>
        <!-- Imagem ao lado do texto -->
        <div class="col text-center">
          <img src="./img/Tumb.jpg" alt="Imagem de introdução" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!-- Sobre -->
  <section class="bg-light py-5 sobre-nos">

    <div class="container px-5">
      <div class="row gx-5 justify-content-center">
        <div class="col-xxl-8">
          <div class="text-center my-5">
            <h2 class="display-5 fw-bolder">
              <span class="text-gradient d-inline">Um sistema criado para simplificar sua gestão e manter sua loja mais organizada.</span>
            </h2>
            <p class="text-muted">Utilize ferramentas que otimizam seu tempo e diminuem custos. Aumente suas vendas de forma eficiente com soluções adaptadas às suas necessidades e tome decisões com confiança, tendo total controle sobre o que acontece em seu negócio.</p>
            <div class="d-flex justify-content-center fs-2 gap-4">
              <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
              <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
              <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include ('./vendor/footer.php') ?>

</html>