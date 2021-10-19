<?php
$titulo = "atractivos turísticos imperdibles en tu viaje" ;
$numero = 5 ;
$botones= array("Introduccion.","Que hacer.","Lugares a visitar.","Cuándo ir.");

$lugar1  = "Chivay.";
$lugar2  = "Cañon de Colca.";
$lugar3  = "Aguas Termales Chacapi.";
$lugar4  = "El Río Colca.";
$lugar5  = "Conjunto Arqueológico de Uyo Uyo.";
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
                
                <span class="site-heading-lower"><?php echo $numero ;?> <?php echo $titulo ;?>  </span>
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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.html"><?php echo $botones [1]  ;?></a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.html"><?php echo $botones [2]  ;?></a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.html"><?php echo $botones [3]  ;?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                
                                <span class="section-heading-lower"><?php echo $lugar1 ;?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="./assets/img/chivay.jpg" width ="800"  height="300" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">La capital de la provincia de Caylloma, Chivay, es el pueblo más grande 
                            del Valle del Colca. Ubicado a cuatro horas de Arequipa, es el lugar con más hoteles y restaurantes, y ofrece numerosos
                             atractivos culturales para los visitantes.Por otro lado, también está su mercado, rico en delicias artesanales, 
                             cultivos frescos, textiles de alpaca y recuerdos del valle. Asimismo, en Chivay destacan su planetario y sus aguas 
                             termales, a tan solo 5 minutos del pueblo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                
                                <span class="section-heading-lower"><?php echo $lugar2 ;?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="./assets/img/cañonColca.jpg" width ="800"  height="800" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Para conocer el Cañón del Colca se debe viajar a Arequipa, al distrito
                             de Chivay, en la provincia de Caylloma. Es el segundo cañón más profundo del mundo con 4160 km. de profundidad, se
                             encuentra rodeado por diversos volcanes como el Ampato, Sabancaya, Hualca Hualca, entre otros.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                               
                                <span class="section-heading-lower"><?php echo $lugar3 ;?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="./assets/img/bañosTermales.jpg" width ="600"  height="600"alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Gracias a su ubicación en medio de una zona volcánica el agua subterránea 
                            emerge a altas temperaturas, permitiendo disfrutar a los visitantes de aguas termales con capacidades curativas y relajantes. 
                            Las aguas alcanzan temperaturas de 35°Cy contienen elementos como calcio, azufre, cloro y magnesio . Para acceder a los baños 
                            termales se debe seguir la ruta hacia el pueblo de Uchipampa, al lado de Puente Cervantes. Otros destinos en que pueden 
                            encontrarse son en Chivay, Callalli, Coporaque y Caylloma .</p></div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                             
                                <span class="section-heading-lower"><?php echo $lugar4 ;?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="./assets/img/rio.png" width ="700"  height="700"alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class=large >Afluente con 129 km de distancia que tiene su origen en Pampa Blanca
                             Callalli, atraviesa toda la zona de Caylloma hasta Majes para finalmente desembocar en el Océano Pacífico. 
                             En su recorrido confluye con otros ríos y se encuentra con aguas termales y hermosas formaciones geológicas. 
                             Permite realizar turismo y deportes de aventura como rafting o kayak.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                
                                <span class="section-heading-lower"><?php echo $lugar5 ;?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="./assets/img/uyo uyo.png" width ="800"  height="700"alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">Ubicado en el distrito de Yanque entre los ríos Pampaqhawana y Quesea, 
                            este centro arqueológico cuenta con 4 sectores definidos , siendo el tercero la ciudadela y el cuarto, el cementerio.
                            Es una ciudadela de uso ceremonial con diversas viviendas hechas de piedra con formas esféricas que tienen alrededor 
                            caminos de piedra y acueductos de aquella época.</p></div>
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
