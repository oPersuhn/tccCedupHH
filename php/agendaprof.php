<?php
include 'conexaoMYSQL.php';

// Função para confirmar a aula
function confirmarAula($idaula) {
    global $conexao;
    $query = "UPDATE agendaaula SET status = 'confirmada' WHERE idaula = $idaula";
    mysqli_query($conexao, $query);
}

// Função para rejeitar a aula
function rejeitarAula($idaula) {
    global $conexao;
    $query = "UPDATE agendaaula SET status = 'rejeitada' WHERE idaula = $idaula";
    mysqli_query($conexao, $query);
}

$query = "SELECT * FROM agendaaula";
$result = mysqli_query($conexao, $query);

if (!$result) {
    die("Erro ao recuperar os dados da tabela: " . mysqli_error($conexao));
}

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Modalidade</th>
<th>Data e Hora</th>
<th>ID do Professor</th>
<th>ID do Usuário</th>
<th>Status</th>
<th>Ação</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['idaula'] . "</td>";
    echo "<td>" . $row['modalidade'] . "</td>";
    echo "<td>" . $row['datahora_aula'] . "</td>";
    echo "<td>" . $row['professores_idprofessores'] . "</td>";
    echo "<td>" . $row['usuarios_idusuarios'] . "</td>";

    // Defina a classe CSS para a cor do texto com base no status
    $status_text_class = '';
    if ($row['status'] == 'confirmada') {
        $status_text_class = 'status-text-verde';
    } elseif ($row['status'] == 'rejeitada') {
        $status_text_class = 'status-text-vermelho';
    } else {
        $status_text_class = 'status-text-amarelo';
    }

    // Exiba o status com a classe CSS apropriada para a cor do texto
    echo "<td>";
    echo "<span class='$status_text_class'>" . $row['status'] . "</span>";
    echo "</td>";

    // Adicione botões para confirmar ou rejeitar aula
    echo "<td>";
    echo "<form method='POST'>";
    echo "<input type='hidden' name='idaula' value='" . $row['idaula'] . "'>";
    echo "<input type='submit' name='confirmar' value='Confirmar'>";
    echo "<input type='submit' name='rejeitar' value='Rejeitar'>";
    echo "</form>";
    echo "</td>";

    echo "</tr>";
}

echo "</table>";

// Processar ação do professor
if (isset($_POST['idaula'])) {
    $idaula = $_POST['idaula'];
    if (isset($_POST['confirmar'])) {
        confirmarAula($idaula);
    } elseif (isset($_POST['rejeitar'])) {
        rejeitarAula($idaula);
    }
}

mysqli_close($conexao);
?>
