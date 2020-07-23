
 function valida_campus(){
   let nome = document.getElementById("nome").value;
   var cpf = document.getElementById("cpf").value;
   var nascimento = document.getElementById("nascimento").value;
   var endereco = document.getElementById("endereco").value;
   var titulo = document.getElementById("titulo").value;
   var valor = document.getElementById("valor").value;
   var vencimento = document.getElementById("vencimento").value;

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
  
   if(cpf == ""){
     Swal.fire(
       'Atenção',
       'O campo cpf não pode estar vazio...',
       'error'
     )
     meu_form.cpf.focus();
     return false;
   }
  
   if(nascimento==""){
     Swal.fire(
       'Atenção',
       'O campo "Nascimento" não pode estar vazio...',
       'error'
     )
     meu_form.nascimento.focus();
     return false;
   }
   if(endereco==""){
     Swal.fire(
       'Atenção',
       'O campo "Endereço" não pode estar vazio...',
       'error'
     )
     meu_form.endereco.focus();
     return false;
   }
   if(titulo==""){
    Swal.fire(
      'Atenção',
      'O campo "Título" não pode estar vazio...',
      'error'
    )
    meu_form.titulo.focus();
    return false;
  }
  if(valor==""){
    Swal.fire(
      'Atenção',
      'O campo "Valor" não pode estar vazio...',
      'error'
    )
    meu_form.valor.focus();
    return false;
  }
  if(vencimento==""){
    Swal.fire(
      'Atenção',
      'O campo "Vencimento" não pode estar vazio...',
      'error'
    )
    meu_form.vencimento.focus();
    return false;
  }
}

