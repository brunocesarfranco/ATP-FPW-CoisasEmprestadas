<?php

    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $database = "coisas_emprestadas";

    $mysqli = new mysqli($hostname, $username, $password, $database);
    if($mysqli->connect_errno) {
        echo "Falha ao conectar (" . $mysqli->connect_errno . " )" 
            . $mysqli->connect_error;
    }
?>