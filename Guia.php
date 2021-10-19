<?php
$titulo = "Turismo .." ;
$subtitulo = "tURISMO EN CAYLLOMA ";
$botones= array("Introduccion.","Que hacer.","Lugares a visitar.","Cuándo ir.");
$caylloma  = "Caylloma te va a encantar (provincia)-";
$promesa = "Nuestra promesa";
$sitioWED ="su sitio wed 2021.";
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> </title>
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
                <span class="site-heading-upper text-primary mb-3"> <?php echo $titulo ;?></span>
                <span class="site-heading-lower"><?php echo $subtitulo ;?></span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.html"><?php echo $botones [0]  ;?></a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.html"><?php echo $botones [1] ;?></a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.html"><?php echo $botones [2] ;?></a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.html"><?php echo $botones [3] ;?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="./assets/img/intro2.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                           
                            <span class="section-heading-lower"><?php echo $caylloma ;?></span>
                        </h2>
                        <p class="mb-3">Caylloma es una provincia que se encuentra localizada en la región de Arequipa. Su nombre proviene de una voz aymara cuyo significado quiere decir “Rincón de la Pampa”, 
                            aunque también existe una explicación quechua de su nombre, donde su significado sería más bien "Cabeza de Ayllu”.Caylloma presenta para el visitante una amplia cantidad de atractivos turísticos que la hacen famosa. Entre estos se observan puntos turísticos
                             tanto para los interesados por el Turismo Arqueológico, como por aquellos que presentan interés por el floreciente ecoturismo.</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Visitanos hoy !</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper"><?php echo $promesa ;?></span>
                                <span class="section-heading-lower">Para ti </span>
                            </h2>
                            <p class="mb-0">Caylloma presenta para el visitante una amplia cantidad de atractivos turísticos que la hacen famosa. Entre estos se observan puntos turísticos tanto para los interesados 
                                por el Turismo Arqueológico, como por aquellos que presentan interés por el floreciente ecoturismo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small"> &copy; <?php echo $sitioWED ;?></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
