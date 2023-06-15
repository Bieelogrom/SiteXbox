<?php
session_start();
//echo $_SESSION['autenticado'];

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NAO') {
    header('Location: index.php?login=erro2');
}
?>