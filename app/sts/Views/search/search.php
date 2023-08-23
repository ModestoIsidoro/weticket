<?php

if (!defined("FORBIDEN")) {
    header("Location: /");
}
?>

<main class="">
    <section class="pesquisar">
        <div class="container">
            <form action="">
                <div class="col-md-5 bordas">
                    <div class="conjuntoInput">
                        <label for="nome">Origem</label>
                        <input type="text" class="entrada" placeholder="Partindo de">
                    </div>

                    <img src="<?php echo URL ?>app/sts/assets/img/svg/Setas.svg" alt="">

                    <div class="conjuntoInput">
                        <label for="nome">Destino</label>
                        <input type="text" class="entrada" placeholder="Indo para">
                    </div>
                </div>
                <div class="col-md-5 bordas">
                    <div class="conjuntoInput">
                        <label for="nome">Data de viagem</label>
                        <input type="date" class="entrada" placeholder="">
                    </div>

                    <div class="conjuntoInput">
                        <label for="nome">Passagens</label>
                        <input type="number" min="1" class="entrada" placeholder="Quantos lugares">
                    </div>
                </div>
                <button class="col-md-2 botaoPesquisa">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512">
                        <path fill="" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                    </svg>
                    <span>Pesquisar</span>
                </button>

            </form>
        </div>
    </section>

    <section class="topo">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="dropdown-trans">
                        <span class="title">Transportadoras</span>
                        <div class="dropdown-content">
                            <a href="">Nagi Investiment Os</a>
                            <a href="">Entre Rios</a>
                            <a href="">City Link</a>
                            <a href="">SunRise</a>
                            <a href="">Nkurula</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8" id="bilhete">
                    <div class="bilhete-disp">
                        <div class="div-trans">
                            <img src="<?php echo URL ?>app/sts/assets/img/trans6.png" alt="" class="tran-1 img-fluid">
                            <span class="valor">
                                <span class="preco">2540</span>
                                <span>MT</span>
                            </span>
                        </div>

                        <div class="viagem">
                            <div class="origem">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                    <path d="M176 256C176 211.8 211.8 176 256 176C300.2 176 336 211.8 336 256C336 300.2 300.2 336 256 336C211.8 336 176 300.2 176 256zM256 0C273.7 0 288 14.33 288 32V66.65C368.4 80.14 431.9 143.6 445.3 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H445.3C431.9 368.4 368.4 431.9 288 445.3V480C288 497.7 273.7 512 256 512C238.3 512 224 497.7 224 480V445.3C143.6 431.9 80.14 368.4 66.65 288H32C14.33 288 0 273.7 0 256C0 238.3 14.33 224 32 224H66.65C80.14 143.6 143.6 80.14 224 66.65V32C224 14.33 238.3 0 256 0zM128 256C128 326.7 185.3 384 256 384C326.7 384 384 326.7 384 256C384 185.3 326.7 128 256 128C185.3 128 128 185.3 128 256z" />
                                </svg>

                                <div class="position-relative">
                                    <span class="ponto">Beira</span>
                                    <span class="hora">04h:30min</span>
                                </div>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="11.442" viewBox="0 0 43 11.442">
                                <g transform="translate(1.5 1.942)">
                                    <path d="M1152,190.182h40l-20.518-8" transform="translate(-1152 -182.182)" fill="none" stroke="rgba(0,52,89,0.37)" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                </g>
                            </svg>

                            <div class="destino">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg>

                                <div class="position-relative">
                                    <span class="ponto">Maputo</span>
                                    <span class="hora">20h</span>
                                </div>
                            </div>
                        </div>

                        <div class="tempo">
                            <div class="distancia">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z" />
                                </svg>
                                <span class="tempo-distancia">15h 30min, 1050km</span>
                            </div>

                            <a href="seat" class="btn-selecionar" role="button">
                                Selecionar
                            </a>
                        </div>
                    </div>

                    <div class="no_tickets">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="10vh">
                            <path fill="#00345980" d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32z" />
                        </svg>
                        <p class="info fs-3">Não encontramos bilhetes disponíveis para a sua pesquisa.</p>
                        <p class="info-aux">Pode encontrar resultados alterando a sua pesquisa.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>