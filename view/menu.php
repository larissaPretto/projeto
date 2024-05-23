<?php
if ($page == 1) {
    renderImage("../scenarios/menu.gif");
?>
    <div class="menu-buttons">
        <?php
        echo '<button class="start-menu-button" onclick="redirecionarPagina(500,0);">INICIAR</button>';
        echo '<button class="instructions-menu-button" onclick="redirecionarPagina(2,0);">INSTRUÇÕES</button>';
        echo '<button class="ranking-menu-button" onclick="redirecionarPagina(333,0);">RANKING</button>';
        echo '<button class="exit-menu-button" onclick="redirecionarSair()">SAIR</button>';
        ?>
    </div>
    <script>
        window.onload = function() {
            reproduzirAudio('chuvaInicio', true);
        };
    </script>
<?php
} else if ($page == 2) {
    renderImage("../scenarios/instrucao.png");
    renderButton("down-arrow-position", "redirecionarPagina(1,0);");
} else if ($page == 333) {
    renderImage("../scenarios/ranking.png");
    $query = "SELECT * FROM user natural join game where finish = 1 ORDER BY time DESC";
    $result = mysqli_query($conectado, $query);
    //echo '<h2>Ranking dos Usuários</h2>';
    echo '<div class="ranking-text">';
    echo '<ol start="4" id="ranking-list">';
    $count = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $tempo1 = new DateTime('00:15:00');
        $tempo2 = new DateTime($row['time']);
        $intervalo = $tempo1->diff($tempo2);
        $tempoFinal = $intervalo->format('%H:%I:%S');
        if ($count < 10) {
            $count++;
            if ($count <= 3) {
                echo '<div class="podium-' . $count . '">';
                echo '<span class="name">' . $row['name'] . "  " . '</span>';
                echo '<span class="time">' . $tempoFinal . '</span>';
                echo '</div>';
            } else {
                echo '<li class="text-' . $count . '">';
                echo '<span class="name">' . $row['name'] . "  " . '</span>';
                echo '<span class="time">' . $tempoFinal . '</span>';
                echo '</li>';
            }
        }
    }
    echo '</ol>';
    echo '</div>';
    renderButton("down-arrow-position", "redirecionarPagina(1,0);");    
} else if ($page == 500) { //colocar uma descricao da fase
    renderButton("down-arrow-position", "redirecionarPagina(3,1);");
} 
?>