var intervalId;

function iniciarCronometro() {
    intervalId = setInterval(function() {
        if (tempoRestante <= 0) {
            salvarTempo();
            clearInterval(intervalId);
            redirecionarPagina(52,0);
            location.reload();
            return;
        }
        tempoRestante--;
        document.getElementById('cronometro').innerHTML = formatarTempo(tempoRestante);
    }, 1000);
}

function formatarTempo(tempo) {
    var horas = Math.floor(tempo / 3600);
    var minutos = Math.floor((tempo - (horas * 3600)) / 60);
    var segundos = tempo % 60;
    return horas.toString().padStart(2, '0') + ':' + minutos.toString().padStart(2, '0') + ':' + segundos.toString().padStart(2, '0');
}
if (page != 1 && page != 2 && page != 3 && page != 51 && page != 52) 
    iniciarCronometro();
