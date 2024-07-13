<?php
if ($page == 1) {
    renderImage("../scenarios/menu.gif");
?>
    <div class="menu-buttons">
        <?php
        echo '<button class="start-menu-button" onclick="redirecionarPagina(2,0);">INICIAR</button>';
        echo '<button class="instructions-menu-button" onclick="redirecionarPageStudent();">INSTRUÇÕES</button>';
        echo '<button class="exit-menu-button" onclick="redirecionarSair()">SAIR</button>';
        ?>
    </div>
    <!-- <script>
        window.onload = function() {
            reproduzirAudio('chuvaInicio', true);
        };
    </script> -->
<?php
} else if ($page == 2) { //description
    $user = search_user($conectado, $_SESSION["email"]);
    $idGame = search_user_game_revised($conectado, $user["idUser"]);
    if(isset($idGame)) {
        renderImage("../scenarios/game/descNotPlay.png");
        renderButton("left-arrow-position", "redirecionarPagina(1,$idPhases);");
    } else {
        renderImage("../scenarios/game/description.png");
        renderButton("right-arrow-position", "redirecionar1();");
    }
} 