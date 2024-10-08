<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <title>Loja Online</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
    <header class="menu1">
                <div class="links">
                    <a href="/welcome"> Home </a>
                    <a href="/contato"> Contato </a>
                    <a href="/categoria"> Categoria </a>
                    <a href="/cliente"> Cliente </a>
                    <a href="/pedido"> Pedido </a>
                    <a href="/produto"> Produto </a>
                    </div>
    </header>
    @yield('content')
    </body>
    <footer>
    <div class="links">
        <a> Todos os direitos reservados - 2022</a>   
</div>
</footer>
</html>