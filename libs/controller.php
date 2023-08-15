<?php
class Controller{
    public function __construct() {
        //echo '<p> Controlador Base</p>';
        //Todo controller deberá tener asociada una vista.
        $this->view = new View(); //Creo una vista asociada al controlador base 
    }
//    Cargo el modelo, teniendo en cuenta que solamente se utilizará cuando se necesite conexión a BD.
    
    function loadModel($model) {
        $url='models/'.$model.'model.php'; // Creo una ruta para el modelo a cargar
        if (file_exists($url)){ //Debe existir el modelo para poder cargarlo
            require $url;
            $modelName=$model.'Model';
            $this->model = new $modelName();
        }
    }

}
?>