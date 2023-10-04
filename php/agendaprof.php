<?php

foreach ($agendamentos as $agendamento) {
    $modalidade = $agendamento[0];
    $data = $agendamento[1];
    $hora = $agendamento[2];

    echo "<tr>";
    echo "<td>$aluno</td>";
    echo "<td>$modalidade</td>";
    echo "<td>$data</td>";
    echo "<td>$hora</td>";
    echo "<td>$confirmar</td>";
    echo "</tr>";
}

?>