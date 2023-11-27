<?php
include 'conexaoMYSQL.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["idprofessores"]) && isset($_POST["senha"])) {
        $matricula = $_POST["idprofessores"];
        $senha = $_POST["senha"];

        // Conectar ao banco de dados
        $conn = new mysqli("localhost:3306", "root", "Augusto@17", "mvmtgym");

        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Consulta para verificar o login
        $sql = "SELECT idprofessores, senhaprofessor FROM professores WHERE idprofessores = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conn->error);
        }

        $stmt->bind_param("s", $matricula);
        $stmt->execute();
        $stmt->bind_result($id, $db_senha);
        $stmt->fetch();

        // Verificar se a senha corresponde à senha no banco de dados
        if ($senha === $db_senha) {
            // Login bem-sucedido
            $_SESSION["idprofessores"] = $id;
            header("Location:./index_prof.php"); // Redirecionar para a página do perfil do professor após o login
            exit();
        } else {
            // Login falhou
            echo "Login falhou. Verifique sua matrícula e senha.";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Matrícula e/ou senha não foram enviadas.";
    }
}
?>
