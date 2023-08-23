
$(document).ready(function () {

    //limpa todos elementos dentro da classe
    document.querySelector(".queqe-seat").innerHTML = "";

    for(let i = 1; i <= 48; i++){
        //cria um elemento do tipo div
        var seat = document.createElement("div");

        //atribui uma classe ao elemento criado, atribui seu valor e seu id
        seat.className = "seat";
        seat.innerHTML = i;
        seat.id = "L"+i;

        //chamada da funcao ao ser clicada
        seat.onclick = function (){clicado(this)}

        //insere o elemento criado dentro do elemento com a classe
        document.querySelector('.queqe-seat').appendChild(seat);
    };
    
    //Funcão chamada ao ser clicada
    function clicado(e) {

        //pega o elemento com o id, muda background e cor do texto
        var seatID = document.getElementById(e.id);
        seatID.style.backgroundColor = "#003459";
        seatID.style.color = "#fff";
    }
})
