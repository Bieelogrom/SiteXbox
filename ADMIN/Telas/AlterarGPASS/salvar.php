<?php
/*     echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */

include('../../../Usuario/conexaoBanco/conexao.php');

//VERIFICA SE ESTÁ VINDO INFORMAÇÕES VIA POST
if ($_POST) {
    //passando todos os itens do post para as sua variaveis
    $ID_jogo = trim($_POST['ID_jogo']);
    $nomeJogo = trim($_POST['nomedojogo']);
    $generoJogo = trim($_POST['generoJogo']);
    $descJogo = trim($_POST['descricaoJogo']);
    ;

    echo empty($_FILES['foto']['size']);
    //a foto vem com a extenção $_FILES
    if (empty($_FILES['foto']['size']) != 1) {
        //pegar as extensão do arquivo
        $extensao = strtolower(substr($_FILES['foto']['name'], -4));
        if ($novo_nome == "") {
            //Ciando um nome novo
            $novo_nome = md5(time()) . $extensao;
        }
        //definindo o diretorio
        $diretorio = "../../fotos/usuarios/";
        //juntando o nome com o diretorio
        $nomeCompleto = $diretorio . $novo_nome;
        //efetuando o upload
        move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto);
    }

    if (is_numeric($id_usuario)) {
        $sql = "
        UPDATE tab_usuario SET
        ID_jogo = '$ID_jogo',
        nomeJogo = '$nomeJogo',
        generoJogo = '$generoJogo',
        descricaoJogo	 = '$descJogo',
        ";
    } else {
        $sql = "
        INSERT INTO tab_usuario (ID_jogo , nomeJogo , generoJogo , descricaoJogo) VALUES
        (
            '$ID_jogo',
            '$nomeJogo',
            '$generoJogo',
            '$descJogo',
        )
        ";
    }
    $query = $conexao->prepare($sql);
    $query->execute();
}
header('Location: ./');
exit;



?>