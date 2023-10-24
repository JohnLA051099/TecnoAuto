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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js">
    </script>
        <link rel="stylesheet" href="<?php echo $ruta."/" ?>css/estilosPrincipales.css">



    <title>TecnoAuto</title>
</head>

<body>
    <!-- Barra de navegacion -->
    <?php include('vista/modulos/fragmentos/menuAdmin.php'); ?>

    <br><br><br><br><br><br><br><br><br>

    <section id="tabla">
        <div class="container table-responsive">
            <table class="table table-striped  table-hover" id="example">
                <caption class="caption-top">Lista de servicios</caption>
                <thead class="cabezaTabla">
                    <tr>
                        <div class="col container">
                            <br>
                            <a href="" class="">
                                <button class="offset btnTabla">
                                    Agregar servicios
                                </button>
                            </a>
                            <br><br>
                        </div>
                    </tr>
                    <tr class="container">
                        <th scope="col">#</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Imagen</th>
                        <th socope="col">Herramientas</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">1</th>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td COLSPAN="2">4</td>
                    </tr> 
                    <tr>
                        <th scope="row">1</th>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td COLSPAN="2">4</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td COLSPAN="2">4</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ items",
                    info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [
                    [10, 25, -1],
                    [10, 25, "Todos"]
                ],
            });
        });
        </script>
    </section>

    <br><br><br><br><br><br><br><br><br>

    <!--Footer  -->
    <?php include('vista/modulos/fragmentos/footer.php'); ?>

</body>
<script src="<?php echo $ruta."/" ?>js/cerrarMenu.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
</script>

</html>