
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