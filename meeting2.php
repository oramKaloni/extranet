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

  <style>
    .span2 {
      width: 160px;
    }
  </style>
</head>

<body onload="reservaDisponible();">
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
            <center>
              <?php
              $date = date("m/d/y");
              $ts = strtotime($date);
              $dow = date('w', $ts);
              $offset = $dow - 1;
              if ($offset < 0) {
                $offset = 6;
              }
              $ts = $ts - $offset * 86400;
              for ($i = 0; $i < 5; $i++, $ts += 86400) {
                ${'diaSemana' . $i} = date("d/m/Y", $ts);
              }

              echo "<div class='span2'>
                <h4 class='skyBlue'>Lunes</h4> <span class='skyBlue' name=''> $diaSemana0 </span> <br/><br/>
                <a id='lu7a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>07:00 am</a> <span class='skyBlue' name='lu7a' title='Disponible'>Disponible</span> <br/>
                <a id='lu8a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>08:00 am</a> <span class='skyBlue' name='lu8a' title='Disponible'>Disponible</span> <br/>
                <a id='lu9a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>09:00 am</a> <span class='skyBlue' name='lu9a' title='Disponible'>Disponible</span> <br/>
                <a id='lu10a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>10:00 am</a> <span class='skyBlue' name='lu10a' title='Disponible'>Disponible</span> <br/>
                <a id='lu11a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>11:00 am</a> <span class='skyBlue' name='lu11a' title='Disponible'>Disponible</span> <br/>
                <a id='lu12p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>12:00 pm</a> <span class='skyBlue' name='lu12a' title='Disponible'>Disponible</span> <br/>
                <a id='lu1p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>01:00 pm</a> <span class='skyBlue' name='lu1p' title='Disponible'>Disponible</span> <br/>
                <a id='lu2p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>02:00 pm</a> <span class='skyBlue' name='lu2p' title='Disponible'>Disponible</span> <br/>
                <a id='lu3p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>03:00 pm</a> <span class='skyBlue' name='lu3p' title='Disponible'>Disponible</span> <br/>
                <a id='lu4p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>04:00 pm</a> <span class='skyBlue' name='lu4p' title='Disponible'>Disponible</span> <br/>
                <a id='lu5p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>05:00 pm</a> <span class='skyBlue' name='lu5p' title='Disponible'>Disponible</span> <br/>
                <a id='lu6p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>06:00 pm</a> <span class='skyBlue' name='lu6p' title='Disponible'>Disponible</span> <br/>
                <a id='lu7p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>07:00 pm</a> <span class='skyBlue' name='lu7p' title='Disponible'>Disponible</span> <br/>
            </div>
            <div class='span2'>
                <h4 class='skyBlue'>Martes</h4> <span class='skyBlue' name=''> $diaSemana1 </span> <br/><br/>
                <a id='ma7a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>07:00 am</a> <span class='skyBlue' name='ma7a' title='Disponible'>Disponible</span> <br/>
                <a id='ma8a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>08:00 am</a> <span class='skyBlue' name='ma8a' title='Disponible'>Disponible</span> <br/>
                <a id='ma9a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>09:00 am</a> <span class='skyBlue' name='ma9a' title='Disponible'>Disponible</span> <br/>
                <a id='ma10a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>10:00 am</a> <span class='skyBlue' name='ma10a' title='Disponible'>Disponible</span> <br/>
                <a id='ma11a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>11:00 am</a> <span class='skyBlue' name='ma11a' title='Disponible'>Disponible</span> <br/>
                <a id='ma12p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>12:00 pm</a> <span class='skyBlue' name='ma12a' title='Disponible'>Disponible</span> <br/>
                <a id='ma1p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>01:00 pm</a> <span class='skyBlue' name='ma1p' title=' ' title='Disponible'>Disponible</span> <br/>
                <a id='ma2p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>02:00 pm</a> <span class='skyBlue' name='ma2p' title='Disponible'>Disponible</span> <br/>
                <a id='ma3p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>03:00 pm</a> <span class='skyBlue' name='ma3p' title='Disponible'>Disponible</span> <br/>
                <a id='ma4p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>04:00 pm</a> <span class='skyBlue' name='ma4p' title='Disponible'>Disponible</span> <br/>
                <a id='ma5p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>05:00 pm</a> <span class='skyBlue' name='ma5p' title='Disponible'>Disponible</span> <br/>
                <a id='ma6p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>06:00 pm</a> <span class='skyBlue' name='ma6p' title='Disponible'>Disponible</span> <br/>
                <a id='ma7p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>07:00 pm</a> <span class='skyBlue' name='ma7p' title='Disponible'>Disponible</span> <br/>
            </div>
            <div class='span2'>
                <h4 class='skyBlue'>Miércoles</h4> <span class='skyBlue' name=''> $diaSemana2 </span> <br/><br/>
                <a id='mi7a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>07:00 am</a> <span class='skyBlue' name='mi7a' title='Disponible'>Disponible</span> <br/>
                <a id='mi8a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>08:00 am</a> <span class='skyBlue' name='mi8a' title='Disponible'>Disponible</span> <br/>
                <a id='mi9a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>09:00 am</a> <span class='skyBlue' name='mi9a' title='Disponible'>Disponible</span> <br/>
                <a id='mi10a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>10:00 am</a> <span class='skyBlue' name='mi10a' title='Disponible'>Disponible</span> <br/>
                <a id='mi11a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>11:00 am</a> <span class='skyBlue' name='mi11a' title='Disponible'>Disponible</span> <br/>
                <a id='mi12p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>12:00 pm</a> <span class='skyBlue' name='mi12a' title='Disponible'>Disponible</span> <br/>
                <a id='mi1p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>01:00 pm</a> <span class='skyBlue' name='mi1p' title='Disponible'>Disponible</span> <br/>
                <a id='mi2p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>02:00 pm</a> <span class='skyBlue' name='mi2p' title='Disponible'>Disponible</span> <br/>
                <a id='mi3p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>03:00 pm</a> <span class='skyBlue' name='mi3p' title='Disponible'>Disponible</span> <br/>
                <a id='mi4p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>04:00 pm</a> <span class='skyBlue' name='mi4p' title='Disponible'>Disponible</span> <br/>
                <a id='mi5p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>05:00 pm</a> <span class='skyBlue' name='mi5p' title='Disponible'>Disponible</span> <br/>
                <a id='mi6p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>06:00 pm</a> <span class='skyBlue' name='mi6p' title='Disponible'>Disponible</span> <br/>
                <a id='mi7p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>07:00 pm</a> <span class='skyBlue' name='mi7p' title='Disponible'>Disponible</span> <br/>
            </div>
            <div class='span2'>
                <h4 class='skyBlue'>Jueves</h4> <span class='skyBlue' name=''> $diaSemana3 </span> <br/><br/>
                <a id='ju7a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>07:00 am</a> <span class='skyBlue' name='ju7a' title='Disponible'>Disponible</span> <br/>
                <a id='ju8a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>08:00 am</a> <span class='skyBlue' name='ju8a' title='Disponible'>Disponible</span> <br/>
                <a id='ju9a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>09:00 am</a> <span class='skyBlue' name='ju9a' title='Disponible'>Disponible</span> <br/>
                <a id='ju10a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>10:00 am</a> <span class='skyBlue' name='ju10a' title='Disponible'>Disponible</span> <br/>
                <a id='ju11a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>11:00 am</a> <span class='skyBlue' name='ju11a' title='Disponible'>Disponible</span> <br/>
                <a id='ju12p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>12:00 pm</a> <span class='skyBlue' name='ju12a' title='Disponible'>Disponible</span> <br/>
                <a id='ju1p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>01:00 pm</a> <span class='skyBlue' name='ju1p' title='Disponible'>Disponible</span> <br/>
                <a id='ju2p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>02:00 pm</a> <span class='skyBlue' name='ju2p' title='Disponible'>Disponible</span> <br/>
                <a id='ju3p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>03:00 pm</a> <span class='skyBlue' name='ju3p' title='Disponible'>Disponible</span> <br/>
                <a id='ju4p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>04:00 pm</a> <span class='skyBlue' name='ju4p' title='Disponible'>Disponible</span> <br/>
                <a id='ju5p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>05:00 pm</a> <span class='skyBlue' name='ju5p' title='Disponible'>Disponible</span> <br/>
                <a id='ju6p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>06:00 pm</a> <span class='skyBlue' name='ju6p' title='Disponible'>Disponible</span> <br/>
                <a id='ju7p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>07:00 pm</a> <span class='skyBlue' name='ju7p' title='Disponible'>Disponible</span> <br/>
            </div>
            <div class='span2'>
                <h4 class='skyBlue'>Viernes</h4> <span class='skyBlue' name=''> $diaSemana4 </span> <br/><br/>
                <a id='vi7a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>07:00 am</a> <span class='skyBlue' name='vi7a' title='Disponible'>Disponible</span> <br/>
                <a id='vi8a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>08:00 am</a> <span class='skyBlue' name='vi8a' title='Disponible'>Disponible</span> <br/>
                <a id='vi9a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>09:00 am</a> <span class='skyBlue' name='vi9a' title='Disponible'>Disponible</span> <br/>
                <a id='vi10a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>10:00 am</a> <span class='skyBlue' name='vi10a' title='Disponible'>Disponible</span> <br/>
                <a id='vi11a' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>11:00 am</a> <span class='skyBlue' name='vi11a' title='Disponible'>Disponible</span> <br/>
                <a id='vi12p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>12:00 pm</a> <span class='skyBlue' name='vi12a' title='Disponible'>Disponible</span> <br/>
                <a id='vi1p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>01:00 pm</a> <span class='skyBlue' name='vi1p' title='Disponible'>Disponible</span> <br/>
                <a id='vi2p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>02:00 pm</a> <span class='skyBlue' name='vi2p' title='Disponible'>Disponible</span> <br/>
                <a id='vi3p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>03:00 pm</a> <span class='skyBlue' name='vi3p' title='Disponible'>Disponible</span> <br/>
                <a id='vi4p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>04:00 pm</a> <span class='skyBlue' name='vi4p' title='Disponible'>Disponible</span> <br/>
                <a id='vi5p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>05:00 pm</a> <span class='skyBlue' name='vi5p' title='Disponible'>Disponible</span> <br/>
                <a id='vi6p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>06:00 pm</a> <span class='skyBlue' name='vi6p' title='Disponible'>Disponible</span> <br/>
                <a id='vi7p' class='btn btn-small btn-success spaceB' onclick='reservaAhora(this.id);'>07:00 pm</a> <span class='skyBlue' name='vi7p' title='Disponible'>Disponible</span> <br/>
            </div>
            ";

              ?>
            </center>

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

  <script src="assets/js/getHorarios.js"></script>

  <script>
    function reservaAhora1(hour) {
      alert(hour);
    }
  </script>

  <script>
    function reservaAhora2(hour) {
      var value = hour.value;
      $.ajax({
        type: "POST",
        url: 'reserva-backend.php',
        data: "hora=" + hour,
        dataType: 'text',
        async: false,
        cache: false,
        success: function(result) {
          window.location.reload();
        }
      });
    }
  </script>


</body>

</html>