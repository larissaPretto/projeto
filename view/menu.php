<?php
if ($page == 1) {
    renderImage("../scenarios/menu.gif");
?>
    <div class="menu-buttons">
        <?php
        echo '<button class="start-menu-button" onclick="redirecionarPagina(4,0);">INICIAR</button>';
        echo '<button class="instructions-menu-button" onclick="redirecionarPagina(2,0);">INSTRUÇÕES</button>';
        echo '<button class="ranking-menu-button" onclick="redirecionarPagina(3,0);">RANKING</button>';
        echo '<button class="exit-menu-button" onclick="redirecionarSair()">SAIR</button>';
        ?>
    </div>
    <!-- <script>
        window.onload = function() {
            reproduzirAudio('chuvaInicio', true);
        };
    </script> -->
<?php
} else if ($page == 2) {
    renderImage("../scenarios/instrucao.png");
    renderButton("down-arrow-position", "redirecionarPagina(1,1);");
} else if ($page == 3) {

    renderButton("down-arrow-position", "redirecionarPagina(1,1);");    
} else if ($page == 4) { //colocar uma descricao da fase
    renderImage("../scenarios/game/description.png");
    renderButton("right-arrow-position", "redirecionar1();");
} 