<?php
    include 'config.php';
    try {
        $dsn = "mysql:host=".SERVIDOR.";port=3307;dbname=".BD;
        $pdo = new PDO($dsn, USER, PASSWORD);
       // echo "<script> alert('Conexión establecida')</script>";
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
?>