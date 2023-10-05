
<?php
include 'conexaoMYSQL.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $mod = $_POST['modalidade'];
    $prof = $_POST['professor'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    
    $query = "CALL cadastraaula('$mod','$prof','$data','$hora','Ruan')"; // Use CALL em vez de call

    if (mysqli_query($conexao, $query)) {
        echo '<script>alert ("Parabéns, sua aula foi cadastrada com sucesso.")</script>';
        echo '<meta http-equiv="refresh" content="1; url=../index.php">';
    } else {
        echo "Erro ao cadastrar aula: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);

}

?>
