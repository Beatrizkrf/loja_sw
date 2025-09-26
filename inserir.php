<?php
    require 'conexao.php';
    
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    
    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $quantidade);
    
    if ($stmt->execute()) {
     header("Location: certo.php");
    exit;
    } else {
      header("Location: erro.php");
    exit;
    }
?>