<?php
include 'conexaoMYSQL.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $mod = $_POST['modalidade'];
    $prof = $_POST['professor'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    
    $query = "call cadastraaula('$mod','$prof','$data','$hora','Luiz')";

    mysqli_query($conexao, $query);
    mysqli_close($conexao);
    
   echo '<meta http-equiv="refresh" content="1; url=../index.html">';
}

?>