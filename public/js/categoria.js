
function eliminarCategoria(idForm, destino){
                   
                   
          confirma = confirm("Deseja eliminar esta categoria?");
                   if(confirma){
                   dadosForm = $('#'+idForm).serialize();
                   
                   $.ajax({
                   method: 'post',
                   url: destino,
                   data: dadosForm,
                   datatype: 'html',
                   success: function(data){
                     //ação de sucesso 
                     if (data === 'true'){
                        //$('linha'+idForm).remove(); // pega a linha do html para excluir
                        $('#linha'+idForm).fadeOut(1000);
                     }else{
                           msg = 'Não foi possível eliminar a categoria!';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                     }
                   },
                   error: function (argument){
                       // ação de erro
                        msg = 'Erro ao eliminar categoria!';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                       
                   }
                   
               });
                   }   
               return false;
           }
           
           function mostrarEsconderTitulo(){ //Mostra e esconde titulo usando Jquery
            $('#titulo').slideToggle(1000);
       }   
           
           function adicionarCategoria(destino){
               dadosForm = $('#formAdd').serialize();
               nomcat = $('#nomcat').val();
               
                  // Trava o botão salvar.
                  $('#btnSalvar').attr('disabled','true');
                  
                   if (nomcat.trim() !== ""){
                   $.ajax({
                       
                   method: 'post',
                   url: destino,
                   data: dadosForm,
                   datatype: 'html',
                   success: function(data){
                     if (data === "true"){
                        msg = 'Categoria adicionada com sucesso !';
                        $('#status').hide();
                        $('#status').html('<h4 class="sucesso"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                         //alert('Categoria adicionada com sucesso !');
                        // history.back();// redireciona para a página de referencia.
                         $('#nomcat').val('');
                         $('#nomcat').focus(); // mantém o cursor na caixa de texto para digitar um após o outro.
                          
                           // Destrava o botão Salvar.
                           $('#btnSalvar').removeAttr('disabled');
                           
                     }else{
                         msg = 'Erro ao adicionar categoria !';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                     }
                     
                   },
                   error: function (argument){
                       // ação de erro
                        msg = 'Erro ao eliminar categoria !';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                   }
                   
               });
           }else{
                msg = 'Preencha todos os campos !';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
               $('#nomcat').focus();
               
                   // Destrava o botão Salvar.
               $('#btnSalvar').removeAttr('disabled');
               
              
           }       
               return false;
           }
            function alterarCategoria(destino){
               dadosForm = $('#formAdd').serialize();
               nomcat = $('#nomcat').val();
               
                  // Trava o botão salvar.
                  $('#btnSalvarAltCat').attr('disabled','true');
                  
                   if (nomcat.trim() !== ""){
                   $.ajax({
                       
                   method: 'post',
                   url: destino,
                   data: dadosForm,
                   datatype: 'html',
                   success: function(data){
                     if (data === "true"){
                        msg = 'Categoria ALTERADA com sucesso !';
                        $('#status').hide();
                        $('#status').html('<h4 class="sucesso"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                        $('#nomcat').val('');
                        $('#nomcat').focus(); // mantém o cursor na caixa de texto para digitar um após o outro.
                          
                           // Destrava o botão Salvar.
                           $('#btnSalvarAltCat').removeAttr('disabled');
                           
                     }else{
                         msg = 'Erro ao EDITAR categoria !';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                     }
                     
                   },
                   error: function (argument){
                       // ação de erro
                        msg = 'Erro ao ALTERAR categoria !';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                   }
                   
               });
           }else{
                msg = 'Preencha todos os campos !';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
               $('#nomcat').focus();
               
                   // Destrava o botão Salvar.
               $('#btnSalvarAltCat').removeAttr('disabled');
               
              
           }       
               return false;
           }
               
           