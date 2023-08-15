<?php
require_once './libs/database.php'; // Este archivo crea la clase database y establece su conexión.
require_once './libs/controller.php';
require_once './libs/model.php';
require_once './libs/view.php';
require_once './libs/app.php'; //Llamo al constructor de la clase APP (La que centraliza toda la aplicación.
require_once './config/config.php';
//Creo un nuevo objeto con la clase App que cargue en el paso anterior
$app = new App(); //Instancio el objeto.





?>