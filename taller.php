<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosPrincipales.css">
    <link rel="shortcut icon" href="imagenes/logo-fondo.png" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>TecnoAuto</title>
</head>

<body>

    <!-- Barra de navegacion -->
    <?php include('fragmentos/menuPrincipal.php'); ?>

    <br><br><br><br>

    <div class="container">
        <h1 class="text-dark fw-bold">
            Taller mecánico
        </h1>
        <hr class="w-75 container border border-secondary border-4 opacity-75">
        <center>
            <h2 class="fw-bold">Su taller mecanico de confianza</h2>
        </center>
        <p class="text-dark fs-5">Contamos con una amplia variedad de servicios de Taller mecánico. Estamos en constante
            actualización de nuestros servicios para brindarte el mejor servicio a ti y a tu auto.</p>
    </div>

    <section id="servicios">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card cardHover" style="width: 18rem;">
                        <img src="imagenes/1-galeria.jpeg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Frenos</h5>
                            <p class="card-text">
                                Contamos con las mejores balatas de disco o tambor, rectificacion de discos o tambores,
                                asentado de disco o tambor, ver mas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card cardHover" style="width: 18rem;">
                        <img src="imagenes/1-galeria.jpeg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Frenos</h5>
                            <p class="card-text">
                                Contamos con las mejores balatas de disco o tambor, rectificacion de discos o tambores,
                                asentado de disco o tambor, ver mas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card cardHover" style="width: 18rem;">
                        <img src="imagenes/1-galeria.jpeg" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Frenos</h5>
                            <p class="card-text">
                                Contamos con las mejores balatas de disco o tambor, rectificacion de discos o tambores,
                                asentado de disco o tambor, ver mas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <br><br><br>

    <br><br><br>

    <!--Footer  -->
    <?php include("fragmentos/footer.php");?>

</body>
<script src="js/cerrarMenu.js"></script>

</html>