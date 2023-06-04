<?php 
    session_start();
    include_once("connection.php");
    include_once("url.php");
    
    $query = "SELECT * FROM contacts";
    $stmt = $conn->prepare($query);
    try{
    $stmt->execute();
    $contacts = $stmt->fetchAll();
    }catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
    }
?>