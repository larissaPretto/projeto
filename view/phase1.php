<?php

switch ($page) {
    case 10:
        renderImage("../scenarios/game/hall.png");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(11,$idPhases);");
        break;

    case 11:
        renderImage("../scenarios/game/receptionist1.png");
        echo '<div id="messageContainer">';
        echo '<p id="message">Olá, eu sou o Robson! Seja muito bem vindo à livraria Leituras Ilimitadas, como posso ajudar você hoje?</p>';
        echo '</div>';
        renderButton("nextt-position", "salvarTempo(); redirecionarPagina(12,$idPhases);");
        break;

    case 12:
        renderImage("../scenarios/game/receptionist2.png");
        echo '<div id="messageContainer">';
        echo '<p id="message">Oi Robson! Fui contratado para desenvolver o novo sistema de gestão da livraria. Você pode me explicar <br>como funciona o sistema de cadastro e venda atualmente?</p>';
        echo '</div>';
        renderButton("nextt-position", "salvarTempo(); redirecionarPagina(13,$idPhases);");
        break;
    case 13:
        renderImage("../scenarios/game/receptionist1.png");
        echo '<div id="messageContainer">';
        echo '<p id="message">Claro! Atualmente, <br>tudo é feito manualmente. Nós anotamos todas as informações em planilhas. 
        <br>Registramos os dados do cliente, os detalhes da venda e dos livros. Se quiser dar uma <br>olhada nas planilhas, fique a vontade para ir à sala dos funcionários, <br>fica no segundo andar. </p>';
        echo '</div>';
        renderButton("nextt-position", "salvarTempo(); redirecionarPagina(14,$idPhases);");
        break;
    case 14:
        renderImage("../scenarios/game/receptionist4.png");
        echo '<div id="messageContainer">';
        echo '<p id="message">Além disso, também gostaríamos de guardar informações dos vendedores, como nome, endereço, <br>data de nascimento e salário. É importante lembrar que esses dados são sensíveis,
        e o sistema precisa estar sempre disponível durante o horário de <br>funcionamento da livraria. Ah, se você quiser saber mais sobre os livros, <br>pode falar com a minha colega Jessica. Ela ficará feliz em ajudar!</p>';
        echo '</div>';
        renderButton("right-arrow-position", "salvarTempo(); redirecionarPagina(15,$idPhases);");
        break;

    case 15: //hall2
        renderImage("../scenarios/game/hall2.png");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(16,$idPhases);");
        renderButton("right-arrow-position", "salvarTempo(); redirecionarPagina(17,$idPhases);");
        renderButton("second-f-position", "salvarTempo(); redirecionarPagina(18,$idPhases);");
        renderButton("down-arrow-position", "salvarTempo(); showExitPopup();");
        break;

    case 29: //hall final
        renderImage("../scenarios/game/hall2.png");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(16,$idPhases);");
        renderButton("right-arrow-position", "salvarTempo(); redirecionarPagina(28,$idPhases);");
        renderButton("second-f-position", "salvarTempo(); redirecionarPagina(18,$idPhases);");
        renderButton("down-arrow-position", "salvarTempo(); showExitPopup();");
        break;

    case 16: //back robson
        renderImage("../scenarios/game/receptionist3.png");
        echo '<div id="messageContainer">';
        echo '<p id="message">Gostaria que eu explicasse novamente?</p>';
        echo '</div>';
        renderButton("nextt-position", "salvarTempo(); redirecionarPagina(13,$idPhases);");
        renderButton("right-arrow-position", "salvarTempo(); redirecionarPagina(15,$idPhases);");
        break;

    case 17: //Jessica1
        renderImage("../scenarios/game/jessica1.png");
        echo '<div id="messageContainer">';
        echo '<p id="message">Olá! Posso Ajudar ?</p>';
        echo '</div>';
        renderButton("nextt-position", "salvarTempo(); redirecionarPagina(26,$idPhases);");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(15,$idPhases);");
        break;

    case 26: //jessica2
        renderImage("../scenarios/game/jessica2.png");
        echo '<div id="messageContainer">';
        echo '<p id="message">Falei com o Robson</p>';
        echo '</div>';
        renderButton("nextt-position", "salvarTempo(); redirecionarPagina(27,$idPhases);");
        break;

    case 27: //jessica3
        renderImage("../scenarios/game/jessica3.png");
        echo '<div id="messageContainer">';
        echo '<p id="message">Atualmente, armazenamos informações sobre os livros e os gêneros que temos em estoque. <br>No entanto, o chefe deixou anotado mais alguns dados que ele gostaria de incluir no sistema. 
        <br>Essas anotações estão em um caderno na sala de reunião. Além disso, o sistema deve permitir <br>operações de inclusão, edição, exclusão e busca de todos os dados. <br>Ele também deve ser rápido e fácil de usar para garantir uma experiência eficiente para todos.</p>';
        echo '</div>';
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(29,$idPhases);");
        break;

    case 28: //jessica1
        renderImage("../scenarios/game/jessica1.png");
        echo '<div id="messageContainer">';
        echo '<p id="message">Gostaria que eu repetisse ?</p>';
        echo '</div>';
        renderButton("nextt-position", "salvarTempo(); redirecionarPagina(27,$idPhases);");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(29,$idPhases);");
        break;
    
    case 18: //second floor
        renderImage("../scenarios/game/secondf.png");
        renderButton("pc-position", "salvarTempo(); redirecionarPagina(19,$idPhases);");
        renderButton("secondf-book-position", "salvarTempo(); redirecionarPagina(25,$idPhases);");
        renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina(15,$idPhases);");
        break;
    case 19: //pc
        renderImage("../scenarios/game/pc.png");
        renderButton("excel-position", "salvarTempo(); redirecionarPagina(20,$idPhases);");
        renderButton("form-position", "salvarTempo(); redirecionarPagina(23,$idPhases);");
        renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina(18,$idPhases);");
        break;
    case 20: //excel1
        renderImage("../scenarios/game/planilha1.png");
        renderButton("exit-position", "salvarTempo(); redirecionarPagina(19,$idPhases);");
        renderButton("right-arrow-position", "salvarTempo(); redirecionarPagina(21,$idPhases);");
        renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina(18,$idPhases);");
        break;
        
    case 21: //excel2
        renderImage("../scenarios/game/planilha2.png");
        renderButton("exit-position", "salvarTempo(); redirecionarPagina(19,$idPhases);");
        renderButton("right-arrow-position", "salvarTempo(); redirecionarPagina(22,$idPhases);");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(20,$idPhases);");
        renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina(18,$idPhases);");
        break;        

    case 22: //excel3
        renderImage("../scenarios/game/planilha3.png");
        renderButton("exit-position", "salvarTempo(); redirecionarPagina(19,$idPhases);");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(21,$idPhases);");
        renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina(18,$idPhases);");
        break;     

    case 23: //form1
        renderImage("../scenarios/game/form1.png");
        renderButton("exit-position", "salvarTempo(); redirecionarPagina(19,$idPhases);");
        renderButton("right-arrow-position", "salvarTempo(); redirecionarPagina(24,$idPhases);");
        renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina(18,$idPhases);");
        break;        

    case 24: //form2
        renderImage("../scenarios/game/form2.png");
        renderButton("exit-position", "salvarTempo(); redirecionarPagina(19,$idPhases);");
        renderButton("left-arrow-position", "salvarTempo(); redirecionarPagina(23,$idPhases);");
        renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina(18,$idPhases);");
        break;   
    case 25: //book
        renderImage("../scenarios/game/book.png");
        renderButton("down-arrow-position", "salvarTempo(); redirecionarPagina(18,$idPhases);");
        break;

}
