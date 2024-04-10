<?php 
    $hostname = 'localhost:3308';
    $username = 'root';
    $password = 'pedro123';
    $database = 'to_do_list';

    try {
        $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
?>