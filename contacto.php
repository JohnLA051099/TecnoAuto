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

    <section id="contacto">
        <div class="container">
            <h1 class="text-dark fw-bold">
                ¿Quieres contactarnos?
            </h1>
            <hr class="w-75 container border border-secondary border-4 opacity-75">
        </div>
        <br><br>
        <div class="container">
            <p class="">Pongase en contacto con nosotros tambien a través de un mensaje rapido llendo el siguiente
                formulario:</p>
        </div>
        <br><br>
        <div class="container">
            <form class="form-floating" method="POST">
                <div class="row">
                    <div class="col">
                        <br>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control input-css" id="floatingInput" placeholder="Example"
                                name="nombre" autocomplete="off">
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
                            <input type="text" class="form-control input-css" id="floatingInput" placeholder="Example"
                                name="mensaje" autocomplete="off">
                            <label for="floatingInput">Tu mensaje:</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <br>
                        <div class="form-floating mb-3 float-end">
                            <button type="submit" class="btn btn-forms">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <br><br><br>

    <!--Footer  -->
    <?php include("fragmentos/footer.php");?>

</body>
<script src="js/cerrarMenu.js"></script>

</html>