<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "bdXbox";



//testar conexão com try e catch
/*try {
    //criar conexão
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    echo "Conexão realizada com sucesso!";
    return $conn;

} catch (PDOException $e) {
    echo '<p>' . $e->getMessage() . '</p>';
}*/
;

try {
    $conn = new PDO(
        "mysql:host=$servidor;
    dbname=$dbname",
        $usuario,
        $senha
    );

    // echo "Conexão realizada com sucesso!";
    return $conn;
} catch (PDOException $e) {
    echo '<p>' . $e->getMessage() . '</p>';
}
;









header('Location: ');


?>