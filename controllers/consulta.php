<?php
//Creo el controlador de la clase Main
class Consulta extends Controller{
    //Defino el constructor del controlador
    function __construct() {
        parent::__construct(); //Construyo una instancia padre Controller
    }
    function render() {
        $this -> view -> render('consulta/index.php');
    }
}

?>