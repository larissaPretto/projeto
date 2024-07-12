<?php

switch ($page) {
    case 10:
        renderImage("../scenarios/game/hall.png");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(11,$idPhases);");
        break;

    case 11:
        renderImage("../scenarios/game/receptionist1.png");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(10,$idPhases);");
        break;

    case 12:
        renderImage("../scenarios/game/receptionist2.png");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(10,$idPhases);");
        break;

    case 13:
        renderImage("../scenarios/game/receptionist.png");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(10,$idPhases);");
        break;
}
