<header class="header-index">
    <img src="img/logo.png" alt="Logo" width="300" height="118" class="img-fluid center">
</header>

<section>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-index ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        if ($_SERVER['REQUEST_URI'] == "/index.php") {
            ?>
            <div class="collapse navbar-collapse center-navbar " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link navbar-color bold" href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="medicamentos.php">Medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="farmacia.php">Farmácias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="sobreNos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="javascript:ouvidoriaLink()">Ouvidoria</a>
                    </li>
                </ul>
            </div>
        <?php
        }
        ?>

        <?php
        if ($_SERVER['REQUEST_URI'] == "/medicamentos.php") {
            ?>
            <div class="collapse navbar-collapse center-navbar " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link navbar-color " href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color bold" href="medicamentos.php">Medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="farmacia.php">Farmácias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="sobreNos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="javascript:ouvidoriaLink()">Ouvidoria</a>
                    </li>
                </ul>
            </div>
        <?php
        }
        ?>

        <?php
        if (($_SERVER['REQUEST_URI'] == "/farmacia.php") || ($_SERVER['REQUEST_URI'] == "/farmacia.php?")) {
            ?>
            <div class="collapse navbar-collapse center-navbar " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link navbar-color " href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="medicamentos.php">Medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color bold" href="farmacia.php">Farmácias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="sobreNos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="javascript:ouvidoriaLink()">Ouvidoria</a> </li>
                </ul>
            </div>
        <?php
        }
        ?>

        <?php
        if ($_SERVER['REQUEST_URI'] == "/sobreNos.php") {
            ?>
            <div class="collapse navbar-collapse center-navbar " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link navbar-color " href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="medicamentos.php">Medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="farmacia.php">Farmácias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color bold" href="sobreNos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="javascript:ouvidoriaLink()">Ouvidoria</a> </li>
                </ul>
            </div>
        <?php
        }
        ?>

        <?php
        if ($_SERVER['REQUEST_URI'] == "/ouvidoria.php") {
            ?>
            <div class="collapse navbar-collapse center-navbar " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link navbar-color bold" href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="medicamentos.php">Medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="farmacia.php">Farmácias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="sobreNos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-color" href="javascript:ouvidoriaLink()">Ouvidoria</a> </li>
                </ul>
            </div>
        <?php
        }
        ?>
    </nav>

</section>