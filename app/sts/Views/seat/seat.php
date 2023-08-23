<?php

if (!defined("FORBIDEN")) {
    header("Location: /");
} ?>

<main>

    <!--INFORMAÇÕES DE VIAGEM-->
    <section class="trip-info">
        <div class="container">
            <div class="">
                <span class="title">Transportadora: </span>
                <span class="content">City Link</span>
            </div>

            <div class="pontos">
                <span class="origem">Beira</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="15.737" viewBox="0 0 55 15.737">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #fff;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 5px;
                            }
                        </style>
                    </defs>
                    <g id="Componente_6_2" data-name="Componente 6 – 2" transform="translate(2.5 3.237)">
                        <path id="Caminho_1" data-name="Caminho 1" class="cls-1" d="M1152,192.182h50l-25.647-10" transform="translate(-1152 -182.182)" />
                    </g>
                </svg>

                <span class="destino">Maputo</span>
            </div>

            <div class="details">
                <div>
                    <span class="title">Data de viagem</span>
                    <span class="content">16-07-2022</span>
                </div>

                <div>
                    <span class="title">Partida</span>
                    <span class="content">4H</span>
                </div>

                <div>
                    <span class="title">Chegada</span>
                    <span class="content">20H</span>
                </div>

                <div>
                    <span class="title">Tempo de viagem</span>
                    <span class="content">16H</span>
                </div>
            </div>
        </div>
    </section>

    <!--DETALHES DA PASSAGEM-->
    <section class="trip-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="title-section">Dados do passageiros</p>
                    <form action="">
                        <div class="conjuntoInput">
                            <label for="nome">Nome</label>
                            <input type="text" class="entrada" placeholder="Nome completo" value="<?php if(isset($_SESSION['user_name'])){ echo $_SESSION['user_name'];}?>">
                        </div>

                        <div class="conjuntoInput">
                            <label for="nome">Email</label>
                            <input type="email" class="entrada" placeholder="Endereço electrónico" value="<?php if(isset($_SESSION['user_email'])){ echo $_SESSION['user_email'];}?>">
                        </div>

                        <div class="bordas">
                            <div class="conjuntoInput">
                                <label for="nome">Bilhete de Identidade</label>
                                <input type="text" class="entrada" placeholder="Número de BI" value="<?php if(isset($_SESSION['user_bi'])){ echo $_SESSION['user_bi'];}?>" >
                            </div>

                            <div class="conjuntoInput">
                                <label for="nome">Telefone</label>
                                <input type="number" class="entrada" placeholder="Número de telefone" value="<?php if(isset($_SESSION['user_phone'])){ echo $_SESSION['user_phone'];}?>">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-3">
                    <p class="title-section">Escolha o lugar</p>
                    <div class="bus">
                        <div class="" id="queqe-seat">
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <p class="title-section">Pagamento</p>
                    <div class="pagamento">
                        <div>
                            <span>Preço por lugar:</span>
                            <span>2000MT</span>
                        </div>
                        <hr>
                        <div>
                            <span>Lugares escolhidos:</span>
                            <span>2</span>
                        </div>
                        <hr>
                        <div>
                            <span>Total a pagar:</span>
                            <span>5000MT</span>
                        </div>
                        <hr>
                        <div>
                            <button id="reserveButton">Reservar</button>
                            <button>Pagar</button>
                        </div>
                    </div>

                    <div class="seat-info">
                        <div>
                            <span class="reserved"></span>
                            <span class="">Lugares reservados</span>
                        </div>

                        <div>
                            <span class="choosed"></span>
                            <span class="">Lugares por si escolhidos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>