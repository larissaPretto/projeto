function redirecionarPagina(page, idPhase) {
    fetch("../controller/update_session.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
            body: "page=" + page + "&idPhase=" + idPhase,
        })
        .then(function(response) {
            if (response.ok) {
                window.location.href = "../view/game.php";
            } else {
                console.log("error");
            }
        })
        .catch(function(error) {
            console.log("error");
        });
}

function atualizarConteudo(url) {
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.documentElement.innerHTML = data;
            var scriptElements = document.getElementsByTagName('script');
            for (var i = 0; i < scriptElements.length; i++) {
                if (scriptElements[i].src !== '../js/cronometro.js') {
                    eval(scriptElements[i].innerHTML);
                }
            }
        })
        .catch(error => console.log(error));
}