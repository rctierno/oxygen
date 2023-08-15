<?php
//Creo el controlador de la clase Main
class Main extends Controller{
    //Defino el constructor del controlador
    function __construct() {
        parent::__construct(); //Construyo una instancia padre Controller
    }
    function render() {
        $this -> view -> render('main/index.php');
    }
    function saludo(){
        echo 'Hola Usuario, ¿cómo estás?';
    }
}

?>

