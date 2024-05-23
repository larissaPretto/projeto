function salvarTempo() {
    const tempoAtual = tempoRestante;
    const formData = new FormData();
    formData.append('time', formatarTempo(tempoAtual));
    formData.append('idGame', idGame);
  
    fetch('../model/save_time.php', {
      method: 'POST',
      body: formData
    })
    .catch(error => console.error(error));
  }

  function atualizarConteudo(url) {
    fetch(url)
      .then(response => response.text())
      .then(data => {
        const parser = new DOMParser();
        const newDocument = parser.parseFromString(data, 'text/html');
        const contentElement = newDocument.getElementById('content');
        if (contentElement) {
          document.getElementById('content').innerHTML = contentElement.innerHTML;
  
          const newScripts = contentElement.getElementsByTagName('script');
  
          const existingScripts = document.getElementsByTagName('script');
          for (let i = 0; i < existingScripts.length; i++) {
            existingScripts[i].parentNode.removeChild(existingScripts[i]);
          }
  
          for (let i = 0; i < newScripts.length; i++) {
            const script = document.createElement('script');
            if (newScripts[i].src) {
              script.src = newScripts[i].src;
            } else {
              script.innerHTML = newScripts[i].innerHTML;
            }
            document.body.appendChild(script);
          }
          if (page == 500) {
            pararAudioFundo();
          }
        } else {
          console.log('Elemento de conteúdo não encontrado na resposta.');
        }
      })
      .catch(error => console.log(error));
  }
  
  function exibirMensagem(texto, time) {
    var mensagemDiv = document.getElementById('mensagem');
    mensagemDiv.innerText = texto;
    mensagemDiv.style.display = 'block';

    setTimeout(function() {
        mensagemDiv.innerText = '';
        mensagemDiv.style.display = 'none';
    }, time);
}

function fimGame(idGame) {
  let formData = new FormData();
  formData.append('idGame', idGame);
  
  fetch('../model/game_over.php', {
    method: 'POST',
    body: formData
  })
    .then(response => {
      if (response.ok) {a
        atualizarConteudo('../view/game.php');
      } else {
        throw new Error('Erro ao atualizar o inventário.');
      }
    })
    .catch(error => console.error(error));
}

var audioFundoAtual;

function reproduzirAudio(idAudio, fundo = false) {
  var audio = document.getElementById(idAudio);

  if (fundo) {
    if (audioFundoAtual) {
      pararAudioFundo();
    }
    audio.loop = true;
    audioFundoAtual = audio;
  } else {
    audio.currentTime = 0;
    audio.loop = false;
  }

  audio.play();
}

function pararAudioFundo() {
  if (audioFundoAtual) {
    audioFundoAtual.pause();
    audioFundoAtual.currentTime = 0;
    audioFundoAtual = null;
  }
}