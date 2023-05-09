const submitBtn = document.getElementById('submitBtn');
const destinatario = document.getElementById('destinatario');
const assunto = document.getElementById('assunto');
const corpo = document.getElementById('corpo');
const responseDiv = document.getElementById('response');


// destinatario.addEventListener('input', function() {
//   const email = destinatario.value;
//   const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//   if (!emailRegex.test(email)) {
//     destinatario.setCustomValidity('Por favor, insira um email válido');
//   } else {
//     destinatario.setCustomValidity('');
//   }
// });


function handleResponse(response) {
    if (response) {
      response.json().then(function(data) {
        Swal.fire("Sucesso", data.message, "success");
      });
    } else {
      console.log("Erro na solicitação:", response.status);
      Swal.fire("Ops", "Preencha todos os campos corretamente", "error");
    }
  }

function handleSubmit(event) {
    event.preventDefault();
    Swal.fire("Enviando...", "Aguarde enquanto o e-mail está sendo enviado.", "info");

    const destinatarioValue = destinatario.value;
    const assuntoValue = assunto.value;
    const corpoValue = corpo.value;
  // Verificar se algum campo está em branco
  if (!destinatarioValue || !assuntoValue || !corpoValue) {
    Swal.fire("Aviso", "Por favor, preencha todos os campos.", "warning");
    return;
  }

  // Exibir mensagem de envio
  Swal.fire("Enviando...", "Aguarde enquanto o e-mail está sendo enviado.", "info");
    const formData = new FormData();
    formData.append('destinatario', destinatarioValue);
    formData.append('assunto', assuntoValue);
    formData.append('corpo', corpoValue);

    fetch('back.php', {
      method: 'POST',
      body: formData
    })
      .then(handleResponse)
      .catch(function(error) {
        console.log('Ocorreu um erro na solicitação:', error);
      });
}




submitBtn.addEventListener('click', handleSubmit);





// const form = document.getElementById('form')
// const header = new Headers();
// header. apperd('Content-Type', "application/json")

// function MORRER (){
// window.location.href - 'index.html';
// }

// form.addEventListener('submit', (event)=> {
//     event.preventDefault(),
//     fetch("back.php",{

//         mathod: "POST",
//         header: header,
//         body: new FormData(form)
//     })

// })