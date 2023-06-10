<?php

include('../../../Usuario/conexaoBanco/conexao.php');
/*  echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    $ID_jogo = $_POST['ID_jogo'];
    $querySelect = "SELECT * FROM tbgamepass  WHERE ID_jogo = $ID_jogo";
    $resultado = $conexao->query($querySelect);
    $usuario = $resultado->fetch();

    $ID_jogo = $ID_jogo["ID_jogo"];
    $nomeJogo = $nomeJogo["nomeJogo"];
    $generoJogo = $generoJogo["generoJogo"];
    $descJogo = $descJogo["descJogo"];

} else {

    $ID_jogo = "";
    $nomeJogo = "";
    $generoJogo = "";
    $descJogo = "";
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escola Virtual - Registro</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../../img/logo.png" />
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
    <?php
    include('../../Componentes/cabecalho.php');
    ?>
    <div class="container-fluid " style="height: 90%;">
        <div class="row h-100">
            <?php
            include('../../Componentes/menu.php');
            ?>
            <div class="col-md-10  p-4">
                <div class="card">
                    <form method="post" action="salvar.php" enctype="multipart/form-data">
                        <div class="card-header">
                            <strong>INFORMAÇÕES DO NOVO JOGO</strong>
                        </div>
                        <div class="card-body row " style="align-items: center; justify-content: center;">
                            <div class="col-md-2   text-center">
                                <div class="bg-white rounded">
                                    <img id="preview"
                                        src="../../fotos/usuarios/<?= $foto_usuario != "" ? $foto_usuario : 'perfil.png'; ?>"
                                        alt="..." class=" w-75">
                                </div>
                            </div>
                            <div class=" col-md-10">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="recipient-name" class="col-form-label">Nome do Jogo:</label>
                                        <input type="text" class="form-control" name="nomedojogo" maxlength="50"
                                            value="<?= $nomeJogo ?>">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="recipient-name" class="col-form-label">Gênero do jogo:</label>
                                        <select name="generoJogo" class="form-control">
                                            <option value="<?= $generoJogo ?>" selected>Ação</option>
                                            <option value="<?= $generoJogo ?>">Terror</option>
                                            <option value="<?= $generoJogo ?>">RPG</option>
                                            <option value="<?= $generoJogo ?>">Multiplayer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-md-9">
                                        <label for="recipient-name" class="col-form-label">Descrição do jogo:</label>
                                        <textarea class="form-control" name="descricaoJogo" value="<?= $descJogo ?>"> >

                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-5">
                                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                                </div>
                                <input type="hidden" id="foto_usuario" name="foto_usuario" value="<?= $foto_usuario ?>">

                            </div>
                            <div class=" text-end p-3">
                                <input type="hidden" id="id_usuario" name="id_usuario" value="<?= $id_usuario ?>">
                                <a class=" btn btn-primary px-3" role="button" aria-disabled="true"
                                    href="../altgp.php">Voltar</i></a>
                                <input type="submit" class=" btn btn-success" value="Salvar">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='../../estilos/personalizar.js'></script>

</body>

</html>