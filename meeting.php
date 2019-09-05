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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .span2 {
      width: 160px;
    }

    @media (min-width: 1200px) {
      .marginLeftSpan {
        margin-left: 10%;
      }
    }

    @media (min-width: 1200px) {
      .span6 {
        width: 40%;
      }
    }
  </style>

  <style>
    .modal {
      width: auto;
      background: none !important;
    }

    .close {
      float: right;
      font-size: 21px;
      font-weight: 700;
      line-height: 1;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      filter: alpha(opacity=20);
      opacity: .2
    }

    .close:focus,
    .close:hover {
      color: #000;
      text-decoration: none;
      cursor: pointer;
      filter: alpha(opacity=50);
      opacity: .5
    }

    button.close {
      padding: 0;
      cursor: pointer;
      background: 0 0;
      border: 0;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none
    }

    .modal-open {
      overflow: hidden
    }

    .modal {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1050;
      display: none;
      overflow: hidden;
      -webkit-overflow-scrolling: touch;
      outline: 0
    }

    .modal.fade .modal-dialog {
      -webkit-transform: translate(0, -25%);
      -ms-transform: translate(0, -25%);
      -o-transform: translate(0, -25%);
      transform: translate(0, -25%);
      -webkit-transition: -webkit-transform .3s ease-out;
      -o-transition: -o-transform .3s ease-out;
      transition: -webkit-transform .3s ease-out;
      transition: transform .3s ease-out;
      transition: transform .3s ease-out, -webkit-transform .3s ease-out, -o-transform .3s ease-out
    }

    .modal.in .modal-dialog {
      -webkit-transform: translate(0, 0);
      -ms-transform: translate(0, 0);
      -o-transform: translate(0, 0);
      transform: translate(0, 0)
    }

    .modal-open .modal {
      overflow-x: hidden;
      overflow-y: auto
    }

    .modal-dialog {
      position: relative;
      width: auto;
      margin: 10px
    }

    .modal-content {
      position: relative;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #999;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 6px;
      -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
      box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
      outline: 0
    }

    .modal-backdrop {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1040;
      background-color: #000
    }

    .modal-backdrop.fade {
      filter: alpha(opacity=0);
      opacity: 0
    }

    .modal-backdrop.in {
      filter: alpha(opacity=50);
      opacity: .5
    }

    .modal-header {
      padding: 15px;
      border-bottom: 1px solid #e5e5e5
    }

    .modal-header .close {
      margin-top: -2px
    }

    .modal-title {
      margin: 0;
      line-height: 1.42857143
    }

    .modal-body {
      position: relative;
      padding: 15px
    }

    .modal-footer {
      padding: 15px;
      text-align: right;
      border-top: 1px solid #e5e5e5
    }

    .modal-footer .btn+.btn {
      margin-bottom: 0;
      margin-left: 5px
    }

    .modal-footer .btn-group .btn+.btn {
      margin-left: -1px
    }

    .modal-footer .btn-block+.btn-block {
      margin-left: 0
    }

    .modal-scrollbar-measure {
      position: absolute;
      top: -9999px;
      width: 50px;
      height: 50px;
      overflow: scroll
    }

    @media (min-width:768px) {
      .modal-dialog {
        width: 600px;
        margin: 30px auto
      }

      .modal-content {
        -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
      }

      .modal-sm {
        width: 300px
      }
    }

    @media (min-width:992px) {
      .modal-lg {
        width: 900px
      }
    }

    .modal-footer:after,
    .modal-footer:before,
    .modal-header:after,
    .modal-header:before,
    .nav:after,
    .nav:before,
    .navbar-collapse:after,
    .navbar-collapse:before,
    .navbar-header:after,
    .navbar-header:before,
    .navbar:after,
    .navbar:before,
    .pager:after,
    .pager:before,
    .panel-body:after,
    .panel-body:before,
    .row:after,
    .row:before {
      display: table;
      content: " "
    }

    .btn-group-vertical>.btn-group:after,
    .btn-toolbar:after,
    .clearfix:after,
    .container-fluid:after,
    .container:after,
    .dl-horizontal dd:after,
    .form-horizontal .form-group:after,
    .modal-footer:after,
    .modal-header:after,
    .nav:after,
    .navbar-collapse:after,
    .navbar-header:after,
    .navbar:after,
    .pager:after,
    .panel-body:after,
    .row:after {
      clear: both
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

  <section id="intro" style="background: none;">
    <div class="jumbotron masthead">
      <div class="container">
        <div class="row">
          <?php
          if ($_COOKIE['cooDep'] == 9 && $_COOKIE['cooValidate'] == 1) {
            echo "<div style='float:right;'><a data-toggle='modal' data-target='#modalReserva' title='Reservar ahora' style='cursor:pointer;'><i class='fa fa-calendar' style='font-size:48px;color:red'></i></a></div>";
          }
          ?>
          <center>
            <div class="span12">
              <select onchange="salaFunction()" id="salaOpt" style="background:#009cea; color: white; margin-bottom:40px;">
                <option value="" onclick="mesFunction()">Seleccionar Sala</option>
                <option value="1" onclick="mesFunction()">Torre A</option>
                <option value="2" onclick="mesFunction()">Torre B</option>
                <option value="3" onclick="mesFunction()">Torre C</option>
              </select>
            </div>
          </center>
          <div class="span12 marginLeftSpan">
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
                <a id='lu7a' class='btn btn-small btn-success spaceB'>07:00 am</a> <span class='skyBlue' name='lu7a' title='Disponible'>  </span> <br/>
                <a id='lu8a' class='btn btn-small btn-success spaceB'>08:00 am</a> <span class='skyBlue' name='lu8a' title='Disponible'>  </span> <br/>
                <a id='lu9a' class='btn btn-small btn-success spaceB'>09:00 am</a> <span class='skyBlue' name='lu9a' title='Disponible'>  </span> <br/>
                <a id='lu10a' class='btn btn-small btn-success spaceB'>10:00 am</a> <span class='skyBlue' name='lu10a' title='Disponible'>  </span> <br/>
                <a id='lu11a' class='btn btn-small btn-success spaceB'>11:00 am</a> <span class='skyBlue' name='lu11a' title='Disponible'>  </span> <br/>
                <a id='lu12p' class='btn btn-small btn-success spaceB'>12:00 pm</a> <span class='skyBlue' name='lu12p' title='Disponible'>  </span> <br/>
                <a id='lu1p' class='btn btn-small btn-success spaceB'>01:00 pm</a> <span class='skyBlue' name='lu1p' title='Disponible'>  </span> <br/>
                <a id='lu2p' class='btn btn-small btn-success spaceB'>02:00 pm</a> <span class='skyBlue' name='lu2p' title='Disponible'>  </span> <br/>
                <a id='lu3p' class='btn btn-small btn-success spaceB'>03:00 pm</a> <span class='skyBlue' name='lu3p' title='Disponible'>  </span> <br/>
                <a id='lu4p' class='btn btn-small btn-success spaceB'>04:00 pm</a> <span class='skyBlue' name='lu4p' title='Disponible'>  </span> <br/>
                <a id='lu5p' class='btn btn-small btn-success spaceB'>05:00 pm</a> <span class='skyBlue' name='lu5p' title='Disponible'>  </span> <br/>
                <a id='lu6p' class='btn btn-small btn-success spaceB'>06:00 pm</a> <span class='skyBlue' name='lu6p' title='Disponible'>  </span> <br/>
                <a id='lu7p' class='btn btn-small btn-success spaceB'>07:00 pm</a> <span class='skyBlue' name='lu7p' title='Disponible'>  </span> <br/>
            </div>
            <div class='span2'>
                <h4 class='skyBlue'>Martes</h4> <span class='skyBlue' name=''> $diaSemana1 </span> <br/><br/>
                <a id='ma7a' class='btn btn-small btn-success spaceB'>07:00 am</a> <span class='skyBlue' name='ma7a' title='Disponible'>  </span> <br/>
                <a id='ma8a' class='btn btn-small btn-success spaceB'>08:00 am</a> <span class='skyBlue' name='ma8a' title='Disponible'>  </span> <br/>
                <a id='ma9a' class='btn btn-small btn-success spaceB'>09:00 am</a> <span class='skyBlue' name='ma9a' title='Disponible'>  </span> <br/>
                <a id='ma10a' class='btn btn-small btn-success spaceB'>10:00 am</a> <span class='skyBlue' name='ma10a' title='Disponible'>  </span> <br/>
                <a id='ma11a' class='btn btn-small btn-success spaceB'>11:00 am</a> <span class='skyBlue' name='ma11a' title='Disponible'>  </span> <br/>
                <a id='ma12p' class='btn btn-small btn-success spaceB'>12:00 pm</a> <span class='skyBlue' name='ma12p' title='Disponible'>  </span> <br/>
                <a id='ma1p' class='btn btn-small btn-success spaceB'>01:00 pm</a> <span class='skyBlue' name='ma1p' title=' ' title='Disponible'>  </span> <br/>
                <a id='ma2p' class='btn btn-small btn-success spaceB'>02:00 pm</a> <span class='skyBlue' name='ma2p' title='Disponible'>  </span> <br/>
                <a id='ma3p' class='btn btn-small btn-success spaceB'>03:00 pm</a> <span class='skyBlue' name='ma3p' title='Disponible'>  </span> <br/>
                <a id='ma4p' class='btn btn-small btn-success spaceB'>04:00 pm</a> <span class='skyBlue' name='ma4p' title='Disponible'>  </span> <br/>
                <a id='ma5p' class='btn btn-small btn-success spaceB'>05:00 pm</a> <span class='skyBlue' name='ma5p' title='Disponible'>  </span> <br/>
                <a id='ma6p' class='btn btn-small btn-success spaceB'>06:00 pm</a> <span class='skyBlue' name='ma6p' title='Disponible'>  </span> <br/>
                <a id='ma7p' class='btn btn-small btn-success spaceB'>07:00 pm</a> <span class='skyBlue' name='ma7p' title='Disponible'>  </span> <br/>
            </div>
            <div class='span2'>
                <h4 class='skyBlue'>Miércoles</h4> <span class='skyBlue' name=''> $diaSemana2 </span> <br/><br/>
                <a id='mi7a' class='btn btn-small btn-success spaceB'>07:00 am</a> <span class='skyBlue' name='mi7a' title='Disponible'>  </span> <br/>
                <a id='mi8a' class='btn btn-small btn-success spaceB'>08:00 am</a> <span class='skyBlue' name='mi8a' title='Disponible'>  </span> <br/>
                <a id='mi9a' class='btn btn-small btn-success spaceB'>09:00 am</a> <span class='skyBlue' name='mi9a' title='Disponible'>  </span> <br/>
                <a id='mi10a' class='btn btn-small btn-success spaceB'>10:00 am</a> <span class='skyBlue' name='mi10a' title='Disponible'>  </span> <br/>
                <a id='mi11a' class='btn btn-small btn-success spaceB'>11:00 am</a> <span class='skyBlue' name='mi11a' title='Disponible'>  </span> <br/>
                <a id='mi12p' class='btn btn-small btn-success spaceB'>12:00 pm</a> <span class='skyBlue' name='mi12p' title='Disponible'>  </span> <br/>
                <a id='mi1p' class='btn btn-small btn-success spaceB'>01:00 pm</a> <span class='skyBlue' name='mi1p' title='Disponible'>  </span> <br/>
                <a id='mi2p' class='btn btn-small btn-success spaceB'>02:00 pm</a> <span class='skyBlue' name='mi2p' title='Disponible'>  </span> <br/>
                <a id='mi3p' class='btn btn-small btn-success spaceB'>03:00 pm</a> <span class='skyBlue' name='mi3p' title='Disponible'>  </span> <br/>
                <a id='mi4p' class='btn btn-small btn-success spaceB'>04:00 pm</a> <span class='skyBlue' name='mi4p' title='Disponible'>  </span> <br/>
                <a id='mi5p' class='btn btn-small btn-success spaceB'>05:00 pm</a> <span class='skyBlue' name='mi5p' title='Disponible'>  </span> <br/>
                <a id='mi6p' class='btn btn-small btn-success spaceB'>06:00 pm</a> <span class='skyBlue' name='mi6p' title='Disponible'>  </span> <br/>
                <a id='mi7p' class='btn btn-small btn-success spaceB'>07:00 pm</a> <span class='skyBlue' name='mi7p' title='Disponible'>  </span> <br/>
            </div>
            <div class='span2'>
                <h4 class='skyBlue'>Jueves</h4> <span class='skyBlue' name=''> $diaSemana3 </span> <br/><br/>
                <a id='ju7a' class='btn btn-small btn-success spaceB'>07:00 am</a> <span class='skyBlue' name='ju7a' title='Disponible'>  </span> <br/>
                <a id='ju8a' class='btn btn-small btn-success spaceB'>08:00 am</a> <span class='skyBlue' name='ju8a' title='Disponible'>  </span> <br/>
                <a id='ju9a' class='btn btn-small btn-success spaceB'>09:00 am</a> <span class='skyBlue' name='ju9a' title='Disponible'>  </span> <br/>
                <a id='ju10a' class='btn btn-small btn-success spaceB'>10:00 am</a> <span class='skyBlue' name='ju10a' title='Disponible'>  </span> <br/>
                <a id='ju11a' class='btn btn-small btn-success spaceB'>11:00 am</a> <span class='skyBlue' name='ju11a' title='Disponible'>  </span> <br/>
                <a id='ju12p' class='btn btn-small btn-success spaceB'>12:00 pm</a> <span class='skyBlue' name='ju12p' title='Disponible'>  </span> <br/>
                <a id='ju1p' class='btn btn-small btn-success spaceB'>01:00 pm</a> <span class='skyBlue' name='ju1p' title='Disponible'>  </span> <br/>
                <a id='ju2p' class='btn btn-small btn-success spaceB'>02:00 pm</a> <span class='skyBlue' name='ju2p' title='Disponible'>  </span> <br/>
                <a id='ju3p' class='btn btn-small btn-success spaceB'>03:00 pm</a> <span class='skyBlue' name='ju3p' title='Disponible'>  </span> <br/>
                <a id='ju4p' class='btn btn-small btn-success spaceB'>04:00 pm</a> <span class='skyBlue' name='ju4p' title='Disponible'>  </span> <br/>
                <a id='ju5p' class='btn btn-small btn-success spaceB'>05:00 pm</a> <span class='skyBlue' name='ju5p' title='Disponible'>  </span> <br/>
                <a id='ju6p' class='btn btn-small btn-success spaceB'>06:00 pm</a> <span class='skyBlue' name='ju6p' title='Disponible'>  </span> <br/>
                <a id='ju7p' class='btn btn-small btn-success spaceB'>07:00 pm</a> <span class='skyBlue' name='ju7p' title='Disponible'>  </span> <br/>
            </div>
            <div class='span2'>
                <h4 class='skyBlue'>Viernes</h4> <span class='skyBlue' name=''> $diaSemana4 </span> <br/><br/>
                <a id='vi7a' class='btn btn-small btn-success spaceB'>07:00 am</a> <span class='skyBlue' name='vi7a' title='Disponible'>  </span> <br/>
                <a id='vi8a' class='btn btn-small btn-success spaceB'>08:00 am</a> <span class='skyBlue' name='vi8a' title='Disponible'>  </span> <br/>
                <a id='vi9a' class='btn btn-small btn-success spaceB'>09:00 am</a> <span class='skyBlue' name='vi9a' title='Disponible'>  </span> <br/>
                <a id='vi10a' class='btn btn-small btn-success spaceB'>10:00 am</a> <span class='skyBlue' name='vi10a' title='Disponible'>  </span> <br/>
                <a id='vi11a' class='btn btn-small btn-success spaceB'>11:00 am</a> <span class='skyBlue' name='vi11a' title='Disponible'>  </span> <br/>
                <a id='vi12p' class='btn btn-small btn-success spaceB'>12:00 pm</a> <span class='skyBlue' name='vi12p' title='Disponible'>  </span> <br/>
                <a id='vi1p' class='btn btn-small btn-success spaceB'>01:00 pm</a> <span class='skyBlue' name='vi1p' title='Disponible'>  </span> <br/>
                <a id='vi2p' class='btn btn-small btn-success spaceB'>02:00 pm</a> <span class='skyBlue' name='vi2p' title='Disponible'>  </span> <br/>
                <a id='vi3p' class='btn btn-small btn-success spaceB'>03:00 pm</a> <span class='skyBlue' name='vi3p' title='Disponible'>  </span> <br/>
                <a id='vi4p' class='btn btn-small btn-success spaceB'>04:00 pm</a> <span class='skyBlue' name='vi4p' title='Disponible'>  </span> <br/>
                <a id='vi5p' class='btn btn-small btn-success spaceB'>05:00 pm</a> <span class='skyBlue' name='vi5p' title='Disponible'>  </span> <br/>
                <a id='vi6p' class='btn btn-small btn-success spaceB'>06:00 pm</a> <span class='skyBlue' name='vi6p' title='Disponible'>  </span> <br/>
                <a id='vi7p' class='btn btn-small btn-success spaceB'>07:00 pm</a> <span class='skyBlue' name='vi7p' title='Disponible'>  </span> <br/>
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

  <!-- Modal content-->
  <div class="modal fade" id="modalReserva" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reservar sala de juntas</h4>
        </div>
        <form action="assets/php/sendReserva.php" class="form-container" method="POST" enctype="multipart/form-data">
          <div class="modal-body">

            <div class='span6'>
              <label for="fechaRe"><b>Fecha</b></label>
              <input type="date" placeholder="Fecha" name="fechaRe" id="fechaRe" required>
            </div>
            <div class='span6'>
              <label for="motivoRe"><b>Motivo</b></label>
              <input type="text" placeholder="Motivo" name="motivoRe" id="motivoRe" required>
            </div>
            <div class='span6'>
              <label for="inicioRe"><b>Hora inicio</b></label>
              <?php
              $data = json_decode($datos);

              echo $data->ju12p;
              echo $data->ma1p;


              $url = 'https://efactory-kaloni.com/web1/extranet/assets/php/getHorarios.php'; // path to your JSON file
              $data = file_get_contents($url); // put the contents of the file into a variable
              $dataHorarios = json_decode($data); // decode the JSON feed

              echo $dataHorarios[0]->ma1p;
              echo $dataHorarios->ju12p;


              $data = file_get_contents('https://efactory-kaloni.com/web1/extranet/assets/php/getHorarios.php');
              $decodedData = json_decode($data);
              var_dump($decodedData->ju12p);

              if ($dataHorarios->ju12p != " ") {
                echo "
                    <select name='inicioRe' id='inicioRe' required>
                    <option value='07:00'>" . $data1 . "</option>
                    <option value='08:00'>08:00 am</option>
                    <option value='09:00'>09:00 am</option>
                    <option value='10:00'>10:00 am</option>
                    <option value='11:00'>11:00 am</option>
                    <option value='12:00'>12:00 pm</option>
                    <option value='13:00'>01:00 pm</option>
                    <option value='14:00'>02:00 pm</option>
                    <option value='15:00'>03:00 pm</option>
                    <option value='16:00'>04:00 pm</option>
                    <option value='17:00'>05:00 pm</option>
                    <option value='18:00'>06:00 pm</option>
                    <option value='19:00'>07:00 pm</option>
                </select>
                ";
              }

              ?>

            </div>
            <div class='span6'>
              <label for="finRe"><b>Hora fin</b></label>
              <select name="finRe" id="finRe" required>
                <option value="07:00">07:00 am</option>
                <option value="08:00">08:00 am</option>
                <option value="09:00">09:00 am</option>
                <option value="10:00">10:00 am</option>
                <option value="11:00">11:00 am</option>
                <option value="12:00">12:00 pm</option>
                <option value="13:00">01:00 pm</option>
                <option value="14:00">02:00 pm</option>
                <option value="15:00">03:00 pm</option>
                <option value="16:00">04:00 pm</option>
                <option value="17:00">05:00 pm</option>
                <option value="18:00">06:00 pm</option>
                <option value="19:00">07:00 pm</option>
              </select>
            </div>
            <div class='span6'>
              <label for="departamentoRe"><b>Departamento</b></label>
              <select name="departamentoRe" id="departamentoRe" required>
                <option value="1">Dirección General</option>
                <option value="2">Dirección Governance</option>
                <option value="3">Calidad</option>
                <option value="4">Dirección de proyectos</option>
                <option value="5">Finanzas</option>
                <option value="6">Mercadotecnia</option>
                <option value="7">Nuevos Negocios</option>
                <option value="8">Operaciones</option>
                <option value="9">Recursos Humanos</option>
                <option value="10">Tecnología</option>
                <option value="11">K Center</option>
                <option value="12">IT</option>
                <option value="13">Sala de juntas</option>
                <option value="14">Clínicas</option>
              </select>
            </div>
            <div class='span6'>
              <label for="salaRe"><b>Sala de Juntas</b></label>
              <select name="salaRe" id="salaRe" required>
                <option value="1">Torre A</option>
                <option value="2">Torre B</option>
                <option value="3">Torre C</option>
                <option value="4">Torre C Comedor</option>
                <option value="5">Blue Jeans</option>
              </select>
            </div>
            <div class='span6'>
              <label for="paisRe"><b>Sala de Juntas</b></label>
              <select name="paisRe" id="paisRe" required>
                <option value="1">México</option>
                <option value="2">Colombia</option>
                <option value="3">España</option>
                <option value="4">República Dominicana</option>
                <option value="5">Brasil</option>
                <option value="6">Estados Unidos</option>
              </select>
            </div>
            <div class='span6'>
              <label for="participantesRe"><b>Participantes</b></label>
              <input type="text" placeholder="Escribir email separado por comas" name="participantesRe" id="participantesRe" required>
            </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default">Reservar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal content-->

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
    function salaFunction() {
      var salaOptName = document.getElementById("salaOpt").value;
      document.cookie = "salaOptName = " + salaOptName;

      window.location.href = "meeting.php?vMee=" + salaOptName;
    }
  </script>

</body>

</html>