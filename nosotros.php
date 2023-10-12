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

    <section id="banner">
        <div class="container">
            <img src="imagenes/banner.jpeg" alt="" class="img-fluid bannerNosotros">
        </div>
    </section>

    <br><br><br>

    <section id="historia">
        <div class="container">
            <h1 class="text-dark fw-bold">
                Historia de TECNOAUTO
            </h1>
        </div>
        <hr class="w-75 container border border-secondary border-4 opacity-75">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="texto">
                        TECNOAUTO nace hace 10 años en Nezahualcoyotl, Estado de México. Manuel era dueño de una taller
                        mecanico automotriz
                        , TECNOAUTO empezo como un pequeño taller automotriz con un
                        local pequeño pero conforme
                        fue ganando exito se empezo a expandir hasta el dia de hoy tener la gran variedad de servicios
                        con los que ofrece.
                    </p>
                </div>
                <div class="col container">
                    <img src="imagenes/historiaTECNOAUTO.png"
                        class="img-fluid h-100 w-100 img-thumbnail rounded mx-auto d-block" alt="">
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <!--Footer  -->
    <?php include("fragmentos/footer.php");?>

</body>
<script src="js/cerrarMenu.js"></script>

</html>