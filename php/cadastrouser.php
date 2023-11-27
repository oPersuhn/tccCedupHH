<?php
include 'conexaoMYSQL.php';

function calcularIMC($peso, $altura) {
    $alturaMetros = $altura / 100;
    $imc = $peso / ($alturaMetros * $alturaMetros);
    return $imc;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $pesoinicial = $_POST['pesoinicial'];
    $pesometa = $_POST['pesometa'];
    $altura = $_POST['altura'];
    
    $IMC = calcularIMC($pesoinicial, $altura);

    $query = "CALL cadastrausuario('$nome', '$usuario', '$email', '$senha', '$pesoinicial', '$pesometa', '$altura', '$IMC')";

    if (mysqli_query($conexao, $query)) {
        echo '<script>alert("Parabéns, usuário cadastrado com sucesso.")</script>';
        header("Location: ../home.php");
    } else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>