function redirecionar1() {
    window.location.replace('../controller/draw_scenario1.php');
}

function redirecionarSetaSairRoom1() {
  window.location.replace('../controller/draw_scenario2.php');
}

function redirecionarSetaSairCenario1() {
  window.location.replace('../controller/draw_scenario3.php');
}

function redirecionarSair() {
    window.location.replace('../controller/logout.php');
}

function redirecionarPagina(page, phase) {
  const formData = new FormData();
  formData.append('page', page);
  formData.append('phase', phase);

  fetch('../controller/update_session.php', {
    method: 'POST',
    body: formData
  })
    .then(response => {
      if (response.ok) {
        atualizarConteudo('../view/game.php');
      } else {
        console.log('Erro ao redirecionar a página.');
      }
    })
    .catch(error => console.log(error));
}



  
  
  
  
  