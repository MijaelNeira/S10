<?php
$tituloHacer = "¿POR QUE VISITAR CAYLLOMA?-" ;
$botones= array("Introduccion.","Que hacer.","Lugares a visitar.","Cuándo ir.");
$hacer ="Qué hacer en Caylloma !!! -" ;
$recorrer ="1) Recorrer los Pueblitos del Valle del Colca -" ;
$conocer ="2)Conocer el condor andino -" ;
$probar ="3)Probar Platos Típicos de Caylloma-" ;

$sitioWED ="su sitio wed 2021.";

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
               
                <span class="site-heading-lower"><?php echo $tituloHacer ;?></span>
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
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="./assets/img/about2.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-lower"> <?php echo $hacer ;?> </span>
                                </h2>
                                <strong><p><?php echo $recorrer ;?></p></strong>
                                <p>El valle está ubicado en la parte noreste de Arequipa, en la provincia de Caylloma. Allí, se puede realizar diversas actividades como los deportes de aventura, la experiencia del 
                                    turismo vivencial en las comunidades nativas y la contemplación de la naturaleza en todo su esplendor.</p>

                                    <center><iframe width="560" height="315" src="https://www.youtube.com/embed/nuUgG6ttUuw" title="YouTube video player" frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

                                <strong><p><?php echo $conocer ;?> </p></strong>
                                <p>Una vez en el Colca, no puedes dejar de ir al Mirador de la Cruz del Cóndor, donde podrás observar 
                                    el majestuoso vuelo de esta ave andina, considerada la más grande del mundo. Sus predominantes alas extendidas
                                     que alcanzan los tres metros de longitud y que tan solo planean sin movimiento, es un espectáculo en el cielo.</p>

                                     <center><iframe width="560" height="315" src="https://www.youtube.com/embed/LbVqraFD_Lg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                                      clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                                <strong><p><?php echo $probar ;?></p></strong>
                                <p> Al llegar al Cañón del Colca muchos solo se aventuran a visitar la cruz del condor lugar emblemático del Colca, y después de avistar 
                                    al condor y hacer una caminata por el lindero del cañon parando en cada mirador, regresan a Chivay o a Arequipa 
                                    según el recorrido del tour que eligieron, pero son pocos los que continúan con el recorrido hasta Cabanaconde.
                                     Para muchos que llegan a Cabanaconde y observan las costumbres de la zona, notarán que en cuanto a la comida los cabanacondinos prefieren
                                     tomar sus alimentos en los restaurantes, donde preparan platos diversos, pero hace mucho tiempo consumían solo 
                                     los platos típicos de la zona, a continuación una relación de platos y bebidas.</p>
                                     <img src="./assets/img/platosTipicos1.png" alt="">
                                     <img src="./assets/img/bebidasTipicas.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small"> &copy;  <?php echo $sitioWED ;?></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
