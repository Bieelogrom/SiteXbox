<html>

<head>
  <meta charset="utf-8" />
  <title>Tela de ADM</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-login {
      padding: 30px 0 0 0;
      width: 350px;
      margin: 0 auto;
    }
  </style>
</head>

<body class="">

  <nav class="navbar navbar-dark bg-black justify-content-center">
    <img src="../../ImagensProjeto/microsoft.png" width="100" height="100" class="d-inline-block align-center"
      alt="ADMIN" style="margin-top: 30px">

  </nav>

  <div class="container" style=" height: 100%;">
    <div class="row" style=" height: 75%; align-items: center; justify-content:center ">

      <div class="card-login font-weight-bold">
        <div class="card font-weight-bold">
          <div class="card-header font-weight:bold" style="text-align: center; font-weight: bold;">
            Login para acesso:
          </div>
          <div class="card-body">
            <?php
            if (isset($_GET['login']) && $_GET['login'] == "erro") {
              ?>
              <div class="text-danger" style="text-align: center; font-weight:bold">
                Usuário ou senha inválido(s)
              </div>
              <?php
            }
            ?>
            <form method="post" action="../../conexaoBanco/valida_login.php">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input type="password" name="senha" class="form-control" placeholder="Senha">
              </div>
              <button class="btn btn-lg btn-info btn-block neon-life" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>