
function enviarEmail(event) {
    const form = document.getElementById("formulario-email");
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    // https://formsubmit.co/will.santos97@hotmail.com
    console.log(nome);
    console.log(email);
    let confirmar = confirm("Deseja enviar o email ?");
    if (confirmar) {
        form.action = `https://formsubmit.co/will.santos97@hotmail.com`
    } else {

    }
    
}

let mediaQuery = window.matchMedia("(max-width: 900px)");
let navMap = window.document.getElementById("navmap");
let header = window.document.getElementsByTagName("header")[0];
let navResponsive = window.document.getElementById("nav-list-2");
let newDiv = document.createElement("div");
let clicado = false;

const createBurguer = () => {
    let burguer = document.createElement("i");
    burguer.classList = "fa fa-bars"
    burguer.style.color = "#fff";
    burguer.style.marginRight = "80px";
    burguer.style.fontSize = "48px";
    burguer.style.cursor = "pointer";
    burguer.id = "fakeBurguer"
    burguer.addEventListener("click", function() {
        if (!clicado) {
            
            newDiv.id = "newDiv";
            newDiv.style.width = "100%";
            newDiv.style.color = "#fff";            
            burguer.classList = "fa fa-times";
            navResponsive.style.display = "flex";
            newDiv.appendChild(navResponsive);
            header.appendChild(newDiv);
            clicado = true;
        } else {
            burguer.classList = "fa fa-bars"
            header.removeChild(newDiv);
            clicado = false;
        }
    }, false)
    return burguer;
}
let myBurguer = createBurguer();

const burguerFn = (media) => {
    if (media) {        
        navMap.appendChild(myBurguer);
        console.log("navMap element node: ", navMap.ELEMENT_NODE);
    } else if (navMap.ELEMENT_NODE > 0) {
        myBurguer.style.display = "none";
    }
}





burguerFn(mediaQuery);