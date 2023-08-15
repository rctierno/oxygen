
<div id="header"><!-- Este es el contenedor principal de la cabecera -->
    <!-- Agrego la Barra Secundaria -->
    <div id='secondary-navbar-container'>
        <ul id="secondary-navbar"> <!-- Los links van a los controladores y no a las páginas directamente -->
            <li><a href="main">Ingresar</a></li><!-- Por eso aqui se llama al controlador MAIN y no a la página INDEX -->
            <li><a href="nuevo">Registrar</a></li>
        </ul>       
    </div>
    <div id='principal-navbar-container'>
        <nav>
           <ul id="principal-navbar"> <!-- Los links van a los controladores y no a las páginas directamente -->
            <li><a href="<?php echo constant('URL'); ?>main">Inicio</a></li><!-- Por eso aqui se llama al controlador MAIN y no a la página INDEX -->
            <li><a href="<?php echo constant('URL'); ?>nuevo">Nuevo</a></li>
            <li><a href="<?php echo constant('URL'); ?>consulta">Consulta</a></li>
            <li><a href="<?php echo constant('URL'); ?>ayuda">Ayuda</a></li>
            </ul>  
        </nav>
         
    </div>
    
</div>
