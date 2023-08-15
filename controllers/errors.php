<?php
class Errors extends Controller{ //Ojo, no se puede usar la palabra "Error" porque es una palabra reservada
    function __construct() {
        parent::__construct(); //Construyo una instancia padre Controller
        $this -> view -> render('error/index.php');
        //echo "<p>Se ha generado un error al cargar el recurso</p>";
    }
}

?>