<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar/Listar Categoria</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
               <!-- Link CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/css/style.css"/>
        
         <!--Script com Link de JQuery.-->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
       <!-- Script com link da classe CATEGORIA.-->
       <script src="{{ url('/') }}/js/categoria.js" type="text/javascript"></script>
       

    </head>
    <body style="background-image:url('http://www.osmais.com/wallpapers/201603/estrada-livre-wallpaper.jpg'); background-size: 1366px 768px;">
        
        
        <button onclick="location.href = '{{'/'}}'" style="color: blue">Página Inicial</button><em>  </em>
       
        <button onclick="location.href = '{{route('categoria.create')}}'" style="color: blue">Adicionar Categoria</button>
       </br></br>
       
       <br/>
       <button onclick="mostrarEsconderTitulo()">Mostrar/Esconder Título</button>
       <br/>
       
       <h2 id="titulo" hidden>Listagem de Categorias</h2>
        
        <!-- Listagem de categorias -->   
        <table style="width: 40%;">
            <thead style="background: #4dc0b5; text-align: center;">
                <tr>
                    <td>Cód. </td>
                    <td>Nome </td>
                    <td>Ação </td>
                </tr> 
            </thead>
            <tbody>
                @foreach ($categorias as $c)
                <tr style="background: #ced4da; text-align: center;" id="linhadel{{$c->codcat}}">
                    <td>{{$c->codcat}}</td>
                    <td>{{$c->nomcat}}</td>
                    <td>
                   
                        <button onclick="location.href ='{{route('categoria.edit', $c->codcat)}}'" style="font-size: 80%; width: 60%;" type="button">Editar</button></br>

                        <form onsubmit="return eliminarCategoria('del{{$c->codcat}}','{{route('categoria.destroy', $c->codcat)}}');" id="del{{$c->codcat}}" action="{{route('categoria.destroy', $c->codcat)}}" method="post">
                            
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="font-size: 80%; width: 60%;">Excluir</button>

                        </form>
                    </td> 
                </tr>
                 
                @endforeach
            </tbody>
        
    </table>
       
  </body>

</html>

