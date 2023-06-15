<?php


include('conexao.php');

if ($_POST) {
    $Nome = trim($_POST['nome']);
    $Email = trim($_POST['email']);
    $MotCont = trim($_POST['motivodocontato']);
    $Comentario = trim($_POST['mensagem']);

    $sql = "
    INSERT INTO tbusuarios (nome, email, motcont, comentario) VALUES ('$Nome', '$Email', '$MotCont','$Comentario')
    ";

}

$query = $conn->prepare($sql);
$query->execute();


header('Location: ../Telas/Suporte.php');


?>