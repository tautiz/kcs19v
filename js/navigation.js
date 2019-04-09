let mainTagas = document.querySelector('body>main');

function salintiVisaTurini() {
    mainTagas.innerHTML = "";
}

function uzkrautiPuslapi(kurisPuslapis) {
    let req = new XMLHttpRequest();
    req.onload = function () {
        mainTagas.innerHTML = this.responseText;
    };
    req.open("get", kurisPuslapis + ".html", true);
    req.send();
}

function uzkrautiTurini(ivykis) {
    salintiVisaTurini();
    let kurisPuslapis = ivykis.target.getAttribute("href");
    kurisPuslapis = kurisPuslapis.substr(1);
    uzkrautiPuslapi(kurisPuslapis);
}

let virsutinioMeniuElementai = document.querySelectorAll("#topMeniu > a");

for (let i = 0; i < virsutinioMeniuElementai.length; ++i){
    let elementas = virsutinioMeniuElementai[i];
    elementas.addEventListener("click", uzkrautiTurini);
}
uzkrautiPuslapi('cv');
