<?php
class Ayuda extends Controller {
    //Defino el constructor del controlador
    function __construct() {
        parent::__construct(); //Construyo una instancia padre Controller
    }
    function render() {
        $this -> view -> render('ayuda/index.php');
    }
}
?>

