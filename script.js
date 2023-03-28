function Sair() {
    var modal = document.getElementById('modal');
    
    modal.style.display = 'none';    
}

function EditarRegistro(id) {
    var modal = document.getElementById('modal');
    
    modal.style.display = 'flex';

    // alert("Id: " + id);
  }
    
function PesquisarPessoa() {
    var nome = document.getElementsById('nome').value;
    
    modal.style.display = 'none';    
}

//   var formulario = document.getElementById('formulario');

//   formulario.addEventListener('submit', function(event) {
//     event.preventDefault();
  
//     // Faça a chamada AJAX para atualizar o registro no servidor
//     // ...
  
//     // Feche o modal
//     modal.style.display = 'none';
//   });
  