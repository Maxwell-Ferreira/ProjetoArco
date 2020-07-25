<header id="header">
    <div id="header-top">
        <div id="top-left">
            <i class="fa fa-envelope-o"></i>
            contato@pbtl.com.br
        </div>
        <div id="top-right">
            <div id="top-phone"> 
                <i class="fa fa-phone"></i>(27) 3257 1523 / 3257 1753
            </div>
            <div id="phone-social">|</div>
            <div id="top-social">
                <a href="#"><i class="fa fa-facebook-square"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin-square"></i></a>
            </div>
        </div>
    </div>
    <div id="header-bottom">
        <div id="logo-box">
            <img src="{{asset('img/logo.png')}}" alt="" id="logo-img">
            <p>PEDRA BRANCA TRANSPORTES</p>
        </div>
        <button id="menu-toggler" onclick="menu()">
            <i class="fa fa-bars"></i>
        </button>
        <nav id="navbar">
            <ul id="nav-menu">
                <li><a href="/" class="{{request()->routeIs('home') ? 'active' : ''}}">HOME</li></a>
                <li><a href="/sobre" class="{{request()->routeIs('sobre') ? 'active' : ''}}">SOBRE</li></a>
                <li><a href="/estrutura" class="{{request()->routeIs('estrutura') ? 'active' : ''}}">ESTRUTURA</li></a>
                <li><a href="/#homeServicos">SERVIÇOS</li></a>
                <li><a href="/orcamento" class="{{request()->routeIs('orcamento') ? 'active' : ''}}">ORÇAMENTO</li></a>
                <li><a href="/contato" class="{{request()->routeIs('contato') ? 'active' : ''}}">CONTATO</li></a>
            </ul>
        </nav>
    </div>
</header>
<div id="nav-hide">
    <ul id="nav-menu-hide" class="slide-bottom">
        <li><a href="/" class="{{request()->routeIs('home') ? 'active' : ''}}">HOME</li></a>
        <li><a href="/sobre" class="{{request()->routeIs('sobre') ? 'active' : ''}}">SOBRE</li></a>
        <li><a href="/estrutura" class="{{request()->routeIs('estrutura') ? 'active' : ''}}">ESTRUTURA</li></a>
        <li><a href="/servicos" class="{{request()->routeIs('servicos') ? 'active' : ''}}">SERVIÇOS</li></a>
        <li><a href="/orcamento" class="{{request()->routeIs('orcamento') ? 'active' : ''}}">ORÇAMENTO</li></a>
        <li><a href="/contato" class="{{request()->routeIs('contato') ? 'active' : ''}}">CONTATO</li></a>
    </ul>
</div>