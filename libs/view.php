<?php
class View{
    public function __construct() {
        //echo 'Se ha creado una nueva VISTA BASE';
    }
    public function render($nombre){  //Con esta sentencia cargo la vista que se encuentra dentro de la carpeta views.
        require 'views/'.$nombre;
    }

}



?>