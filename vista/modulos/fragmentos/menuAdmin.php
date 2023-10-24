<link rel="stylesheet" href="<?php echo $ruta."/" ?>css/estilosPrincipales.css">
<nav class="navbar navbar-expand-lg border-bottom border-body fixed-top barraPrincipal" id="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-justified nav-underline">
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-medium transicion cerrar text-white" aria-current="page"
                        href="administrador.php">

                        <img src="<?php echo $ruta."/" ?>imagenes/logo-fondo.png" alt="logo" class="logoBarra">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=inicio" class="nav-link fs-5 fw-medium transicion cerrar text-white"><i
                            class="bi bi-box-arrow-in-right"></i></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 btn-buscar" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-light transicion" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</nav>