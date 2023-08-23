<?php
if (!defined("FORBIDEN")) {
    header("Location: /");
} ?>

<header>
    <nav class="navbar navbar-expand-lg menu fixed-top">
        <div class="container">

            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

            <ul class="nav ms-auto">
                <li class="nav-item">
                    <a href="home" class="nav-link">
                        <img src="<?php echo URL ?>app/sts/assets/img/svg/bus-simple-solid.svg" alt="Autocarro" class="me-2">
                        Autocarros
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a href="search" rel="next" class="nav-link">
                        <img src="<?php echo URL ?>app/sts/assets/img/svg/ticket-simple-solid.svg" alt="Autocarro" class="me-2 svgRotate">
                        Procurar bilhete
                    </a>
                </li>

                <li class="nav-item">
                    <a href="account" class="nav-link">
                        <img src="<?php echo URL ?>app/sts/assets/img/svg/user-solid.svg" alt="Autocarro" class="me-2">
                        Conta
                    </a>
                </li>
            </ul>

        </div>
    </nav>
</header>