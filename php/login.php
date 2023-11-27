<?php
include 'conexaoMYSQL.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    // Conectar ao banco de dados
    $conn = new mysqli("localhost:3306", "root", "Augusto@17", "mvmtgym");
    
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    // Consulta para verificar o login
    $sql = "SELECT idusuarios, nome, email, senha FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id, $nome, $db_email, $db_senha);
    $stmt->fetch();
    
    // Verificar se a senha corresponde à senha no banco de dados
    if ($senha === $db_senha) {
        // Login bem-sucedido
        $_SESSION["idusuarios"] = $id;
        $_SESSION["nome"] = $nome;
        
        header("Location: ../home.php?sucess=true");
    } else {
        // Login falhou
        echo "Login falhou. Verifique seu email e senha.";
        var_dump($email, $senha, $db_email, $db_senha);
    }
    
    $stmt->close();
    $conn->close();
}
?>
