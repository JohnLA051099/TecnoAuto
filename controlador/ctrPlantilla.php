<?php 
if ($_SERVER['REQUEST_URI'] == "/TecnoAuto/index.php") {
    header("Location: index.php?pagina=inicio");
    exit();
}

class Plantilla {

    static public function ctrPlantilla(){
        include "vista/plantilla.php";
    }

    static public function ctrRuta(){
        return "vista/recursos";
    }
}
?>
