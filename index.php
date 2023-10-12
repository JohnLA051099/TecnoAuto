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

    <br><br><br>

    <section id="inicio" class="container">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="card card-index cardHover">
                        <img src="imagenes/taller-mecanico.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Taller mecanico </h5>
                            <p class="card-text texto">
                                Contamos con una amplia variedad de servicios de Taller mecánico. Estamos en constante
                                actualización de nuestros servicios para brindarte el mejor servicio a ti y a tu auto.
                            </p>
                            <a href="taller.php" class="btn btn-principal">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-index cardHover">
                        <img src="imagenes/llenado-de-aceite.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mantenimiento preventivo </h5>
                            <p class="card-text texto">
                                Si usted le da un correcto mantenimiento preventivo a su automovil, este podrá darle el
                                servicio para la cual fue diseñada por mucho mas tiempo.
                            </p>
                            <a href="#" class="btn btn-principal">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-index cardHover">
                        <img src="imagenes/reparacion.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Reparación </h5>
                            <p class="card-text texto">
                                Todas las reparaciones las efectuamos de acuerdo al manual de agencia y con herramienta
                                especial para cada operación.
                            </p>
                            <a href="#" class="btn btn-principal">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-index cardHover">
                        <img src="imagenes/Esterilizacion-de-autos.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Desinfección de autos</h5>
                            <p class="card-text texto">
                                Todas las reparaciones las efectuamos de acuerdo al manual de agencia y con herramienta
                                especial para cada operación.
                            </p>
                            <a href="#" class="btn btn-principal">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <span class="backgorund container">
        <section class="gallery">
            <article class="card-gallery">
                <figure>
                    <img src="imagenes/1-galeria.jpeg" id="img1"
                        alt="Cambio de balatas de carbon o ceramicas de las mejores marcas,asdetado de disco o de tambor.">
                </figure>
            </article>
            <article class="card-gallery">
                <figure>
                    <img src="imagenes/2-galeria.jpeg" id="img2"
                        alt="Servicio profesional de afinacion, remplazo de bujias, filtros, lavado de inyectores y mas.">
                </figure>
            </article>
            <article class="card-gallery">
                <figure>
                    <img src="imagenes/3-galeria.jpeg" id="img3"
                        alt="Checamos la vida de tus llantas, solo el desgaste o un chipote que tengan.">
                </figure>
            </article>
            <article class="card-gallery">
                <figure>
                    <img src="imagenes/4-galeria.jpeg" id="img4"
                        alt="Alineación y balanceo de llantas del eje delantero o trasero en fosa especial para alineación.">
                </figure>
            </article>
            <article class="card-gallery">
                <figure>
                    <img src="imagenes/5-galeria.jpeg" id="img5"
                        alt="El principal componente de su suspension es el amortiguador y nosotros sabemos todo acerca de ellos.">
                </figure>
            </article>
            <article class="card-gallery">
                <figure>
                    <img src="imagenes/6-galeria.jpeg" id="img6"
                        alt="Cambio de filtro y de aceite, recuerda que la vida de tu motor depende del aceite.">
                </figure>
            </article>
            <article class="card-gallery">
                <figure>
                    <img src="imagenes/7-galeria.jpeg" id="img7"
                        alt="Checamos tu sistema electrico, reparamos alternadores, marchas, cortos, fallas en luces y todos los componentes electricos de su auto.">
                </figure>
            </article>
            <article class="card-gallery">
                <figure>
                    <img src="imagenes/8-galeria.jpeg" id="img8"
                        alt="Servicio profesional de pulido y encerado con maquina y proudctos Dopont y 3M.">
                </figure>
            </article>
            <article class="card-gallery">
                <figure>
                    <img src="imagenes/9-galeria.jpeg" id="img9"
                        alt="Trabajos con excelente terminado en acabado, igualado de tono, textura y brillo en hojalateria y pintura.">
                </figure>
            </article>
        </section>

        <!-- Modal-->
        <div id="miModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
    </span>

    <section id="contacto" class="container w-75">
        <div class="container text-center">
            <h2>¿Deseas recibir información o tienes alguna duda?</h2>
            <hr class="w-75 container border border-secondary border-4 opacity-75">
            <p class="fw-bold fs-4">
                Envianos tus comentarios
            </p>
            <p class="">
                Como negocio deseamos tener una mejora constante, es por ello que queremos saber de ti para poderte
                brindar productos con la mejor calidad y con una experiencia satisfactoria. Ponte en contacto con
                nosotros.
            </p>
            <a type="button" href="contacto.php" class="btn btn-principal">Contacto</a>
        </div>
    </section>

    <br><br><br>

    <!--Footer  -->
    <?php include("fragmentos/footer.php");?>

</body>
<script src="js/cerrarMenu.js"></script>
<script src="js/modalImagenes.js"></script>

</html>