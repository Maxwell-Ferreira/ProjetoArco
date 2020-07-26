<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{asset('css/page.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/others.css')}}">
    <title>Pedra Branca - Transporte de Cargas</title>
</head>
<body>

    @component('layouts.header')
    @endcomponent

    @yield('content')

    @component('layouts.footer')
    @endcomponent

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    var status = 0;
    const navHide = document.getElementById('nav-hide');

    function menu(){
        if(status == 0){
            //navHide.style.borderTop = "#000 1px solid";
            navHide.style.height = "205px";
            status = 1;
        }else if(status == 1){
            navHide.style.height = "0px";
            //navHide.style.border = "none";
            status = 0;
        }
    }

    // ------------------------------------------------------ //

    var headerTop = document.getElementById('header-top');
    var count_scroll = 0;

    $(window).scroll(function() {
    if (this.pageYOffset >= 140) {
        headerTop.style.height = "0";
        headerTop.style.padding = "0";
    } else if (this.pageYOffset <140 && window.innerWidth >= 1200){
        headerTop.style.height = "19px";
        headerTop.style.padding = "8px 60px";
    }
    });

    // --------------------------------------------------------//

    $(".carousel").slick({
        dots: false,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplayspeed: 500,
    });
</script>
</body>
</html>