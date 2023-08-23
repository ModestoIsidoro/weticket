$(".testmonial_slider_area").owlCarousel({
    autoplay: true,
    slideSpeed:4500,
    items : 3,
    loop: true,
    nav:true,
    navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
    margin: 30,
    dots: true,
    responsive:{
        320:{
            items:1
        },
        767:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
    
});

/*$('.box-area').on("load", function(){
    //selecoinar o elemento a ser copiado
    var boxArea = document.querySelector('#comentario > .box-area');

    //funcao para multiplicar elemento
    function multiplicar() {

        //fazer copia do elemento selecionado
        var copy = boxArea.cloneNode(true);
        console.log(copy)

        //indexar o elemento copiado a div
        document.querySelector('#comentario').appendChild(copy);
    }

    document.querySelector('#comentario').innerHTML = "";

    for (let i = 0; i < 5; i++) {
        multiplicar();
    }
    
})*/