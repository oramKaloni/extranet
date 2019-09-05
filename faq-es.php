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

  <!-- Subhead
================================================== -->
  <section id="subintro" class="sectionGray">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span8">
            <h3><i class="m-icon-big-swapright m-icon-white"></i> FAQs Kaloni España</h3>
            <p>Descripción breve y finalidad de la sección.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <!-- strat question group 1 -->
          <h4 class="skyBlue">Kaloni</h4>

          <div class="accordion botspacer40" id="accordion">
            <div class="accordion-group" id="faq-historia">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  1. Historia de Kaloni
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <p>
                    El concepto Kaloni nace por iniciativa del Dr. J. Ariel Díaz, un médico especialista interesado en crear un espacio donde se ofrecieran servicios integrales de clase mundial para el cuidado de la salud e imagen, a través de novedosas técnicas y personal altamente capacitado.
                    <br /><br />El concepto Kaloni se materializa en 1995 con el nacimiento de Slim Med, empresa líder dedicada a la mejora de la imagen y cuidado personal, integrando servicios con aparatología de última generación con la finalidad de ofrecer las mejores alternativas para sus clientes. En el 2004, el Dr. J. Ariel Díaz lleva el concepto Kaloni más allá y funda KALONI HOLDING GROUP, un centro científico especializado en el mejoramiento de la imagen, salud y bienestar integral de las personas. Todos los servicios se ofrecen bajo dos segmentos especializados: Hair Restoration y Medical Group.
                    <br /><br />Gracias a la constante innovación en sus procedimientos con técnicas mínimamente invasivas KALONI HOLDING GROUP lidera mercados de cirugía plástica y estética, ofreciendo soluciones para las necesidades de cada persona.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-group" id="faq-plan">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  2. ¿En qué consiste la transformación cultural?
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <p>
                    Explicación del porqué debemos alinearnos a una estategia orientada a resultados, definir las fases para lograr una transformación cultural. Explicar cómo se debe manejar la resistencia al cambio cultural.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                  3. ¿Cómo puedes participar en la expansión Kaloni?
                </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Definir cómo podemos ofrecer al mercado una imagen de innovación tecnológica que ayude a reforzar nuestro prestigio ante los clientes, buscar la forma de generar sinergias compartiendo distintos productos con las mismas estructuras comerciales y distribución. Crear nuevos segmentos o líneas en nuevas áreas geográficas, con diferentes estrategias y metas.
                  </p>
                  <ul>
                    <li>Nuevos segmentos y/o productos</li>
                    <li>Innovación tecnológica</li>
                    <li>Nuevas zonas geográficas</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                  4. ¿Qué es customer experience?
                </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Impartir conocimiento sobre la marca, explicar la relación comercial. Analizar comentarios y/o reacciones de los clientes. Las interacciones con los clientes pueden darse en cualquier momento del ciclo de vida del cliente con Kaloni, las áreas que implican costumer experience pueden ser:
                    <ul>
                      <li>Justo el momento de atraerlos</li>
                      <li>Cuando comienzan a usar tu producto o servicio</li>
                      <li>Cuando requieren de nuestro soporte</li>
                      <li>En el momento que existe un reclamo</li>
                      <li>Incluso cuando quieren abandonar la relación</li>
                    </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end question group 1 -->

          <!-- strat question group 2 -->
          <h4 class='skyBlue'>Servicio y productos</h4>

          <div class="accordion botspacer40" id="accordion1">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
                  1. ¿Pregunta 1?
                </a>
              </div>
              <div id="collapseFive" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <p>
                    Respuesta de la pregunta 1
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
                  2. ¿Pregunta 2?
                </a>
              </div>
              <div id="collapseSix" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Respuesta de la pregunta 2
                  </p>
                  <p>
                    Explicación.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end question group 2 -->

          <!-- strat question group 3 -->
          <h4 class="skyBlue">Soporte y mantenimiento</h4>
          <div class="accordion botspacer40" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen">
                  1. ¿Pregunta 1?
                </a>
              </div>
              <div id="collapseTen" class="accordion-body collapse in">
                <div class="accordion-inner">
                  <p>
                    Respuesta de la pregunta 1
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven">
                  2. ¿Pregunta 2?
                </a>
              </div>
              <div id="collapseEleven" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Respuesta de la pregunta 2
                  </p>
                  <ul>
                    <li>Punto 1</li>
                    <li>Punto 2</li>
                    <li>Punto 3</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwelve">
                  3. ¿Pregunta 3?
                </a>
              </div>
              <div id="collapseTwelve" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Respuesta de la pregunta 3
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThirteen">
                  4. ¿Pregunta 4?
                </a>
              </div>
              <div id="collapseThirteen" class="accordion-body collapse">
                <div class="accordion-inner">
                  <p>
                    Respuesta de la pregunta 4
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end question group 3 -->
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