<?php 

$ruta = Plantilla::ctrRuta();

?>

<?php 


if(isset($_GET["pagina"])){




    if($_GET["pagina"] == "inicio"){

        include "modulos/index.php";

    }


    
    if($_GET["pagina"] == "taller"){


        include "modulos/".$_GET["pagina"].".php";

    }


    if($_GET["pagina"] == "nosotros"){


        include "modulos/".$_GET["pagina"].".php";

    }

    if($_GET["pagina"] == "contacto"){


        include "modulos/".$_GET["pagina"].".php";

    }


    if($_GET["pagina"] == "servicios"){


        include "modulos/admin/".$_GET["pagina"].".php";

    }

    if($_GET["pagina"] == "administrador"){


        include "modulos/admin/".$_GET["pagina"].".php";

    }






}
