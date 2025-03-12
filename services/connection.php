<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PSWD', 'root');
    define('DB', 'alarm_handling_system');

    $connection = mysqli_connect(HOST, USER, PSWD, DB) or die ('Não Foi Possível Conectar');
?>