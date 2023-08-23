$(document).ready(function () {

    var bilhetesDisponiveis = [
        { origem: "Beira", destino: "Maputo", partida: "4h30min", chegada: "20h", preco: 2500, distancia: "15h30min, 1050km" },
        { origem: "Beira", destino: "cabo delgado", partida: "5h", chegada: "20h", preco: 2000, distancia: "14h, 950km" },
        { origem: "Beira", destino: "Tete", partida: "5h30min", chegada: "18h", preco: 1800, distancia: "17h30min, 750km" },

    ];

    if (bilhetesDisponiveis.length == 0) {
        document.querySelector('.bilhete-disp').style.display = "none";
        document.querySelector(".no_tickets").style.display = "flex";
    } else {
        //seleciona o elemento a ser copiado
        var bilhete = document.querySelector('#bilhete > .bilhete-disp');

        //funcao para multiplicar os bilhetes
        function multiplicarBilhete() {

            //faz uma copia do elemento selecionado para copia
            var copia = bilhete.cloneNode(true);

            //insere o elemento copiado como filho
            document.querySelector('#bilhete').appendChild(copia);
        }

        //funcao para inserir dados da viagem
        function exibir(bilhetes, posicao) {

            // Como a Array começa em 0, somamos 1 para  pegar o número da linha usada no seletor de css
            var numeroLinha = posicao + 1;

            //selecionamos o elemento da posicao definida acima
            var linhaAtual = document.querySelector("#bilhete > .bilhete-disp:nth-child(" + numeroLinha + ")");

            //insere os dados do objeto nas classes
            linhaAtual.querySelector(".origem .ponto").innerHTML = bilhetes.origem;
            linhaAtual.querySelector(".origem .hora").innerHTML = bilhetes.partida;
            linhaAtual.querySelector(".destino .ponto").innerHTML = bilhetes.destino;
            linhaAtual.querySelector(".destino .hora").innerHTML = bilhetes.chegada;
            linhaAtual.querySelector(".tempo-distancia").innerHTML = bilhetes.distancia;
            linhaAtual.querySelector(".preco").innerHTML = bilhetes.preco;
        }

        //apaga todos elementos da div
        document.querySelector('#bilhete').innerHTML = "";

        //para cada bilhete dispinivel, faz a copia do layout e insere os dados
        bilhetesDisponiveis.forEach(multiplicarBilhete)
        bilhetesDisponiveis.forEach(exibir)
    }

})