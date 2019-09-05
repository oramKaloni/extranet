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
            <h1 style='font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; margin-top: 30px; text-align: center; text-shadow: 3px 3px 3px #aaa; border-bottom: 2px solid orange; width: 60%; margin-right: auto; margin-left: auto;'>REQUERIMIENTO INGRESO</h1><br />
            <table style='margin-right: auto; margin-left: auto; font-family: Helvetica,Arial,Lucida,sans-serif; color:black;'>
              <tr height='30px;'>
                <td colspan='2' style='color: #052a80; text-align: center; text-transform: uppercase;'>
                  <h3> Reemplazo de: " . $reeAlta . " </h3>
                </td>
              </tr>
              <tr height='30px;'>
                <td colspan='2' style='color: #052a80; text-align: center; font-weight: bold; text-transform: uppercase;'>
                  <h3> Nuevo ingreso: " . $nomAlta . " </h3>
                </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td colspan='2' style='padding-left: 20px; padding-right: 20px;'> </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'>
                  <h4 style='font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>Datos Generales</h4>
                </td>
              </tr>
              <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Fecha ingreso:</b> &nbsp;&nbsp;&nbsp;" . $fecAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Movimiento:</b> &nbsp;&nbsp;&nbsp;" . $movAlta . " </td>
              </tr>
              <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Puesto o cargo:</b> &nbsp;&nbsp;&nbsp;" . $pueAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Área o departamento:</b> &nbsp;&nbsp;&nbsp;" . $areAlta . " </td>
              </tr>
              <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Oficina principal:</b> &nbsp;&nbsp;&nbsp;" . $ofiAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Nacionalidad:</b> &nbsp;&nbsp;&nbsp;" . $nacAlta . " </td>
              </tr>
              <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Género:</b> &nbsp;&nbsp;&nbsp;" . $genAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Fecha nacimiento:</b> &nbsp;&nbsp;&nbsp;" . $fnaAlta . " </td>
              </tr>
              <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Cédula profesional:</b> &nbsp;&nbsp;&nbsp;" . $cedAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>NSS:</b> &nbsp;&nbsp;&nbsp;" . $nssAlta . " </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td colspan='2' style='padding-left: 20px; padding-right: 20px;'> </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'>
                  <h4 style='font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>NetSuite</h4>
                </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Usuario de NetSuite:</b> &nbsp;&nbsp;&nbsp;" . $usuAlta . " </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td colspan='2' style='padding-left: 20px; padding-right: 20px;'> </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'>
                  <h4 style='font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>IT</h4>
                </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Registro de lector biométrico:</b> &nbsp;&nbsp;&nbsp;" . $regAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Cuenta de correo:</b> &nbsp;&nbsp;&nbsp;" . $cueAlta . " </td>
              </tr>
              <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Laptop/Equipo de escritorio:</b> &nbsp;&nbsp;&nbsp;" . $lapAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Aparato Teléfono/Extensión:</b> &nbsp;&nbsp;&nbsp;" . $apaAlta . " </td>
              </tr>
              <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Diadema:</b> &nbsp;&nbsp;&nbsp;" . $diaAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Celular:</b> &nbsp;&nbsp;&nbsp;" . $celAlta . " </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td colspan='2' style='padding-left: 20px; padding-right: 20px;'> </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'>
                  <h4 style='font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>RRHH Administrativo</h4>
                </td>
              </tr>
              <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Viáticos:</b> &nbsp;&nbsp;&nbsp;" . $viaAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Vales de comida:</b> &nbsp;&nbsp;&nbsp;" . $valAlta . " </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td colspan='2' style='padding-left: 20px; padding-right: 20px;'> </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'>
                  <h4 style='font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>Almacén</h4>
                </td>
                <td style='padding-left: 20px; padding-right: 20px;'>
                  <h4 style='font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>Legal</h4>
                </td>
              </tr>
              <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Uniforme:</b> &nbsp;&nbsp;&nbsp;" . $uniAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Convenio de confidencialidad:</b> &nbsp;&nbsp;&nbsp;" . $conAlta . " </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td colspan='2' style='padding-left: 20px; padding-right: 20px;'> </td>
              </tr>
              <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'>
                  <h4 style='font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>Dirección de proyectos</h4>
                </td>
              </tr>
              <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Espacio trabajo asignado:</b> &nbsp;&nbsp;&nbsp;" . $espAlta . " </td>
              </tr>


            </table>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end tagline -->

  <!-- Footer
 ================================================== -->
 <?php include("shared/footer.php"); ?>

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