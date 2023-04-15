<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Make your Config</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.svg" alt="Logo"> Make Your Config
                        </a>
                        
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Marre de ton vieux PC</h1>
                                    <p class="text">Viens configurer ton nouveau PC à l'aide de notre nouveau configurateur automatique.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a onclick="executerScriptPython()" class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <script>
                                            function executerScriptPython() {
                                              fetch('./files/script.py')
                                                .then(response => response.text())
                                                .then(text => console.log(text))
                                                .catch(error => console.error(error));
                                            }
                                        </script>
                                        <!--<li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/images/slider/1.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Viens créer ton PC de rêve</h1>
                                    <p class="text">Tu trouveras ici tous les derniers composants pour construire le plus beau et puissant des PC.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <li><a onclick="executerScriptPython()" class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <script>
                                            function executerScriptPython() {
                                              fetch('./files/script.py')
                                                .then(response => response.text())
                                                .then(text => console.log(text))
                                                .catch(error => console.error(error));
                                            }
                                        </script>
                                        <!--<li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>-->
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/images/slider/2.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Configurateur</h3>
                        <p class="text">Viens créer la machine de tes rêves !!</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title">Les composants</h4>
                            <div class="features-icon">
                                <i class="lni lni-brush"></i>
                                <img class="shape" src="assets/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                                
                                <?php
                                    
                                    // Inclusion du fichier PHP qui contient les fonctions
                                    include 'controller.php';
                                     /*  
                                    // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                    echo'<p style="margin-bottom: 9px;" class="text">Carte mère : </p>';
                                    echo '<select style="width:203px" name="motherboard">';
                                    generateSelectOptions('./files/clavier.csv');
                                    echo '</select>';*/

                                    // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                    echo'<p style="margin-bottom: 9px;" class="text">Carte graphique : </p>';
                                    echo '<select style="width:203px" name="gpu" id="gpu" onchange="updateTotal()">';
                                    generateSelectOptions('./files/gpu.csv');
                                    echo '</select>';

                                    // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                    echo'<p style="margin-bottom: 9px;" class="text">Processeur : </p>';
                                    echo '<select style="width:203px" name="proc" id="proc" onchange="updateTotal()">';
                                    generateSelectOptions('./files/proc.csv');
                                    echo '</select>';

                                    // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                    echo'<p style="margin-bottom: 9px;" class="text">RAM : </p>';
                                    echo '<select style="width:203px" name="ram" id="ram" onchange="updateTotal()">';
                                    generateSelectOptions('./files/ram.csv');
                                    echo '</select>';

                                    // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                    echo'<p style="margin-bottom: 9px;" class="text">Pâte thermique : </p>';
                                    echo '<select style="width:203px" name="pate" id="pate" onchange="updateTotal()">';
                                    generateSelectOptions('./files/pate.csv');
                                    echo '</select>';

                                    // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                    echo'<p style="margin-bottom: 9px;" class="text">Ventirad/Aircooling : </p>';
                                    echo '<select style="width:203px" name="ventilo" onchange="updateTotal()">';
                                    generateSelectOptions('./files/aircooling.csv');
                                    generateSelectOptions('./files/ventilo.csv');
                                    echo '</select>';

                                    // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                    echo'<p style="margin-bottom: 9px;" class="text">Watercooling : </p>';
                                    echo '<select style="width:203px" name="watercooling"  id="watercooling" onchange="updateTotal()">';
                                    generateSelectOptions('./files/watercooling.csv');
                                    echo '</select>';

                                    // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                    echo'<p style="margin-bottom: 9px;" class="text">Stockage (HHD + SSD) : </p>';
                                    echo '<select style="width:203px" name="hdd_ssd" onchange="updateTotal()">';
                                    generateSelectOptions('./files/hdd.csv');
                                    generateSelectOptions('./files/ssd.csv');
                                    echo '</select>';

                                    // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                    echo'<p style="margin-bottom: 9px;" class="text">Boitier : </p>';
                                    echo '<select style="width:203px" name="boitier" id="boitier" onchange="updateTotal()">';
                                    generateSelectOptions('./files/boitier.csv');
                                    echo '</select>';

                                    // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                    echo'<p style="margin-bottom: 9px;" class="text">Alimentation : </p>';
                                    echo "<select style='width:203px' name='alim' id='alim' onchange='updateTotal()'>";
                                    generateSelectOptions('./files/alim.csv');
                                    echo '</select>';
                                ?>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title">Les périphériques</h4>
                            <div class="features-icon">
                                <i class="lni lni-layout"></i>
                                <img class="shape" src="assets/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <?php
                                // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                echo'<p style="margin-bottom: 9px;" class="text">Clavier : </p>';
                                echo "<select style='width:203px' name='clavier' id='clavier' onchange='updateTotal()'>";
                                generateSelectOptions("./files/clavier.csv");
                                echo "</select>";
                                
                                // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                echo'<p style="margin-bottom: 9px;" class="text">Souris : </p>';
                                echo "<select style='width:203px' name='souris' id='souris' onchange='updateTotal()'>";
                                generateSelectOptions("./files/souris.csv");
                                echo "</select>";

                                // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                echo'<p style="margin-bottom: 9px;" class="text">Ecran : </p>';
                                echo "<select style='width:203px' name='screen' id='screen' onchange='updateTotal()'>";
                                generateSelectOptions("./files/screen.csv");
                                echo "</select>";   

                                // Utilisation de la fonction pour générer les options de l'élément select "Pays"
                                echo'<p style="margin-bottom: 9px;" class="text">Casque : </p>';
                                echo "<select style='width:203px' name='casque' id='casque' onchange='updateTotal()'>";
                                generateSelectOptions("./files/casque.csv");
                                echo "</select>";
                            ?>
                            <br/>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title">Récapitulatif : </h4>
                            <div class="features-icon">
                                <i class="lni lni-bolt"></i>
                                <img class="shape" src="assets/images/f-shape-1.svg" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                        <p></p>
                            <p style="margin-right: 9px;" class="text"><strong>Carte mère : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="motherboardChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Carte graphique : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="gpuChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Processeur : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="cpuChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>RAM : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="ramChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Pâte thermique : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="pateChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Ventirad/Aircooling : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="ventiChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Watercooling : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="watercoolingChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Stockage (HHD + SSD) : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="hdd_ssdChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Boitier : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="boiteChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Alimentation : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="alimChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Clavier : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="clavierChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Souris : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="sourisChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Casque : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="casquerChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text"><strong>Ecran : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="screenChoose">Pas d'article choisi</p>

                            <p style="margin-right: 9px;" class="text" ><strong>Total : </strong></p>
                            <p style="margin-bottom: 2em;margin-top: 2px;" class="text" id="total">Pas d'article choisi</p>
                            
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <script>
        function updateTotal() {
            // Select
            var selectCarte = document.getElementById("clavier");
            var selectGpu = document.getElementById("gpu");
            var selectCpu = document.getElementById("proc");
            var selectRam = document.getElementById("ram");
            var selectPate = document.getElementById("pate");
            var selectVenti = document.getElementById("ventilo");
            var selectwatercooling = document.getElementById("watercooling");
            var selectStock = document.getElementById("hdd_ssd");
            var selectBoitier = document.getElementById("boitier");
            var selectAlim = document.getElementById("alim");
            var selectClavier = document.getElementById("clavier");
            var selectSouris = document.getElementById("souris");
            var selectEcran = document.getElementById("screen");
            var selectcasque = document.getElementById("casque");
            var totalElement = document.getElementById("total");

            // Output recap
            var outputCarte = document.getElementById("motherboardChoose");
            var outputGpu = document.getElementById("gpuChoose");
            var outputCpu = document.getElementById("cpuChoose");
            var outputRam = document.getElementById("ramChoose");
            var outputPate = document.getElementById("pateChoose");
            var outputVenti = document.getElementById("ventiChoose");
            var outputwatercooling = document.getElementById("watercoolingChoose");
            var outputStock = document.getElementById("hdd_ssdChoose");
            var outputBoitier = document.getElementById("boiteChoose");
            var outputAlim = document.getElementById("alimChoose");
            var outputClavier = document.getElementById("clavierChoose");
            var outputSouris = document.getElementById("sourisChoose");
            var outputEcran = document.getElementById("screenChoose");
            var outputCasque = document.getElementById("casquerChoose");
            
            // Affecter la valeur au recap
            var selectedCarteValue = selectCarte.options[selectCarte.selectedIndex].value;
            var selectedGpuValue = selectGpu.options[selectGpu.selectedIndex].value;
            var selectedCpuValue = selectCpu.options[selectCpu.selectedIndex].value;
            var selectedRamValue = selectRam.options[selectRam.selectedIndex].value;
            var selectedPateValue = selectPate.options[selectPate.selectedIndex].value;
            var selectedWaterValue = selectwatercooling.options[selectwatercooling.selectedIndex].value;
            var selectedBoiteValue = selectBoitier.options[selectBoitier.selectedIndex].value;
            var selectedAlimValue = selectAlim.options[selectAlim.selectedIndex].value;
            var selectedClavierValue = selectClavier.options[selectClavier.selectedIndex].value;
            var selectedsourisValue = selectSouris.options[selectSouris.selectedIndex].value;
            var selectedecranValue = selectEcran.options[selectEcran.selectedIndex].value;
            var selectedCasqueValue = selectcasque.options[selectcasque.selectedIndex].value;
            //var selectedVentiValue = selectVenti.options[selectVenti.selectedIndex].value;
            
            //var outselectedSockValue = selectStock.options[selectStock.selectedIndex].value;
           

            // Calc du prix
            var priceCarte = selectCarte.options[selectCarte.selectedIndex].dataset.price || 0;
            var priceGpu = selectGpu.options[selectGpu.selectedIndex].dataset.price || 0;
            var priceCpu = selectCpu.options[selectCpu.selectedIndex].dataset.price || 0;
            var priceRam = selectRam.options[selectRam.selectedIndex].dataset.price || 0;
            var pricePate = selectPate.options[selectPate.selectedIndex].dataset.price || 0;
            var priceBoite = selectBoitier.options[selectBoitier.selectedIndex].dataset.price || 0;
            var priceAlim = selectAlim.options[selectAlim.selectedIndex].dataset.price || 0;
            var priceClavier = selectClavier.options[selectClavier.selectedIndex].dataset.price || 0;
            var priceSouris = selectSouris.options[selectSouris.selectedIndex].dataset.price || 0;
            var pricescreen = selectEcran.options[selectEcran.selectedIndex].dataset.price || 0;
            var priceCasque = selectcasque.options[selectcasque.selectedIndex].dataset.price || 0;
            var priceWater = selectwatercooling.options[selectwatercooling.selectedIndex].dataset.price || 0;
            //var priceVenti = selectVenti.options[selectVenti.selectedIndex].dataset.price || 0;
            
            //var priceStock = selectStock.options[selectStock.selectedIndex].dataset.price || 0;
            
            
            // Aff du prix
            var total = parseFloat(priceClavier) + parseFloat(priceSouris) + parseFloat(pricescreen) + parseFloat(priceCasque)+ parseFloat(priceCarte)+ parseFloat(priceGpu)+ parseFloat(priceCpu)+ parseFloat(priceRam)+ parseFloat(pricePate)+ parseFloat(priceWater) +parseFloat(priceBoite)+ parseFloat(priceAlim)/*+ parseFloat(priceStock)+ parseFloat(priceVenti)*/;
            totalElement.innerText = total.toFixed(2);

            // Aff des articles 
            outputCarte.innerText = selectedCarteValue;
            outputGpu.innerText = selectedGpuValue;
            outputCpu.innerText = selectedCpuValue;
            outputRam.innerText = selectedRamValue;
            outputPate.innerText = selectedPateValue;
            outputwatercooling.innerText = selectedWaterValue;
            outputBoitier.innerText = selectedBoiteValue;
            outputAlim.innerText = selectedAlimValue;
            outputClavier.innerText = selectedClavierValue;
            outputSouris.innerText = selectedsourisValue;
            outputEcran.innerText = selectedecranValue;
            outputCasque.innerText = selectedCasqueValue;
            outputVenti.innerText = selectedVentiValue;
            
            outputStock.innerText = outselectedSockValue;
            
        }
    </script>
    <!--====== FEATRES TWO PART ENDS ======-->
    
    <!--====== PORTFOLIO PART START ======-->

    <section id="portfolio" class="portfolio-area portfolio-four pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Simulation/Partie IA</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="portfolio-menu text-center mt-50">
                        <ul>
                            <li data-filter="*" class="active">ALL WORK</li>
                            <li data-filter=".branding-4">BRANDING</li>
                            <li data-filter=".marketing-4">MARKETING</li>
                            <li data-filter=".planning-4">PLANNING</li>
                            <li data-filter=".research-4">RESEARCH</li>
                        </ul>
                    </div> <!-- portfolio menu -->
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row no-gutters grid mt-50">
                        <div class="col-lg-4 col-sm-6 branding-4 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="assets/images/portfolio/1.png" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/1.png"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="assets/images/portfolio/2.png" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/2.png"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 branding-4 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="assets/images/portfolio/3.png" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/3.png"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="assets/images/portfolio/4.png" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/4.png"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="assets/images/portfolio/5.png" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/5.png"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="assets/images/portfolio/6.png" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/6.png"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="assets/images/portfolio/7.png" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/7.png"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 branding-4 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="assets/images/portfolio/8.png" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/8.png"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="assets/images/portfolio/9.png" alt="">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center">
                                        <div class="portfolio-content">
                                            <div class="portfolio-icon">
                                                <a class="image-popup" href="assets/images/portfolio/9.png"><i class="lni lni-zoom-in"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                            <div class="portfolio-icon">
                                                <a href="#"><i class="lni lni-link"></i></a>
                                                <img src="assets/images/portfolio/shape.svg" alt="shape" class="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- single portfolio -->
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PORTFOLIO PART ENDS ======-->
    
    <!--====== PRINICNG START ======-->

    <!--<section id="pricing" class="pricing-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">Pricing Plans</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/basic.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Basic</h5>
                            <p class="month"><span class="price">$ 199</span>/month</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="#">GET STARTED</a>
                        </div>    
                    </div> 
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/pro.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Pro</h5>
                            <p class="month"><span class="price">$ 399</span>/month</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="#">GET STARTED</a>
                        </div>
                    </div> 
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/enterprise.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Enterprise</h5>
                            <p class="month"><span class="price">$ 699</span>/month</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="#">GET STARTED</a>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section>-->

    <!--====== PRINICNG ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <!--<section id="about" class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content mt-45">
                        <div class="about-title">
                            <h6 class="sub-title">A Little More About Us</h6>
                            <h4 class="title">Frequently Asked Questions <br> About Our Site</h4>
                        </div> 
                        <div class="about-accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Frequently Asked Question One</a>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Frequently Asked Question Two</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Frequently Asked Question Three</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
                                    <div class="card-header" id="headingFore">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">Frequently Asked Question Four</a>
                                    </div>
                                    <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Frequently Asked Question Five</a>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="assets/images/about.jpg" alt="about">
                    </div> 
                </div>
            </div> 
        </div>
    </section>-->

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->

    <!--<section id="testimonial" class="testimonial-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial-left-content mt-45">
                        <h6 class="sub-title">Testimonials</h6>
                        <h4 class="title">What Clients Says <br> About Us</h4>
                        <ul class="testimonial-line">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <p class="text">Duis et metus et massa tempus lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas ultricies, orci molestie blandit interdum. <br> <br> ipsum ante pellentesque nisl, eget mollis turpis quam nec eros. ultricies, orci molestie blandit interdum.</p>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-right-content mt-50">
                        <div class="quota">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="testimonial-content-wrapper testimonial-active">
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                            <img src="assets/images/author-1.jpg" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Mr. Jems Bond</h5>
                                            <span class="sub-title">CEO Mbuild Firm</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> 
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                                <img src="assets/images/author-2.jpg" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Mr. Jems Bond</h5>
                                            <span class="sub-title">CEO Mbuild Firm</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> 
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Praesent scelerisque, odio eu fermentum malesuada, nisi arcu volutpat nisl, sit amet convallis nunc turp.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-image">
                                                <img src="assets/images/author-3.jpg" alt="author">
                                        </div>
                                        <div class="author-name media-body">
                                            <h5 class="name">Mr. Jems Bond</h5>
                                            <span class="sub-title">CEO Mbuild Firm</span>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <span class="review">( 7 Reviews )</span>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div> 
        </div> 
    </section>-->

    <!--====== TESTIMONIAL PART ENDS ======-->
    
    
    <!--====== CONTACT PART START ======-->

    <!--<section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Contact</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div> 
                </div>
            </div> 
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text"> Elizabeth St, Melbourne<br>1202 Australia.</p>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">hello@ayroui.com</p>
                                <p class="text">support@uideck.com</p>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+333 789-321-654</p>
                                <p class="text">+333 985-458-609</p>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Leave <span>A Message.</span></h4>
                        
                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Name</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Name">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Email</label>
                                        <div class="input-items default">
                                            <input type="email" name="email" placeholder="Email">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input mt-25">
                                        <label>Massage</label>
                                        <div class="input-items default">
                                            <textarea name="massage" placeholder="Massage"></textarea>
                                            <i class="lni lni-pencil-alt"></i>
                                        </div>
                                    </div> 
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <button class="main-btn light-rounded-two">Send Message</button>
                                    </div> 
                                </div>
                            </div> 
                        </form>
                    </div> 
                </div>
            </div> 
        </div> 
    </section>-->

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="assets/images/logo.svg" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <!--<ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>--> <!-- social -->
                    <div class="footer-support text-center">
                        
                        <span class="mail">melvin.mathurin@etudiant.univ-rennes.fr</span><p style="color: white;" class="text"> & </p><span class="mail">enzo.voisin@etudiant.univ-rennes.fr</span>
                    </div>
                    <!-- <div class="copyright text-center mt-35">
                        <p class="text">Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a> and Built-with <a rel="nofollow" href="https://ayroui.com">Ayro UI</a> </p>
                    </div>  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>
    
    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    
</body>

</html>
