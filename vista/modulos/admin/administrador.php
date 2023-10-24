<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo $ruta."/" ?>imagenes/logo-fondo.png" />

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $ruta."/" ?>css/estilosPrincipales.css" />

    <title>TecnoAuto</title>
</head>

<body>
    <!-- Barra de navegacion -->

    
    <?php include('vista/modulos/fragmentos/menuAdmin.php'); ?>

    <br><br><br><br><br><br><br><br><br>

    <section id="menu">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card cardAdmin">
                        <div class="card-body">
                            <a href="index.php?pagina=servicios" class="text-decoration-none text-reset">
                                <h2 class="card-title">Servicios</h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card cardAdmin">
                        <div class="card-body">
                            <h2 class="card-title">Promociones</h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card cardAdmin">
                        <div class="card-body">
                            <h2 class="card-title">Ordenes de servicio</h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card cardAdmin">
                        <div class="card-body">
                            <h2 class="card-title">Reportes de servicio</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br><br><br><br><br><br>

    <!--Footer  -->
    <?php include('vista/modulos/fragmentos/footer.php'); ?>


</body>
<script src="<?php echo $ruta."/" ?>js/cerrarMenu.js"></script>

</html>