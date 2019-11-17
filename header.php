<header class="header-index">
    <img src="img/logo.png" alt="Logo" width="300" height="118" class="img-fluid center">
</header>

<section>


    <nav class="navbar navbar-expand-lg navbar-light bg-primary justify-content-center">
        <?php
        if (($_SERVER['REQUEST_URI'] == "/index.php") || ($_SERVER['REQUEST_URI'] == "/")) {
            ?>

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

        <?php
        }
        ?>

        <?php
        if ($_SERVER['REQUEST_URI'] == "/medicamentos.php") {
            ?>
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
            
        <?php
        }
        ?>

        <?php
        if (($_SERVER['REQUEST_URI'] == "/farmacia.php") || ($_SERVER['REQUEST_URI'] == "/farmacia.php?")) {
            ?>
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
           
        <?php
        }
        ?>

        <?php
        if ($_SERVER['REQUEST_URI'] == "/sobreNos.php") {
            ?>
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
           
        <?php
        }
        ?>

        <?php
        if ($_SERVER['REQUEST_URI'] == "/ouvidoria.php") {
            ?>
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
         
        <?php
        }
        ?>
    </nav>

</section>