<?php
$titulo = "Cuando visitar Caylloma." ;
$numero = 5 ;
$botones= array("Introduccion.","Que hacer.","Lugares a visitar.","Cuándo ir.");
$visita = array("Paisaje atractivo.","Clima templado.");
$urlturismo = "https://turismoi.pe/tours-y-paquetes-turisticos-peru/en-arequipa";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Guia turistica-Caylloma</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-lower">Cuándo ir</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.html">Introducción</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.html">Qué Hacer</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.html">Lugares a Visitar</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.html">Cuándo ir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-lower"><?php echo $titulo ;?></span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Febrero
                                    <span class="ms-auto"><?php echo $visita[0];?> </span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Marzo
                                    <span class="ms-auto"><?php echo $visita[0];?></span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Abril
                                    <span class="ms-auto"><?php echo $visita[0];?></span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Mayo
                                    <span class="ms-auto"><?php echo $visita[1];?></span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Junio
                                    <span class="ms-auto"><?php echo $visita[1];?></span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">                
                                    Otro atractivo digno de apreciar en estos meses es 
                                    el magnífico vuelo del cóndor dentro del Cañón del
                                    Colca. Esta ave, una de las más grandes del mundo,
                                    abunda en los cielos durante estos meses, convirtiéndose 
                                    en un espectáculo visual para los visitantes.
                                    <li class="list-unstyled-item list-hours-item d-flex"> 
                                          
                                        <center><img src="./assets/img/condor.png"  width ="400"  height="400" ,alt=""></center>  
                                    </li>      

                                </li>
                               
                                <li class="list-unstyled-item list-hours-item d-flex"></li>

                                <strong><li class="list-unstyled-item list-hours-item d-flex">                             
                                    Mira todos los tours que ofrecemos en Arequipa (Caylloma) y el Colca: 
                                    <a href="https://incalake.com/es/destino/arequipa"></a>
                                    
                                </li></strong>   
                                
                               <STRong> <a href="<?php echo $urlturismo;?>"> APRETA AQUI !!! </a></STRong>
                                                     
                            </ul>                  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section about-heading">
            <div class="container">
               
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto"></div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small"> &copy; su sitio wed 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
