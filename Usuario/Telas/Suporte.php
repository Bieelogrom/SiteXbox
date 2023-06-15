<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../../PastaCSS/gradientes.css">
  <link rel="stylesheet" href="../../PastaCSS/configsEAfins.css">
</head>

<body class="midnight-city">
  <header>
    <?php include "../../componentes/barradeNav.php" ?>
  </header>

  <main>
    <!-- Section: Contact -->
    <section class="mb-5 mb-lg-10 SuporteConfis">

      <h3 class="fw-bold text-light text-center mb-5">Contato</h3>

      <div class="text-light">

        <div class="d-flex justify-content-center">

          <form action="../conexaoBanco/enviar_dados.php" method="POST">
            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" name="nome" id="form4Example1" class="form-control" />
              <label class="form-label fw-bold" for="form4Example1">Nome</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form4Example2" name="email" class="form-control" />
              <label class="form-label fw-bold" for="form4Example2">Endereço de E-Mail</label>
            </div>

            <div class="form-outline mb-4">
              <label class="fw-bold">Motivo de contato:</label>
              <select name="motivodocontato">
                <option value="Comentário para comunidade" selected>Depoimento</option>
                <option value="Sugestão de jogo">Sugestão de jogo</option>
                <option value="Reclamações">Reclamações</option>
                <option value="Elogios">Elogios</option>
              </select>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="form-control" id="form4Example4" rows="4" name="mensagem"></textarea>
              <label class="form-label fw-bold" for="form4Example4">Mensagem</label>
            </div>

            <!-- Submit button -->
            <div class="d-flex justify-content-center"> <button type="submit"
                class="btn btn-success btn-block mb-4 text-center" value="enviar_dados">Enviar</button></div>

          </form>

        </div>

        <div class="col-lg-7 mb-4 mb-lg-0">

        </div>

      </div>

    </section>
    <!-- Section: Contact -->
  </main>






  <footer>
    <?php include "../../componentes/footer.php" ?>
  </footer>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>