<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar/Editar Produto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script>
            window.onload = function (){
            @if (session()->get('msg'))
                    alert('{{session()->get('msg')}}');
            @endif
            };
        </script>

    </head>
    <body style="background: #EEE">

        
        <br/><a href="{{ url('/') }}">Página Inicial</a><br/><br/>
        <br/><a href="{{route('produto.create')}}">Adicionar Produto</a><br/><br/>


        <!-- Listagem de clientes -->   
        <table style="width: 70%;">
            <thead style="background: #4dc0b5; text-align: center;">
                <tr>
                    <td>Cód.Categ </td>
                    
                    <td>Cód.Prod </td>
                    <td>Nome </td>
                    <td>Descrição </td>
                    <td>Valor </td>        
                    <td>Ação </td>
                </tr> 
            </thead>
            <tbody > 
                @foreach ($produtos as $c)
                <tr style="text-align: center; background: #ced4da">
                    <td>{{$c->codcat}}</td>
                   
                    <td>{{$c->codpro}}</td>
                    <td>{{$c->nompro}}</td>
                    <td>{{$c->despro}}</td>
                    <td>{{$c->vlrpro}}</td>
                    <td>
                        
                        <button onclick="location.href='{{route('produto.edit', $c->codpro)}}'" style="font-size: 80%; width: 90%;" type="button">Editar</button></br>
                        
                        <form action="{{route('produto.destroy', $c->codpro)}}" method="post">
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


