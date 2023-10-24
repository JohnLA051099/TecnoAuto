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
                        href="index.php?pagina=inicio">
                        <img src="imagenes/logo-fondo.png" alt="logo" class="logoBarra">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-medium transicion cerrar text-white" href="index.php?pagina=nosotros">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-5 fw-medium transicion text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Servicios
                    </a>
                    <ul class="dropdown-menu transicion cerrar text-white">
                        <li><a class="dropdown-item" href="index.php?pagina=taller">Taller mecanico</a></li>
                        <li><a class="dropdown-item" href="preventivo.php">Mantenimiento preventivo</a></li>
                        <li><a class="dropdown-item" href="reparacion.php">Reparacion</a></li>
                        <li><a class="dropdown-item" href="desinfeccion.php">Desinfección de autos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-medium transicion cerrar text-white" href="index.php?pagina=contacto">Contacto</a>
                </li>
                <liv class="nav-item">
                    <a href="" data-bs-toggle="modal" data-bs-target="#modalLogin"
                        class="nav-link fs-5 fw-medium transicion cerrar text-white"><i
                            class="bi bi-box-arrow-in-right"></i></a>
                </liv>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 btn-buscar" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-light transicion" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</nav>

<!-- Modal login-->
<div class="modal fade" id="modalLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" class="fw-bold" id="exampleModalLabel">Iniciar sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="form-floating" method="POST">
                        <div class="row">
                            <div class="col">
                                <br>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control input-css" id="floatingInput"
                                        placeholder="Example" name="correo" autocomplete="off">
                                    <label for="floatingInput">Correo:</label>
                                </div>
                            </div>
                            <div class="col">
                                <br>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control input-css" id="floatingInput"
                                        placeholder="XXXXXXXXXX" maxlength="12" name="pass" autocomplete="off">
                                    <label for="floatingInput">Contraseña:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            </div>
                            <div class="col">
                                <br>
                                <div class="form-floating mb-3 float-end">
                                    <button type="submit" class="btn btn-forms">Iniciar sesión</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-principal" data-bs-target="#modalRegistro" href=""
                    data-bs-toggle="modal">Registrarse</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal registro -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="modalRegistro" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalToggleLabel2">Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="form-floating" method="POST">
                        <div class="row">
                            <div class="col">
                                <br>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control input-css" id="floatingInput"
                                        placeholder="Example" name="nombre" autocomplete="off">
                                    <label for="floatingInput">Tu nombre:</label>
                                </div>
                            </div>
                            <div class="col">
                                <br>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control input-css" id="floatingInput"
                                        placeholder="XXXXXXXXXX" maxlength="10" name="telefono" autocomplete="off">
                                    <label for="floatingInput">Tu teléfono:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <br>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control input-css" id="floatingInput"
                                        placeholder="example@example.com" name="correo" autocomplete="off">
                                    <label for="floatingInput">Tu correo:</label>
                                </div>
                            </div>
                            <div class="col">
                                <br>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control input-css" id="floatingInput"
                                        placeholder="XXXXXXXXXX" maxlength="12" name="pass" autocomplete="off">
                                    <label for="floatingInput">Contraseña:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            </div>
                            <div class="col">
                                <br>
                                <div class="form-floating mb-3 float-end">
                                    <button type="submit" class="btn btn-forms">Registrarse</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-principal" data-bs-toggle="modal" data-bs-target="#modalLogin">Inicio
                    sesión</button>
            </div>
        </div>
    </div>
</div>
