<?php
    $server = "127.0.0.1";
    $user = "root";
    $pwd = "";
    $db = "escola";

    $con = new mysqli($server, $user, $pwd, $db);

    if ($con->connect_error) {
        echo "Falha ao conectar";
    } else {
        echo "Conectado com sucesso";
    }
?>