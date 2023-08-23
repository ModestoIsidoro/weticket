
$(document).ready(function () {

    //limpa todos elementos dentro da classe
    document.querySelector(".queqe-seat").innerHTML = "";

    for (let i = 1; i <= 48; i++) {
        //cria um elemento do tipo div
        var seat = document.createElement("div");

        //atribui uma classe ao elemento criado, atribui seu valor e seu id
        seat.className = "seat";
        seat.innerHTML = i;
        seat.id = "S" + i;

        //chamada da funcao ao ser clicada
        seat.onclick = function () { clicado(this) }
        seat.disabled = true

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

    function filled(seat) {

        var seatID = document.getElementById(seat.id);
        //seatID.style.backgroundColor = "#EC2848";
        //seatID.style.color = "#fff";
        seatID.disabled = true
    }

    /*const bus = document.getElementById(".queqe-seat");
    const totalSeats = 30;
    const seatsPerRow = 4;
    const reservedSeats = [5, 8, 27, 20, 25]; // Assentos reservados

    for (let row = 1; row <= Math.ceil(totalSeats / seatsPerRow); row++) {
        const rowElement = document.createElement("div");
        rowElement.className = "row";

        for (let seatNumber = 1; seatNumber <= seatsPerRow; seatNumber++) {
            const seat = document.createElement("div");
            seat.className = "seat";
            const seatValue = (row - 1) * seatsPerRow + seatNumber;
            seat.textContent = seatValue;

            if (reservedSeats.includes(seatValue)) {
                seat.classList.add("reserved");
            }

            rowElement.appendChild(seat);
        }

        bus.appendChild(rowElement);
    }

    const allSeats = document.querySelectorAll(".seat");
    allSeats.forEach(seat => {
        seat.addEventListener("click", toggleReservation);
    });

    function toggleReservation(event) {
        const seat = event.target;
        // Verifica se o lugar não está reservado por padrão antes de alternar
        if (!reservedSeats.includes(parseInt(seat.textContent))) {
            seat.classList.toggle("reserved");
        }
    }

    const reserveButton = document.getElementById("reserveButton");
    reserveButton.addEventListener("click", () => {
        const reservedNumbers = [];

        // Pega os números dos lugares reservados menos os ja reservados antes
        allSeats.forEach(seat => {
            if (seat.classList.contains("reserved") && !reservedSeats.includes(parseInt(seat.textContent))) {
                reservedNumbers.push(parseInt(seat.textContent));
            }
        });

        if (reservedNumbers.length > 0) {
            // Mostra os números dos lugares reservados no console
            console.log("Lugares reservados: " + reservedNumbers.join(", "));
        } else {
            console.log("Nenhum lugar reservado.");
        }
    });*/
})
