<?php
// Conexão com o banco de dados (substitua pelos seus dados)
$conn = new mysqli("localhost:3306", "root", "Augusto@17", "mvmtgym");

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$idUsuarios = 18; // Definindo manualmente o ID do usuário

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $novoPesoAtual = $_POST["pesoatual"];
    $novaMetaPeso = $_POST["pesometa"];

    // Constrói o comando SQL de UPDATE 
    $sql = "UPDATE usuarios 
            SET 
                pesoatual = ?, 
                pesometa = ?, 
                imc = (pesoatual + ?) / (1.76 * 1.76) -- Substitua 'altura' pelo campo de altura ou um valor conhecido
            WHERE 
                idusuarios = ?"; // Verifique se o nome da coluna está correto

    // Prepara a consulta
    $stmt = $conn->prepare($sql);

    // Verifica se a preparação da consulta foi bem-sucedida
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    // Substitui os placeholders pelos valores dos campos
    $stmt->bind_param("iiii", $novoPesoAtual, $novaMetaPeso, $novoPesoAtual, $idUsuarios);

    // Executa a consulta
    if ($stmt->execute()) {
        echo '<script>alert ("Dados atualizados com sucesso!")</script>';
        echo '<meta http-equiv="refresh" content="1; url=./perfil.php">';
    } else {
        echo "Erro ao atualizar dados: " . $stmt->error;
    }

    // Fecha a consulta e a conexão
    $stmt->close();
    $conn->close();
} else {
    // Se a requisição não foi feita via POST
    echo "Não foram recebidos dados para atualização.";
}
?>


