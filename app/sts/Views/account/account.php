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
                        <a href="#" class="active">Dados do perfil</a>
                        <a href="travels" rel="prev">Viagens</a>
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalChoice" rel="index">Terminar sessão</a>
                    </div>
                </div>

                <div class="col-md-7" id="sessaoDois">
                    <p class="title-section">Dados do passageiros</p>
                    <form action="">
                        <div class="conjuntoInput">
                            <label for="nome">Nome</label>
                            <input type="text" class="entrada" placeholder="Nome completo" value="<?php echo $_SESSION['user_name']?>">
                        </div>

                        <div class="conjuntoInput">
                            <label for="nome">Email</label>
                            <input type="email" class="entrada" placeholder="Endereço electrónico" value="<?php echo $_SESSION['user_email']?>">
                        </div>

                        <div class="bordas">
                            <div class="conjuntoInput">
                                <label for="nome">Bilhete de Identidade</label>
                                <input type="text" class="entrada" placeholder="Número de BI" value="<?php echo $_SESSION['user_bi']?>">
                            </div>

                            <div class="conjuntoInput">
                                <label for="nome">Telefone</label>
                                <input type="number" class="entrada" placeholder="Número de telefone" value="<?php echo $_SESSION['user_phone']?>">
                            </div>
                        </div>

                        <button id="btnAlterar">Alterar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>