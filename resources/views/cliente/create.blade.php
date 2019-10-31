<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro Cliente</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
               <!-- Link CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/css/style.css"/>
        
         <!--Script com Link de JQuery.-->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
       <!-- Script com link da classe CLIENTE.-->
       <script src="{{ url('/') }}/js/cliente.js" type="text/javascript"></script>

    </head>
    <body style="background-color: #e1e1e8"> 
        <button onclick="location.href = '{{'/cliente'}}'" style="color: blue">Voltar</button>
        
        <button onclick="location.href = '{{'/'}}'" style="color: blue">Página Inicial</button>
        <h3 style="width: 0%;padding: 10px; display: table; margin: auto">Cadastrar Cliente</h3>
        
        <form id="formAdd" onsubmit="return adicionarCliente('{{route('cliente.store')}}');" action="" method="post" style="width: 0%;padding: 10px; display: table; margin: auto">
    
	
            @csrf <!--para evitar envio de formularios atraves de outras pessoas ao site-->
            
            <label for='nomcli'>Nome do cliente</label><br/>
            <input type="text" name="nomcli" id="nomcli"/><br/><br/>
                        
            <label for='cpfcli'>Cpf</label><br/>
            <input type="text" name="cpfcli" id="cpfcli"/><br/><br/>
            
            <label for='endcli'>Endereço</label><br/>
            <input type="text" name="endcli" id="endcli"/><br/><br/>
                        
            <label for='numcli'>Número</label><br/>
            <input type="number" name="numcli" id="numcli"/><br/><br/>
            
            <label for='baicli'>Bairro</label><br/>
            <input type="text" name="baicli" id="baicli"/><br/><br/>
                        
            <label for='cidcli'>Cidade</label><br/>
            <input type="text" name="cidcli" id="cidcli"/><br/><br/>
            
            <label for='ufcli'>Estado</label><br/>
            <input type="text" name="ufcli" id="ufcli"/><br/><br/>
                        
            <label for='telcli'>Telefone</label><br/>
            <input type="text" name="telcli" id="telcli"/><br/><br/>
            
            
            <button id="btnAdicionarCli" type="submit" style="width: 50%;padding: 10px; display: table; margin: auto">Adicionar</button>
           
        </form></br>
        
    </body>
</html>

