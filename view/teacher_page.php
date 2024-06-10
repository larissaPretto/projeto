<?php
require_once "../model/conexao.php";
require_once "../model/functions.php";

$players = list_players($conectado);

echo '<table border="1">';
echo '<tr>';
echo '<th>ID do Usuário</th>';
echo '<th>Nome</th>';
echo '<th>idGame</th>';
echo '<th>Tempo</th>';
echo '<th>Status</th>';
echo '<th>Nota</th>';
echo '</tr>';

foreach ($players as $player) {
    echo '<tr>';
    echo '<td>' . $player['idUser'] . '</td>';
    echo '<td>' . $player['name'] . '</td>';
    echo '<td>' . $player['idGame'] . '</td>';
    echo '<td>' . $player['time'] . '</td>';
    if ($player['correction'] == 0) {
        echo '<td>
            <form action="../view/game_correction.php" method="post">
                <input type="hidden" name="idUser" value="' . $player['idUser'] . '">
                <input type="hidden" name="idGame" value="' . $player['idGame'] . '">
                <input type="submit" value="Corrigir">
            </form>
        </td>';
    } else {
        echo '<td>
            <form action="../view/game_correction.php" method="post">
                <input type="hidden" name="idUser" value="' . $player['idUser'] . '">
                <input type="hidden" name="idGame" value="' . $player['idGame'] . '">
                <input type="submit" value="Corrigido">
            </form>
        </td>';
    }
    echo '<td>' . $player['grade'] . '</td>';
    echo '</tr>';
}

echo '</table>';