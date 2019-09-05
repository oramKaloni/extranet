<?php include("assets/php/validate.php"); ?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Extranet | Kaloni</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300|Open+Sans:400,300,300italic,400italic" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/success.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

  <?php
  include("assets/get_ip.php");
  $ipClient = getRealIP();
  include("assets/redirect.php");
  include("shared/header.php");
  ?>

  <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <div class="row">
          <div class="span12">


            <!-- Place somewhere in the <body> of your page -->
            <div id="mainslider" class="flexslider">
              <ul class="slides">
                <li data-thumb="assets/img/slides/flexslider/kaloni.jpg">
                  <img src="assets/img/slides/flexslider/kaloni.jpg" style="max-height: 400px !important; " alt="" />
                  <div class="flex-caption primary">
                    <h2>Ser Kaloni</h2>
                    <h4>Información interna</h4>
                  </div>
                </li>
                <li data-thumb="assets/img/slides/flexslider/7.jpg">
                  <img src="assets/img/slides/flexslider/7.jpg" style="max-height: 400px !important; " alt="" />
                  <div class="flex-caption warning">
                    <h2>Novedades</h2>
                    <h4>Infórmate </h4>
                  </div>
                </li>
                <li data-thumb="assets/img/slides/flexslider/8.jpg">
                  <img src="assets/img/slides/flexslider/8.jpg" style="max-height: 400px !important; " alt="" />
                  <div class="flex-caption success">
                    <h2>Encuestas</h2>
                    <h4>Contesta nuestras encuestas</h4>
                  </div>
                </li>
                <li data-thumb="assets/img/slides/flexslider/2.jpg">
                  <img src="assets/img/slides/flexslider/2.jpg" style="max-height: 400px !important; " alt="" />
                  <div class="flex-caption danger">
                    <h2>K-Learning</h2>
                    <h4>Nuestra plataforma de RRHH</h4>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- <div class="container">
    <div class="row">
      <div class="span12">
        <div class="tagline">
          <div class="row">
            <div class="span6">
              <div class="tagline_text">
                <h2>¡Revisa los <span class="text-success">horarios</span> de las salas de juntas!</h2>
              </div>
            </div>

            <div class="span6">
              <div class="btn-toolbar cta">
                <a class="btn btn-large btn-danger" href="meeting.php"><i class="m-icon-big-swapdown m-icon-white"></i> Ver horarios</a>
              </div>
            </div>


          </div>
        </div>
      </div>

    </div>
  </div> -->

  <!-- end tagline -->

  <section id="maincontent">
    <div class="container">

      <div class="row">


        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="divider"></div>
          </div>
        </div>
        <!-- end divider -->

        <div class="row">


          <div class="span9">
            <a href="faq-mx.php">
              <h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Kaloni Holding Group</h3>
            </a>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" style="background:#009cea !important;">
                    Historia de Kaloni
                  </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <img src="assets/img/home/icon-home1.png" class="alignleft" alt="" />
                    <h5>Historia de Kaloni</h5>
                    <p>
                      El concepto Kaloni nace por iniciativa del Dr. J. Ariel Díaz, un médico especialista interesado en crear un espacio donde se ofrecieran servicios integrales de clase mundial para el cuidado de la salud e imagen, a través de novedosas técnicas y personal altamente capacitado.
                    </p>
                    <a href="faq-mx.php#faq-historia">Leer más</a>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" style="background:#009cea !important;">
                    Propósito
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <img src="assets/img/home/icon-home2.png" class="alignleft" alt="" />
                    <h5>Propósito</h5>
                    <p>
                      Ser líderes globales en la industria de microinjerto capilar, con un portafolio integral de servicios y productos de vanguardia con excelente calidad.
                    </p>
                  </div>
                </div>
              </div>
             
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour" style="background:#009cea !important;">
                    Actividades estratégicas
                  </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <img src="assets/img/home/icon-home4.png" class="alignleft" alt="" />
                    <h5>Actividades estratégicas</h5>
                    <p>
                      * Expansión <br />
                      * Transformación Cultural <br />
                      * Customer Experience
                    </p>
                    <a href="faq-mx.php#faq-plan">Leer más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="span3">
          <a href="faq-mx.php" style="text-style:none">
              <h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Noticias del mes</h3>
            </a>
              <div id="myCarousel" class="carousel slide testimonials">
            <div class="carousel-inner">
                
               <? require_once('assets/php/bdd1.php');
                $consulta = $mysqli->query("SELECT * FROM News ORDER BY idNews DESC  limit 1 "); 
                while ($fila = mysqli_fetch_array($consulta)) { 
                  $primero = $fila['idNews']  ?> 
              <div class="item active" style="text-align:center">
                <div class="testimonial"  >
                  <img src="assets/img/news/<? echo $fila['imagenNews'] ?>"  style="max-height:110px !important;" alt="" />
                  <div class="info">
                    <span class="author"><strong><a href="#"><? echo $fila['nombreNews'] ?></a>,</strong></span>
                  </div>
                </div>
              </div>
              <? } ?>
              
              
              <? 
                $consulta2 = $mysqli->query("SELECT * FROM News  WHERE idNews != '". $primero ."' ORDER BY idNews DESC "); 
                while ($fila2 = mysqli_fetch_array($consulta2)) { ?> 
              <div class="item" style="text-align:center">
                <div class="testimonial">
                  <img src="assets/img/news/<? echo $fila2['imagenNews'] ?>" alt=""  style=" max-height:110px !important;" />
                  <div class="info">
                    <span class="author"><strong><a href="#"><? echo $fila2['nombreNews'] ?></a>,</strong></span>
                  </div>
                </div>
              </div>
              <? } ?>
 
             
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>










        </div>

        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="divider"></div>
          </div>
        </div>
        <div class="span3">
          <a href="#">
            <h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Lo último</h3>
          </a>
          <p>Resumen de la sección, ¿qué encontrarán aquí?</p>
        </div>
        <div class="span3">
          <div class="well well-primary box">
            <img src="assets/img/icons/box-1-white.png" alt="" />
            <?php
            require_once('assets/php/bdd1.php');
            $consulta = $mysqli->query("SELECT * FROM Event ORDER BY fechaEvento DESC LIMIT 1");
            while ($fila = mysqli_fetch_array($consulta)) {
              $urlEventSingle = "events-single.php?vEv=" . $fila['idEvento'];
              $phrase_array = explode(' ', $fila['descripcionEvento']);
              if (count($phrase_array) > 15 && 15 > 0) {
                $descripcionTexto = implode(' ', array_slice($phrase_array, 0, 15)) . '...';
              }
              echo " <h4>" . $fila['nombreEvento'] . "</h4>
                    <p>" . $descripcionTexto . "</p>
                    <a href='" . $urlEventSingle . "'><strong>Ver más</strong></a>
                ";
            }
            ?>
          </div>
        </div>
        <div class="span3">
          <div class="well well-success box">
            <img src="assets/img/icons/box-2-white.png" alt="" />
            <?php
            require_once('assets/php/bdd1.php');
            $consulta = $mysqli->query("SELECT * FROM News ORDER BY fechaNews DESC LIMIT 1");
            while ($fila = mysqli_fetch_array($consulta)) {
              $urlNewsSingle = "news-single.php?vNv=" . $fila['idNews'];
              $phrase_array = explode(' ', $fila['descripcionNews']);
              if (count($phrase_array) > 15 && 15 > 0) {
                $descripcionTexto = implode(' ', array_slice($phrase_array, 0, 15)) . '...';
              }
              echo " <h4>" . $fila['nombreNews'] . "</h4>
                    <p>" . $descripcionTexto . "</p>
                    <a href='" . $urlNewsSingle . "'><strong>Ver más</strong></a>
                ";
            }
            ?>
          </div>
        </div>
        <div class="span3">
          <div class="well well-warning box">
            <img src="assets/img/icons/box-3-white.png" alt="" />
            <?php
            require_once('assets/php/bdd1.php');
            $consulta = $mysqli->query("SELECT * FROM Project ORDER BY fechaProyecto DESC LIMIT 1");
            while ($fila = mysqli_fetch_array($consulta)) {
              $urlNewsSingle = "project-single.php?vNv=" . $fila['idProyecto'];
              $phrase_array = explode(' ', $fila['descripcionProyecto']);
              if (count($phrase_array) > 15 && 15 > 0) {
                $descripcionTexto = implode(' ', array_slice($phrase_array, 0, 15)) . '...';
              }
              echo "<h4>" . $fila['nombreProyecto'] . "</h4>
                    <p>" . $descripcionTexto . "</p>
                    <a href='" . $urlNewsSingle . "'><strong>Ver más</strong></a>
                ";
            }
            ?>
          </div>
        </div>
      </div>
      <!-- end divider -->

    </div>
  </section>

  <!-- Footer
 ================================================== -->
  <?php
  include("shared/footer.php");
  ?>

  <script src="assets/js/jquery-1.8.2.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/application.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>

</html>