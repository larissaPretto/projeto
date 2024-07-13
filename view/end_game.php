<?php
if ($page == 51) {
    renderButton("down-arrow-position", "reproduzirAudio('chuvaInicio', true); redirecionarPagina(1,0);");
} else if ($page == 52) {
    renderImage("../scenarios/gameOver.png");
    renderButton("down-arrow-position", "reproduzirAudio('chuvaInicio', true); redirecionarPagina(1,0);");
?>
    <script>
        window.onload = function() {
            reproduzirAudio('gameOver', false);
        };
    </script>
<?php
}
?>
