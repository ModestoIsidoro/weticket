const bus = document.getElementById("queqe-seat");
const totalSeats = 30;
const seatsPerRow = 4;
const reservedSeats = [5, 8, 27, 20, 25]; // Assentos reservados

for (let rowSeat = 1; rowSeat <= Math.ceil(totalSeats / seatsPerRow); rowSeat++) {
    const rowElement = document.createElement("div");
    rowElement.className = "rowSeat";

    for (let seatNumber = 1; seatNumber <= seatsPerRow; seatNumber++) {
        const seat = document.createElement("div");
        seat.className = "seat";
        const seatValue = (rowSeat - 1) * seatsPerRow + seatNumber;
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
});