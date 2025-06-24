<?php


$host = 'localhost'; //endereço do servidor local ou remoto 
$dbname = 'db_frontdev'; //nome do banco de dados 
$username = 'root'; //nome do usuario do banco de dados 
$password = ''; //senha do banco de dados 


try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
        echo 'Error de Conexao' . $e->getMessage();
}
