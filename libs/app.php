<?php
require_once 'controllers/errors.php'; //Ya dejo cargado el controlador de errores


class App { // La clase App será la que centralice todo
    function __construct() {
        //echo"<p>Nueva Aplicación Creada</p>";
        
        $url = isset($_GET['url']) ? $_GET['url']: "main"; // Si se llenó la URL la toma, caso contrario carga NULL
        $url = rtrim($url,'/'); //Elimino las barras extra que puedan ingresarse en la URL.
        $url = explode('/', $url); //Separo las rutas que hayan sido ingresadas en la URL. (ruta --> método)
        
        $archivoController = 'controllers/'.$url[0].'.php'; //Genero la ruta del controlador que se está llamando
        
        if(file_exists($archivoController)){ //Debo verificar que exista un controlador con el nombre pasado por URL
            require_once $archivoController; //Llamo al controlador que estará guardado en la ruta que se generó en el paso anterior.
            //Ya tengo cargado el nombre del controlador, entonces debo crear el objeto controlador con el constructor que está en el archivo
            $controller = new $url[0]; //Se pasó un nombre de controlador por URL, se busca el archivo y se instancia el objeto.
            $controller ->loadModel($url[0]); //Debo hacer el llamado del modelo del controlador
            //Llamo al render de vista
            $controller ->render();
            //Si comprobamos que existe el controlador, debemos validar que exista el método
            if(isset($url[1])){
                if(method_exists($controller, $url[1])){ //Además de existir el método, la URL debe contener los dos atributos, CONTROLADOR y METODO
                    $controller ->{$url[1]}(); //El método que está pasado por URL deberá existir en los métodos del controlador
                }else{
                    $controller = new Errors; //Si la ruta es un nombre de archivo INDEX, se genera un error.
                }
            }
        }else{    
            $controller = new Errors; //Si la ruta es un nombre de archivo INDEX, se genera un error.
                    
        }

    }
    
}

?>


