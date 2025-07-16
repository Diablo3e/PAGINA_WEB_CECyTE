<?php
   echo '<img src="sise.cecytepuebla.edu.mx/Private/Ftp/ControlEscolar/20421070020097/20421070020097.jpg"></img>'; die();
    //require ("private/code.php");

    $html = file_get_contents('http://sise.cecytepuebla.edu.mx/comunication/app_dat.php?matri='.$_GET["num"].'&mat=1'); 
               
    $campos=json_decode($html, true);
    
    $quees="";
    foreach ($campos as $product) {
        
        $quees=$product["es"];
       
    }

           
                if($quees=="Estudiante")
                {
                    $status="";$marticula="";$plantel="";$cct="";$carrera="";$grado="";$grupo="";
                    $nombre="";$curp="";$sf="";$foto="";
                    
                    foreach ($campos as $product) {
                        $status=$product["status"];
                        $marticula=$product["marticula"];
                        $plantel=$product["plantel"];
                        $cct=$product["cct"];
                        $carrera=$product["carrera"];
                        $grado=$product["grado"];
                        $grupo=$product["grupo"];
                        $nombre=$product["nombre"];
                        $curp=$product["curp"];
                        $sf=$product["sf"];
                        $foto=$product["foto"];
                        $id=$product["id"];
                    }
                }
                else
                {
                    $status="";$nombre="";$cargo="";$curp="";$plantel="";$cct="";
                    $noemp="";$id="";$foto="";
                    foreach ($campos as $product) {
                        $status=$product["status"];
                        $nombre=$product["nombre"];
                        $cargo=$product["cargo"];
                        $curp=$product["curp"];                        
                        $plantel=$product["plantel"];
                        $cct=$product["cct"];
                        $noemp=$product["noemp"];
                        $foto=$product["foto"];
                        $id=$product["id"];
                        
                    }
                  }
                    
                   // if($id==decrypt($_GET["key"]))
                   // {
                   //   $continua = "ok";
                   // }





?>

<!DOCTYPE html>
<html lang="es" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Credencial / CECyTE </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="PRO Card - Material Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/transition-animations.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body class="material-template">
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide">
        <div class="header-content">
          <div class="site-title-block mobile-hidden">
            <div class="site-title"><span>CECyTE Puebla</span></div>
          </div>

          <!-- Navigation -->
          <div class="site-nav">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
              <li>
                <a class="pt-trigger" href="#home" data-animation="62"><?php echo "Credencial de ".$quees." <br>Verificada por CECyTE"; ?></a>
              </li>
             
              
             
            </ul>
            <!-- /Main menu -->
          </div>
          <!-- Navigation -->
        </div>
      </header>
      <!-- /Header -->
      
                    
      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title">CECyTE Puebla</div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          
          <div class="subpages">

            <!-- Home Subpage -->
            
            <section class="pt-page" data-id="home">
              <div class="section-inner start-page-content">
                <div class="page-header">
                  <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                      <div class="photo">
                        <img src="<?php echo $foto ?>" alt="foto">
                        
                      </div>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8">
                      <div class="title-block">
                        <h1><?php echo $nombre ?></h1>
                        <div class="owl-carousel text-rotation">                                    
                          <div class="item">
                            <div class="sp-subtitle"><?php
                                                        if($quees=="Estudiante") {
                                                          echo $carrera; 
                                                        } else {echo $cargo;}
                                                    ?>
                            </div>
                          </div>
                          <div class="item">
                            <div class="sp-subtitle"><?php echo $plantel ?></div>
                          </div>
                        </div>
                      </div>

                      <div class="social-links">
                    
                      </div>
                    </div>
                  </div>
                </div>

                <div class="page-content">
                  <div class="row">

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="about-me">
                        <center><img src="images/cecyte-logo.jpg"></img></center>
                        
                        <br>
                        <p align="justify">El Colegio de Estudios Científicos y Tecnológicos del Estado de Puebla, avala que el portador de esta credencial pertenece a la institución.</p>
                      </div>
                     
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <ul class="info-list">
                        <?php if ($quees=="Estudiante") { 
                            echo '
                              <li><span class="title">Carrera :</span><span class="value">'. $carrera.'</span></li> 
                              <li><span class="title">Grado :</span><span class="value">'. $grado.'</span> Grupo : <span class="value">'.$grupo.'</span></li> 
                              <li><span class="title">SF :</span><span class="value">'. $sf.'</span></li>'; 
                            }
                        else {
                            echo '<li><span class="title">Cargo :</span><span class="value">'. $cargo.'</span></li>';
                        }
                        
                        ?>
                        <li><span class="title">Plantel :</span><span class="value"><?php echo $plantel ?></span></li>
                        <li><span class="title">CCT :</span><span class="value"><?php echo $cct ?></span></li>
                        <li><span class="title">CURP :</span><span class="value"><?php echo $curp ?></span></li>
                        <li><span class="title">Estatus</span><span class="value"><?php echo $status ?></span></li>
                        
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->



          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>
    <footer>
      <div class="copyrights">Derechos Rerservados© 2022 CECyTE Puebla</div>
    </footer>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/pages-switcher.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/validator.js"></script>
    <script type="text/javascript" src="js/jquery.shuffle.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR-API-KEY"></script>-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="js/jquery.googlemap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
