function redirecionar1() {
    window.location.replace('../controller/choose_phase.php');
}

function redirecionarSair() {
    window.location.replace('../controller/logout.php');
}
function redirecionarPageStudent() {
  window.location.replace('../view/student_page.php');
}

function attPage() {
  window.location.reload();
}

function redirecionarPagina(page, idPhase) {
  const formData = new FormData();
  formData.append('page', page);
  formData.append('idPhase', idPhase);
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



  
  
  
  
  