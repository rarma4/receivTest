
 function valida_campus(){
   let nome = document.getElementById("nome").value;
   var email = document.getElementById("email").value;
   var cpf = document.getElementById("cpf").value;
   var tel = document.getElementById("telefone").value;


   if(nome == ""){
   Swal.fire(
     'Atenção',
     'O campo "nome" não pode estar vazio...',
     'error'
   )
   meu_form.nome.focus();
   return false;
   }else{
     
   }
  
   if(email == ""){
     Swal.fire(
       'Atenção',
       'O campo e-mail não pode estar vazio...',
       'error'
     )
     meu_form.email.focus();
     return false;
   }
  
   if(cpf==""){
     Swal.fire(
       'Atenção',
       'O campo "CPF" não pode estar vazio...',
       'error'
     )
     meu_form.cpf.focus();
     return false;
   }
   if(tel==""){
     Swal.fire(
       'Atenção',
       'O campo "Telefone" não pode estar vazio...',
       'error'
     )
     meu_form.tel.focus();
     return false;
   }
}

