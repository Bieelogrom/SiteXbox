<?php
//iniciar um session
session_start();

$usuarios_app = array(
    array('id' => 1, 'email' => 'admin@teste.com.br', 'senha' => '123'),

);

$usuario_autenticado = false;

foreach ($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado) {
    //echo "Usuário autenticado";
    $_SESSION['autenticado'] = "SIM";

    header('Location: ../ADMIN/Telas/home.php');
} else {
    //echo "Erro na autenticação do usuário";
    $_SESSION['autenticado'] = "NÃO";

    header('Location: index.php?login=erro');
}




?>