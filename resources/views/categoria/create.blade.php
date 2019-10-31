<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro Categoria</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Link CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/css/style.css"/>
        
        <!--Script com Link de JQuery.-->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
       <!-- Script com link da classe CATEGORIA.-->
       <script src="{{ url('/') }}/js/categoria.js" type="text/javascript"></script>
       
    </head>
    <body style="background-image:url('http://www.osmais.com/wallpapers/201603/estrada-livre-wallpaper.jpg'); background-size: 1366px 768px;" >
    
        <button onclick="location.href = '{{'/categoria'}}'" style="color: blue">Voltar</button>
        
        <button onclick="location.href = '{{'/'}}'" style="color: blue">Página Inicial</button>
        
      <br/><br/><br/><br/><br/><br/>
      <h3 style="width: 0%;padding: 10px; display: table; margin: auto">Cadastrar Categoria</h3>

      <form id="formAdd" onsubmit="return adicionarCategoria('{{route('categoria.store')}}');" action="" method="post"style="width: 0%;padding: 10px; display: table; margin: auto">
            @csrf <!--para evitar envio de formularios atraves de outras pessoas ao site-->
            
            <label for='nomcat' >Nome da categoria</label><br/>
            <input placeholder="digite..." type="text" name="nomcat" id="nomcat"/><br/><br/>
            <button id="btnSalvar" type="submit" style="width: 50%;padding: 10px; display: table; margin: auto">Salvar</button>
            
        </form>
            <div id="status" class="sucesso" style="width: 20%;padding: 20px; display: table; margin: auto"></div><br/>
            <div id="status" class="erro" style="width: 20%;padding: 20px; display: table; margin: auto"></div><br/>
          
    </body>
</html>

