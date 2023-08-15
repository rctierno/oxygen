<!DOCTYPE html >

<html>
    <head>
        <meta charset="UTF-8" lang="es">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/default.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <title>OXYGEN HYPERBARICS - Elemento Nuevo</title>
    </head>
    
    <body>
        <div id="page-container"> <!-- Inserto el contenedor de página que llevará el GRID -->
            <div id='logotipo'><img src='<?php echo constant('URL');?>public/img/logotipo_vertical.png' width='86' height='95'></div>
            <?php require_once 'views/header.php'; ?> <!-- Llamo al HEADER -->
            <?php require_once 'views/asidebar.php';?> <!-- Llamo al SIDEBAR -->
            <!-- El contenido del MAIN estará dado por esta página -->
            
            <div id='main-content'>
                <h1>Ingreso de un Nuevo Usuario</h1>
                
                <div class="aviso">
                    <?php 
                        
                        echo $this->mensaje;
                        
                    ?> 
                </div>
                
                <form action="<?php echo constant('URL');?>nuevo/registrarUsuario" role="form" method="POST">
                    <p>
                        <label for="tipoID">Tipo ID</label> <br>
                        <select name="tipoID" required> 
                            <option>CC</option> 
                            <option>CE</option>
                            <option>Pasaporte</option> 
                            <option>Permiso Temporal</option> 
                        </select> 
                    </p>
                    <p>
                        <label for="numeroID" >Número ID</label> <br>
                        <input type="text" name="numeroID" placeholder="Tipo Identificación" required>
                    </p>
                    <p>
                        <label for="nombreUsuario" >Nombre</label> <br>
                        <input type="text" name="nombreUsuario" placeholder="Nombre de la persona" required>
                    </p>
                    <p>
                        <label for="apellidoUsuario">Apellido</label> <br>
                        <input type="text" name="apellidoUsuario" placeholder="Apellido de la persona" required>
                    </p>
                    <p>
                        <label for="cargoUsuario">Cargo</label> <br>
                        <select name="cargoUsuario" required> 
                            <option>Auxiliar</option> 
                            <option>Operario</option>
                            <option>Dirección Técnica</option> 
                            <option>Gerencia</option> 
                            <option>SuperUser</option> 
                        </select> 
                    </p>
                    <p>
                        <label for="usuario">Usuario</label> <br>
                        <input type="text" name="usuario" placeholder="Nombre de Usuario" required>
                    </p>
                    <p>
                        <label for="passwordUsuario">Contraseña</label> <br>
                        <input type="password" name="passwordUsuario" placeholder="Contraseña del Usuario" required>
                    </p>
                    <p>
                    <input type="submit" value="Registrar Usuario"> 
                    
                    </p>

                </form>
            </div>
            <?php require_once 'views/footer.php';?> <!-- Llamo al FOOTER -->
        </div>
    </body>
</html>

