<?php

switch ($page) {
    case 10:
        renderImage("../scenarios/inicialRoom/inicialRoom1.gif");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(4,$idPhases);");
        renderButton("book-position", "salvarTempo(); redirecionarPagina(6,$idPhases);");
        renderButton("board-position", "salvarTempo(); redirecionarPagina(5,$idPhases);");
        break;
}
