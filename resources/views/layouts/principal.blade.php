<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedra Branca Transportes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/forms.css')}}">
    <link rel="stylesheet" href="{{asset('css/page.css')}}">
</head>
<body>
    <div class="header">
        <div class="header-content">
            <div class="logo">
                <img src="img/logo.png">
                <h5>Pedra Branca Transportes</h5>
            </div>
            <div class="menu">
                <ul class="menu-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/#empresa">Sobre</a></li>
                    <li><a href="/#estrutura">Estrutura</a></li>
                    <li><a href="/#servicos">Serviços</a></li>
                    <li><a href="/orcamento">Orçamento</a></li>
                    <li><a href="/contato">Contato</a></li>
                </ul>
            </div>
            <button id="btnToggle" class="btn btn-primary"><i class="fa fa-bars"></i></button>
        </div>
    </div>

    @yield('content')

    @component('layouts.footer')
    @endcomponent

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@if (request()->routeIs('orcamento') || request()->routeIs('contato') || request()->routeIs('trabalheConosco'))
    <script src="{{asset('js/forms.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endif
<script></script>
</body>
</html>