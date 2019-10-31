<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A Empresa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
               <!-- Link CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/css/style.css"/>
        
         <!--Script com Link de JQuery.-->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
       <!-- Script com link da classe CATEGORIA.-->
       <script src="{{ url('/') }}/js/categoria.js" type="text/javascript"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-image:url('http://www.osmais.com/wallpapers/201603/estrada-livre-wallpaper.jpg');
                color: yellow;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-size: 1366px 768px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('/categoria') }}">Categoria</a>
                        @T_else
                        <a href="{{ route('/cliente') }}">Cliente</a>
                        @T_else
                        <a href="{{ route('/produto') }}">Produto</a>
       
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="color: #000">
                    Titulo da Pagina
                </div>

                <div class="links">
                    <a href="http://localhost:8000/categoria" style="color: #ffed4a; font-size: 25px" >Categorias</a>
                    <a href="http://localhost:8000/cliente" style="color: #ffed4a; font-size: 25px">Clientes</a>
                    <a href="http://localhost:8000/produto" style="color: #ffed4a; font-size: 25px">Produtos</a>                                      
                    
                </div>
            </div>
        </div>
    </body>
</html>
