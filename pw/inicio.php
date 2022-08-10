<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menú </title>

    <link rel="stylesheet" href="../assets/css/estilo_inicio.css">

</head>

<body>
    <header>
        <div class="header_superior">
            <!------------------------LOGO-------------------------->
            <div class="logo">
                <img src="../assets/imagenes/bj.png" alt="">  
            </div>
            <!-----------------------titulos------------------------>
            
            <div class="titulos">
                <h1>DIRECCIÓN GENERAL DE ADMINISTRACIÓN Y FINANZAS</h1>
                <h1>COORDINACIÓN DE TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIONES</h1>
                <h1>REPORTE DE ATENCIÓN A USUARIOS INTERNOS</h1>
            </div>
          
            <!-----------------------LOGO 2------------------------>
            <div class="logo2">
                <img src="../assets/imagenes/CDMX.png" alt="">  
            </div>
        </div>
        <div class="container__menu">
           <nav>
            <ul>
                <li><a href="../pw/inicio.php" id="selected"></a></li>
                <li><a href="../pw/reporte.php">Crear Reporte</a></li>
                <li><a href="../pw/lista de reportes.php"> Lista de Reportes</a></li>
                <li><a href="../index.php">Salir</a></li>
            </ul>

           </nav> 
        </div>
    </header>

    <main>
        
    <div class="titulo">
        <h1>Tipos de servicios</h1> 
    </div>
           <div class="main__card">
                <div class="container_cards">
                    <div class="card">
                        <div class="cover__card">
                            <img src="../assets/imagenes/software.jpg" alt="Software">
                        </div>
                            <h1>Mantenimiento de Software</h1>
                            <p>El Software es el conjunto de los programas informaticos, procedimientos, reglas, documentación y datos asociados que forman parte 
                                de las operaciones de un sistema de computación.</p>
                            <!--separación-->
                            <hr>
                            <!--pie de la trajeta-->
                        <div class="footer__card">
                            <h2>Tipos de Mantenimiento</h2>
                            <p> Aplicaciones, Sistemas, Programación y virus </p>
                        </div>
                    </div>
                </div>

                <div class="container_cards">
                    <div class="card">
                        <div class="cover__card">
                            <img src="../assets/imagenes/hardware.jpg" alt="">
                        </div>
                            <h1>Mantenimiento Hardware</h1>
                            <p>Hardware es la parte física de un ordenador. Está formado por los componentes eléctricos
                                y mecánicos, tales como circuitos de cables y luz, placas, memorias y cualquier
                                otro material en estado físico que sea necesario para hacer que el equipo funcione.</p>
                            <!--separación-->
                            <hr>
                            <!--pie de la trajeta-->
                        <div class="footer__card">
                            <h2>Tipos de Mantenimiento</h2>
                            <p>Procesamiento, Almacenamiento y periféricos</p>
                        </div>
                    </div>
                </div>

                <div class="container_cards">
                    <div class="card">
                        <div class="cover__card">
                            <img src="../assets/imagenes/redes.jpg" alt="">
                        </div>
                            <h1>Mantenimiento de Redes</h1>
                            <p> Las redes es us conjunto de equipos o dispositivos conectados entre sí para el intercambio de recursos y de información.
                                Las redes tienden a fallar según su tamaño, velocidad y alcance de la red.</p>
                            <!--separación-->
                            <hr>
                            <!--pie de la trajeta-->
                        <div class="footer__card">
                            <h2>Tipos de Mantenimiento</h2>
                            <p>Caida del Sistema, Conexiones nuevas, Perdida de Contrseña.</p>
                        </div>
                    </div>
                </div>
                
            </div>
    </main>

</body>
</html>
    