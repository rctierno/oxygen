<?php
//Creo el controlador de la clase Main
class Nuevo extends Controller{
    //Defino el constructor del controlador
    function __construct() {
        parent::__construct(); //Construyo una instancia padre Controller
        $this->view->mensaje=''; //Declaro la variable mensaje para pasarla al render.        
    }
    function render() {
        $this -> view -> render('nuevo/index.php');
    }
    function registrarUsuario(){  //Este método es llamado desde el formulario "NUEVO"
        //Capturo los datos enviados por el FORMULARIO
        $tipoID = $_POST['tipoID'];
        $numeroID = $_POST['numeroID'];
        $nombreUsuario = $_POST['nombreUsuario'];
        $apellidoUsuario = $_POST['apellidoUsuario'];
        $cargoUsuario = $_POST['cargoUsuario'];
        $usuario = $_POST['usuario'];
        $passwordUsuario = $_POST['passwordUsuario'];
        //Recordar que la función retorna TRUE o FALSE si lo inserta o no.
        if( $this->model->insert(['tipoID' =>$tipoID,'numeroID' =>$numeroID,'nombreUsuario' =>$nombreUsuario,'apellidoUsuario' =>$apellidoUsuario,'cargoUsuario' => $cargoUsuario,'usuario' => $usuario,'passwordUsuario' => $passwordUsuario])){
            echo 'El usuario fue agregado correctamente';
//            $mensaje='El usuario ha sido creado correctamente'; //La variable $mensaje fue definida en el constructor
        }else{
            echo 'El usuario ya existe';
//            $mensaje='El usuario ya existe.';
        }
//        $this->view->mensaje=$mensaje; //Le paso a la vista la variable $mensaje que guardé
//        $this -> view -> render('nuevo/index.php');
        
    }
}

?>

