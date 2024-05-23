<?php

switch ($page) {
    case 3:
        renderImage("../scenarios/inicialRoom/inicialRoom1.gif");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(4,$idPhases);");
        renderButton("book-position", "salvarTempo(); redirecionarPagina(6,$idPhases);");
        renderButton("board-position", "salvarTempo(); redirecionarPagina(5,$idPhases);");
        break;
    case 4:
        renderImage("../scenarios/inicialRoom/inicialRoom4.png");
        renderButton("terminal-position", "salvarTempo(); redirecionarPagina(0,$idPhases);");
        renderButton("right-arrow-position", "salvarTempo(); redirecionarPagina(3,$idPhases);");
        break;
    case 5:
        renderImage("../scenarios/inicialRoom/inicialRoom2.png");
        renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina(3,$idPhases);");
        break;
    case 6:
    case 7:
    case 8:

        break;
    case 9:
        renderImage("../scenarios/inicialRoom/inicialRoom5.png");
        renderButton("down-arrow-position", "salvarTempo(); redirecionarSetaSairRoom1();");
        break;
    case 0:
        renderImage("../scenarios/inicialRoom/input.png");
        echo '<div class="initial-terminal-input">';
        echo '<form action="../controller/answer_scenario1.php" method="POST">';
        echo '<input type="text" name="respUser" class="form-control" placeholder="Resposta" required>';
        echo '<input type="hidden" name="idPhases" id="idPhases" value="' . $idPhases . '">';
        echo '<button type="submit" class="enviar">Enviar</button>';
        echo '</form>';
        echo '</div>';
        renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina(4,$idPhases);");
        break;
}
