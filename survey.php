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
 <section id="subintro" class="info" style="background:lightslategray !important;">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span8">
            <h3><i class="m-icon-big-swapright m-icon-white"></i> Encuestas</h3>
            <p>Escoge </p>
          </div>
          <?php if ($_COOKIE['cooValidate'] == 1) {
            echo "<div class='span4'> <a style='background:#ec4f13; color: white;' href='admin-survey.php'> <h3><i class='m-icon-big-swapright m-icon-white'></i> Agregar encuesta</h3> </a> </div>";
          } ?>
        </div>
      </div>
    </div>
  </section>
  <section id="intro">
    <div class="jumbotron masthead">
      <div class="container">
        <div class="row">
          <div class="span12" style="min-height:420px">
          
          <?php
            // 1) Conexión
            require_once('assets/php/bdd1.php');

            // 2) Preparar la orden SQL
            $consulta = $mysqli->query("SELECT * FROM Survey ORDER BY fechaSurvey DESC");
            // 3) Ejecutar la orden y obtener datos
            
            while ($fila = mysqli_fetch_array($consulta)) {
              // Format to show date
              $fechaSurvey = date_create($fila['fechaSurvey']);
              $fechaSurvey = date_format($fechaSurvey, 'd F Y');

                   if ($fila['activoFormulario'] == 1) {?>

          <div class="accordion botspacer40" id="accordion">
            <div class="accordion-group" id="faq-historia">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#<? echo $fila['idFormulario'];?>">
               <? echo $fila['nombreFormulario'];?>
                </a>
              </div>
              <div id="<? echo $fila['idFormulario'];?>" class="accordion-body collapse ">
                <div class="accordion-inner">
                <?
                  echo " 
                        <iframe frameborder='0' style='width:100%; height:800px' src='" . $fila['linkFormulario'] . "'>
                            Cargando...
                        </iframe>
                    ";?>
           
                </div>
              </div>
            </div>
            <?   }
              // if ($totalRow == 0) {
              //   echo "<h3 class='skyBlue' >No se encontraron resultados</h3>";
              // }
            }
            ?>
            
          <!-- end question group 1 -->

          <!-- strat question group 2 -->
          

            
             


          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end tagline -->

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