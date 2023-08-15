<!DOCTYPE html >

<html>
    <head>
        <meta charset="UTF-8" lang="es">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/default.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <title>OXYGEN HYPERBARICS - Página de Consultas</title>
    </head>
    
    <body>
        <div id="page-container"> <!-- Inserto el contenedor de página que llevará el GRID -->
            <div id='logotipo'><img src='public/img/logotipo_vertical.png' width='86' height='95'></div>
            <?php require_once 'views/header.php'; ?> <!-- Llamo al HEADER -->
            <?php require_once 'views/asidebar.php';?> <!-- Llamo al SIDEBAR -->
            <!-- El contenido del MAIN estará dado por esta página -->
            <div id='main-content'>
                
            </div>
            <?php require_once 'views/footer.php';?> <!-- Llamo al FOOTER -->
        </div>
    </body>
</html>

