<?php
if ($page == 51) {
    renderImage("../scenarios/win.png");
    renderButton("down-arrow-position", "reproduzirAudio('chuvaInicio', true); redirecionarPagina(1,0);");
} else if ($page == 52) {
    renderImage("../scenarios/gameOver.png");
    renderButton("down-arrow-position", "reproduzirAudio('chuvaInicio', true); redirecionarPagina(1,0);");
}
?>
