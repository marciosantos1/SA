<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Atualizar Cliente</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
               <!-- Link CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/css/style.css"/>
        
         <!--Script com Link de JQuery.-->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
       <!-- Script com link da classe CLIENTE.-->
       <script src="{{ url('/') }}/js/cliente.js" type="text/javascript"></script>

    </head>
    <body>
       <button onclick="location.href = '{{'/cliente'}}'" style="color: blue">Voltar</button>
        
        <button onclick="location.href = '{{'/'}}'" style="color: blue">Página Inicial</button>
       <h3 style="width: 0%;padding: 10px; display: table; margin: auto">Atualizar dados do Cliente: {{$cliente->nomcli}}</h3>
        
       <form id="formAdd" onsubmit="return alterarCliente('{{route('cliente.update', $cliente->codcli)}}');"action="" method="post" style="width: 0%;padding: 10px; display: table; margin: auto">
            @csrf <!--para evitar envio de formularios atraves de outras pessoas ao site-->
            @method('patch')
            
            
            <label for='nomcli'>Nome do Cliente</label><br/>
            <input type="text" name="nomcli" id="nomcli" value="{{$cliente->nomcli}}"/><br/><br/>
            
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
            
            <button id="btnSalvarCli "type="submit" style="width: 50%;padding: 10px; display: table; margin: auto">Salvar</button>
           
        </form>
       <div id="status" class="sucesso" style="width: 20%;padding: 20px; display: table; margin: auto"></div><br/>
            <div id="status" class="erro" style="width: 20%;padding: 20px; display: table; margin: auto"></div><br/>
    </body>
</html>



