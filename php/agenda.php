<?php
include 'conexaoMYSQL.php';

// Função para obter a classe de cor com base no status
function getStatusTextColor($status) {
    switch ($status) {
        case 'confirmada':
            return 'status-text-verde';
        case 'rejeitada':
            return 'status-text-vermelho';
        case 'pendente':
        default:
            return 'status-text-amarelo';
    }
}

$query = "SELECT * FROM agendaaula";
$result = mysqli_query($conexao, $query);

if (!$result) {
    die("Erro ao recuperar os dados da tabela: " . mysqli_error($conexao));
}

echo "<table border='1'>
<tr>
<th>Modalidade</th>
<th>Data e Hora</th>
<th>Status</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['modalidade'] . "</td>";
    echo "<td>" . $row['datahora_aula'] . "</td>";

    // Obtém a classe CSS da cor do texto com base no status atual
    $status_text_class = getStatusTextColor($row['status']);
    
    // Exibe o status com a classe CSS apropriada para a cor do texto
    echo "<td class='status-celula'>";
    echo "<span class='$status_text_class'>" . $row['status'] . "</span>";
    echo "</td>";

    echo "</tr>";
}

echo "</table>";

mysqli_close($conexao);
?>
