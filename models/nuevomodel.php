<?php

class NuevoModel extends Model { //Esta clase se crea en el archivo Model
    public function __construct() {
        parent::__construct(); //Construyo la clase padre Model
    }
    
    public function insert($datos) { //Función para ingresar datos en la Base
        try{
            $query = $this->db->connect()->prepare('INSERT INTO usuarios (tipoID, numeroID, nombreUsuario, apellidoUsuario,cargoUsuario,usuario,passwordUsuario) '
            . 'VALUES (:tipoID, :numeroID, :nombreUsuario, :apellidoUsuario,:cargoUsuario,:usuario,:passwordUsuario)');
            //Ingreso el mapeo de las variables
            $query ->execute(['tipoID' =>$datos['tipoID'],
                        'numeroID' =>$datos['numeroID'],
                        'nombreUsuario' =>$datos['nombreUsuario'],
                        'apellidoUsuario' =>$datos['apellidoUsuario'],
                        'cargoUsuario' => $datos['cargoUsuario'],
                        'usuario' => $datos['usuario'],
                        'passwordUsuario' => $datos['passwordUsuario']]);
                         return true;
        } catch (PDOException $e){
            return false;
        }

    
    }

}

?>