<?php

if (!defined("FORBIDEN")) {
    header("Location: /");
} ?>

<div class="modal modal-alert fade bg-secondary py-5" tabindex="-1" role="dialog" id="modalChoice">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-3 shadow">
            <div class="modal-body p-4 text-center">
                <h5 class="mb-0"><strong>Terminar sessão</strong></h5>
                <p class="mb-0">Tem certeza que queres terminar sessão?</p>
            </div>
            <div class="modal-footer flex-nowrap p-0">
                <a href="out" role="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end"><strong>Sim,
                        tenho</strong></a>
                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none text-black col-6 m-0 rounded-0" data-bs-dismiss="modal">Não, obrigado</button>
            </div>
        </div>
    </div>
</div>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="links-perfil">
                        <a href="account" target="_self">Dados do perfil</a>
                        <a href="#" class="active">Viagens</a>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalChoice" rel="index">Terminar sessão</a>
                    </div>
                </div>

                <div class="col-md-9" id="sessaoDois">
                    <p class="title-section">Viagens</p>
                    <div class="bilhete-disp">
                        <div class="div-trans">
                            <img src="<?php echo URL ?>app/sts/assets/img/trans6.png" alt="" class="tran-1 img-fluid">
                            <span class="seat">
                                <span>Número de assento:</span>
                                <span class="seatNumber">35</span>
                            </span>
                        </div>

                        <div class="viagem">
                            <div class="origem">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                    <path d="M176 256C176 211.8 211.8 176 256 176C300.2 176 336 211.8 336 256C336 300.2 300.2 336 256 336C211.8 336 176 300.2 176 256zM256 0C273.7 0 288 14.33 288 32V66.65C368.4 80.14 431.9 143.6 445.3 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H445.3C431.9 368.4 368.4 431.9 288 445.3V480C288 497.7 273.7 512 256 512C238.3 512 224 497.7 224 480V445.3C143.6 431.9 80.14 368.4 66.65 288H32C14.33 288 0 273.7 0 256C0 238.3 14.33 224 32 224H66.65C80.14 143.6 143.6 80.14 224 66.65V32C224 14.33 238.3 0 256 0zM128 256C128 326.7 185.3 384 256 384C326.7 384 384 326.7 384 256C384 185.3 326.7 128 256 128C185.3 128 128 185.3 128 256z" />
                                </svg>

                                <div class="position-relative">
                                    <span class="ponto">Beira</span>
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
                                    <span class="ponto">Cabo delgado</span>
                                </div>
                            </div>
                        </div>

                        <div class="travel-info">
                            <div>
                                <div class="info">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM80 256C71.16 256 64 263.2 64 272V368C64 376.8 71.16 384 80 384H176C184.8 384 192 376.8 192 368V272C192 263.2 184.8 256 176 256H80z" />
                                    </svg>
                                    <span>30/06/2022</span>
                                </div>

                                <div class="info">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z" />
                                    </svg>
                                    <span>5H</span>
                                </div>

                                <div class="info">
                                    <span>2500MT</span>
                                </div>
                            </div>

                            <span class="status">Terminada</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>