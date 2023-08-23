<?php
if (!defined("FORBIDEN")) {
    header("Location: /");
}

unset($_SESSION['user']);
?>

<main class="sessao-1">
    <section class="container">
        <?php
        if (isset($_SESSION['msg'])) {

            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <div class="row">
            <div class="col-md-5">
                <p class="titulo fs-1">Encontre bilhetes de autocarro para a sua próxima viagem em um só lugar.</p>
                <p class="texto-aux fs-6">Compare e reserve de forma fácil, rápida e segura.</p>
            </div>
            <div class="col-md-7">
                <form action="search" method="POST">
                    <div class="bordas mb-2">
                        <div class="conjuntoInput">
                            <label for="nome">Origem</label>
                            <input type="text" class="entrada" placeholder="Partindo de" name="origin">
                        </div>

                        <img src="<?php echo URL ?>app/sts/assets/img/svg/Setas.svg" alt="">

                        <div class="conjuntoInput">
                            <label for="nome">Destino</label>
                            <input type="text" class="entrada" placeholder="Indo para" name="destination">
                        </div>
                    </div>

                    <div class="bordas mb-2">
                        <div class="conjuntoInput">
                            <label for="nome">Data de viagem</label>
                            <input type="date" class="entrada" placeholder="" name="departure_time">
                        </div>

                        <div class="conjuntoInput">
                            <label for="nome">Passagens</label>
                            <input type="number" min="1" max="4" class="entrada" placeholder="Quantos lugares" name="seats_number">
                        </div>
                    </div>

                    <button class="botaoPesquisa" name="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" height="23px" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path fill="#fff" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                        </svg>
                        Pesquisar
                    </button>
                </form>
            </div>
        </div>
    </section>

    <img src="<?php echo URL ?>app/sts/assets/img/Home-1-image.png" alt="" class="img-fluid mt-3">

    <section class="container mt-4">
        <p class="titulo fs-2 text-center">Compra teu bilhete com três passos simples</p>

        <div class="row mt-4">
            <div class="col-md-4 mb-2">
                <div class="container card">
                    <div class="img-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="36px">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path fill="#003459" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                        </svg>

                    </div>
                    <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci totam
                        dicta mollitia eos? Optio maxime deleniti commodi.</p>
                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="container card">
                    <div class="img-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="36px" class="svgRotate">
                            <path fill="#003459" d="M0 128C0 92.65 28.65 64 64 64H512C547.3 64 576 92.65 576 128V208C549.5 208 528 229.5 528 256C528 282.5 549.5 304 576 304V384C576 419.3 547.3 448 512 448H64C28.65 448 0 419.3 0 384V304C26.51 304 48 282.5 48 256C48 229.5 26.51 208 0 208V128z" />
                        </svg>
                    </div>
                    <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci totam
                        dicta mollitia eos? Optio maxime deleniti commodi.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="container card">
                    <div class="img-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="36px">
                            <path fill="#003459" d="M48.66 79.13C128.4 100.9 208.2 80.59 288 60.25C375 38.08 462 15.9 549 48.38C565.9 54.69 576 71.62 576 89.66V399.5C576 423.4 550.4 439.2 527.3 432.9C447.6 411.1 367.8 431.4 288 451.7C200.1 473.9 113.1 496.1 26.97 463.6C10.06 457.3 0 440.4 0 422.3V112.5C0 88.59 25.61 72.83 48.66 79.13L48.66 79.13zM287.1 352C332.2 352 368 309 368 255.1C368 202.1 332.2 159.1 287.1 159.1C243.8 159.1 207.1 202.1 207.1 255.1C207.1 309 243.8 352 287.1 352zM63.1 416H127.1C127.1 380.7 99.35 352 63.1 352V416zM63.1 143.1V207.1C99.35 207.1 127.1 179.3 127.1 143.1H63.1zM512 303.1C476.7 303.1 448 332.7 448 368H512V303.1zM448 95.1C448 131.3 476.7 159.1 512 159.1V95.1H448z" />
                        </svg>
                    </div>
                    <p class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci totam
                        dicta mollitia eos? Optio maxime deleniti commodi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-4">
        <div class="d-flex flex-column align-items-center">
            <img src="<?php echo URL ?>app/sts/assets/img/8493.jpg" alt="" class="imagem">

            <p class="text-center titulo titulo-flex fs-2 m-1">Temos disponíveis bilhetes das melhores
                agências de viagem.</p>

            <p class="text-center texto-aux fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                totam dicta.</p>
        </div>

        <div class="logo-transport mb-5">
            <img src="<?php echo URL ?>app/sts/assets/img/trans1.jpg" class="img-fluid" alt="">
            <img src="<?php echo URL ?>app/sts/assets/img/trans2.jpg" class="img-fluid" alt="">
            <img src="<?php echo URL ?>app/sts/assets/img/trans3.png" class="img-fluid" alt="">
            <img src="<?php echo URL ?>app/sts/assets/img/trans4.jpg" class="img-fluid" alt="">
            <img src="<?php echo URL ?>app/sts/assets/img/trans5.png" class="img-fluid" alt="">
            <img src="<?php echo URL ?>app/sts/assets/img/trans6.png" class="img-fluid" alt="">
        </div>
    </section>

    <section class="container mt-4">
        <div class="position-relative">
            <p class="feedback">Feedback dos clientes</p>
            <div class="d-flex justify-content-center">
                <p class="titulo titulo-flex fs-2">Ajude-nos a melhorar os nossos serviços e a atende-lo
                    melhor.</p>
            </div>
            <img src="./img/Home - 1-image8.jpg" alt="" class="imagem imagem-feedback">
        </div>

        <!-- START TESTIMONIAL -->
        <div id="testimonial_area" class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testmonial_slider_area owl-carousel" id="comentario">

                            <div class="box-area">
                                <p class="content">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since
                                </p>
                                <div class="box-perfil">
                                    <div class="perfil">
                                        <img src="<?php echo URL ?>app/sts/assets/img/1.jpg" alt="">
                                    </div>
                                    <p class="autor">Elvis dos Anjos Isidoro</p>
                                </div>
                            </div> <!-- END SINGLE TESTIMONIALS -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TESTIMONIAL -->
        
    </section>

    <section>
        <div class="container">
            <img src="<?php echo URL ?>app/sts/assets/img/Home - 1-image12.jpg" alt="" class="imagem">
            <p class="text-center titulo fs-2">Localização das transportadoras e dos pontos de embarque</p>
        </div>

        <div class="mt-4 mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1876.5968170520598!2d34.8461168994291!3d-19.831758224737708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1f2a6a8eeed287fd%3A0x5011582035a4cba1!2sEscola%20Prim%C3%A1ria%20Palmo%20e%20Meio!5e0!3m2!1spt-PT!2smz!4v1660471384290!5m2!1spt-PT!2smz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main>