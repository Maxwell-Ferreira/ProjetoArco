// Carousel da section frota
$(".carousel-frota").owlCarousel({
	items: 1,
	loop: true,
	autoplay: true,
	autoplayTimeout: 5000,
	smartSpeed: 1000,
	margin: 10,
	dots: false
});

// Carousel da section servicos
$(".carousel-servicos").owlCarousel({
	items: 4,
	loop: true,
	autoplay: true,
	autoplayTimeout: 5000,
	smartSpeed: 1000,
	responsive: {
		0:{
            items:1,
        },
        550:{
            items:2,
		},
		800:{
			items:3,
		},
        1000:{
            items:4,
        }
	}
});

// Mostrando botão de voltar ao topo

var btnTopo = document.getElementById('btnTopo');

$(window).scroll(function() {
    if (this.pageYOffset >= 300) {
        btnTopo.style.display = "block";

    } else{
        btnTopo.style.display = "none";
    }
});

// Fazendo scroll suave para links internos da home

$('.link-interno').click(function(e){
	e.preventDefault();
	var id = $(this).attr('href'),
		targetOffset = $(id).offset().top;
	$('html, body').animate({
		scrollTop: targetOffset - 30
	}, 500)
});

$('#btnTopo').click(function(e){
	e.preventDefault();
	var id = $(this).attr('href'),
		targetOffset = $(id).offset().top;
	$('html, body').animate({
		scrollTop: targetOffset - 30
	}, 500)
});