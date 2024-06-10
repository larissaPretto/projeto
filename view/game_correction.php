<?php
require_once "../model/conexao.php";
require_once "../model/functions.php";

$idUser = $_POST['idUser'];
$idGame = $_POST['idGame'];

echo '<form action="../model/save_corrections.php" method="post">';

$categories = array(
    'Requisitos Funcionais' => 1,
    'Requisitos Não Funcionais' => 2,
    'Técnicas de levantamento de requisitos' => 3
);

$index = 0;

foreach ($categories as $categoryName => $category) {
    $answers = search_answer($conectado, 1, $idGame, $idUser, $category);

    echo $categoryName;

    foreach ($answers as $answer) {
        echo '<div>';
        echo '<label>Resposta: ' . $answer['answer'] . '</label><br>';
        echo '<input type="checkbox" name="correct[' . $index . ']" value="1"' . ($answer['correct'] ? ' checked' : '') . '> Correto<br>';
        echo '<textarea name="obs[' . $index . ']">' . $answer['obs'] . '</textarea>';
        echo '<input type="hidden" name="idAnsUser[' . $index . ']" value="' . $answer['idAnsUser'] . '">';
        echo '</div><br>';
        $index++;
    }
}
echo '<input type="hidden" name="idGame" value="' . $idGame . '">';
echo '<input type="submit" value="Salvar">';
echo '</form>';
?>