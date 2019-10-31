


function eliminarCliente(idForm, destino){
                   
                   
          confirma = confirm("Deseja eliminar este Cliente?");
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
                           msg = 'Não foi possível eliminar o Cliente!';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                     }
                   },
                   error: function (argument){
                       // ação de erro
                        msg = 'Erro ao eliminar Cliente!';
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
           
           function adicionarCliente(destino){
               dadosForm = $('#formAdd').serialize();
               nomcli = $('#nomcli').val();
               cpfcli = $('#cpfcli').val();
               endcli = $('#endcli').val();
               numcli = $('#numcli').val();
               baicli = $('#baicli').val();
               cidcli = $('#cidcli').val();
               ufcli = $('#ufcli').val();
               telcli = $('#telcli').val();
               
                  // Trava o botão salvar.
                  $('#btnAdicionarCli').attr('disabled','true');
                  
                   if (nomcli.trim() !== "" && endcli.trim() !== "" && cpfcli.trim() !== "" && numcli.trim() !== "" && baicli.trim() !== "" && telcli.trim() !== "" && ufcli.trim() !== ""){
                   $.ajax({
                       
                   method: 'post',
                   url: destino,
                   data: dadosForm,
                   datatype: 'html',
                   success: function(data){
                     if (data === "true"){
                        msg = 'Cliente adicionado com sucesso !';
                        $('#status').hide();
                        $('#status').html('<h4 class="sucesso"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                         //alert('Cliente adicionado com sucesso !');
                        // history.back();// redireciona para a página de referencia.               
                $('#nomcli').val('');           
                $('#cpfcli').val('');
                $('#endcli').val('');
                $('#numcli').val('');
                $('#baicli').val('');
                $('#cidcli').val('');
                $('#ufcli').val('');
                $('#telcli').val('');
                         
                //$('#nomcli','#cpfcli','#endcli','#numcli','#baicli','#cidcli','#ufcli','#telcli').next(); // aloca o cursor na caixa de texto para digitar um após o outro.
                          
                           // Destrava o botão Salvar.
                           $('#btnAdicionarCli').removeAttr('disabled');
                           
                     }else{
                         msg = 'Erro ao adicionar Cliente !';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                     }
                     
                   },
                   error: function (argument){
                       // ação de erro
                        msg = 'Erro ao eliminar Cliente !';
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
               //$('#nomcli','#cpfcli','#endcli','#numcli','#baicli','#cidcli','#ufcli','#telcli').next(); // aloca o cursor na caixa de texto para digitar um após o outro.
               
                   // Destrava o botão Salvar.
               $('#btnAdicionarCli').removeAttr('disabled');
               
              
           }       
               return false;
           }
            function alterarCliente(destino){
               dadosForm = $('#formAdd').serialize();
               nomcli = $('#nomcli').val('');              
               cpfcli = $('#cpfcli').val('');
               endcli = $('#endcli').val('');
               numcli = $('#numcli').val('');
               baicli = $('#baicli').val('');
               cidcli = $('#cidcli').val('');
               ufcli = $('#ufcli').val('');
               telcli = $('#telcli').val('');
               
                  // Trava o botão salvar.
                  $('#btnSalvarCli').attr('disabled','true');
                  
                   if (nomcli.trim() !== "" && endcli.trim() !== "" && cpfcli.trim() !== "" && numcli.trim() !== "" && baicli.trim() !== "" && telcli.trim() !== "" && ufcli.trim() !== ""){
                   $.ajax({
                       
                   method: 'post',
                   url: destino,
                   data: dadosForm,
                   datatype: 'html',
                   success: function(data){
                     if (data === "true"){
                        msg = 'Cliente ALTERADO com sucesso !';
                        $('#status').hide();
                        $('#status').html('<h4 class="sucesso"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                       $('#nomcli').val('');           
                $('#cpfcli').val('');
                $('#endcli').val('');
                $('#numcli').val('');
                $('#baicli').val('');
                $('#cidcli').val('');
                $('#ufcli').val('');
                $('#telcli').val('');        
                          
                           // Destrava o botão Salvar.
                           $('#btnSalvarCli').removeAttr('disabled');
                           
                     }else{
                         msg = 'Erro ao EDITAR Cliente !';
                        $('#status').hide();
                        $('#status').html('<h4 class="erro"> '+msg+'</h4>');
                        $('#status').slideToggle(800);
                     }
                     
                   },
                   error: function (argument){
                       // ação de erro
                        msg = 'Erro ao ALTERAR Cliente !';
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
                        //$('#nomcli','#cpfcli','#endcli','#numcli','#baicli','#cidcli','#ufcli','#telcli').next(); // aloca o cursor na caixa de texto para digitar um após o outro.

               
                   // Destrava o botão Salvar.
               $('#btnSalvarCli').removeAttr('disabled');
               
              
           }       
               return false;
           }
               
           
