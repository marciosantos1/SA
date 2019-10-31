<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar/Editar Cliente</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
               <!-- Link CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/css/style.css"/>
        
         <!--Script com Link de JQuery.-->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
       <!-- Script com link da classe CLIENTE.-->
       <script src="{{ url('/') }}/js/cliente.js" type="text/javascript"></script>

        <script>
            window.onload = function (){
            @if (session()->get('msg'))
                    alert('{{session()->get('msg')}}');
            @endif
            };
        </script>

    </head>
    <body style="background: #EEE">

        
        <button onclick="location.href = '{{'/'}}'" style="color: blue">Página Inicial</button><em>  </em>
       
        <button onclick="location.href = '{{route('cliente.create')}}'" style="color: blue">Adicionar Cliente</button>
       </br></br>


        <!-- Listagem de clientes -->   
        <table style="width: 70%;">
            <thead style="background: #4dc0b5; text-align: center;">
                <tr>
                    <td>Cód. </td>
                    <td>Nome </td>
                    <td>Cpf </td>
                    <td>Endereço </td>
                    <td>Número </td>
                    <td>Bairro </td>
                    <td>Cidade </td>
                    <td>Estado </td>
                    <td>Telefone </td>
                    <td>Ação </td>
                </tr> 
            </thead>
            <tbody > 
                @foreach ($clientes as $cli)
                <tr style="text-align: center; background: #ced4da">
                    <td>{{$cli->codcli}}</td>
                    <td>{{$cli->nomcli}}</td>
                    <td>{{$cli->cpfcli}}</td>
                    <td>{{$cli->endcli}}</td>
                    <td>{{$cli->numcli}}</td>
                    <td>{{$cli->baicli}}</td>
                    <td>{{$cli->cidcli}}</td>
                    <td>{{$cli->ufcli}}</td>
                    <td>{{$cli->telcli}}</td>
                    
                    <td>
                        
                        <button onclick="location.href='{{route('cliente.edit', $cli->codcli)}}'" style="font-size: 80%; width: 90%;" type="button">Editar</button></br>
                        
                        <form action="{{route('cliente.destroy', $cli->codcli)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="font-size: 80%; width: 90%;">Excluir</button>
                            
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
       
    </table>
</body>
</html>


