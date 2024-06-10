<?php
if ($page == 52) {
    renderImage("../scenarios/gameOver.png");
    renderButton("right-arrow-position", "reproduzirAudio('chuvaInicio', true); redirecionarPagina(1,0);");
?>
    <script>
        window.onload = function() {
            reproduzirAudio('gameOver', false);
        };
    </script>
<?php
}
?>
