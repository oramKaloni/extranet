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

  <section id="maincontent">
    <div class="container">
      <br /><br /><br /><br />
      <h1 class="skyBlue" align="center">Dar de alta a un colaborador</h1> <br />
      <form action="assets/php/sendAlta.php" class="form-container" method="POST" enctype="multipart/form-data">
        <br /><br />
        <h4 class="skyBlueDark">Datos Generales</h4> <br />
        <div class="row-fluid">
          <div class='span4'>
            <input type="text" placeholder="Nombre completo de reemplazo" name="reeAlta" id="reeAlta" required>
          </div>
          <div class='span4'>
            <input type="text" placeholder="Nombre completo de alta" name="nomAlta" id="nomAlta" required>
          </div>
          <div class='span4'>
            <input type="text" placeholder="Fecha ingreso" name="fecAlta" id="fecAlta" onfocus="(this.type='date')" required>
          </div>
        </div> <br />
        <div class="row-fluid">
          <div class='span4'>
            <input type="text" placeholder="Fecha nacimiento" name="fnaAlta" id="fnaAlta" onfocus="(this.type='date')" required>
          </div>
          <div class='span4'>
            <input type="text" placeholder="Cédula profesional" name="cedAlta" id="cedAlta" required>
          </div>
          <div class='span4'>
            <input type="text" placeholder="Nacionalidad" name="nacAlta" id="nacAlta" required>
          </div>
        </div> <br />
        <div class="row-fluid">
          <div class='span4'>
            <input type="text" placeholder="Puesto o cargo" name="pueAlta" id="pueAlta" required>
          </div>
          <div class='span4'>
            <input type="text" placeholder="Área o  departamento" name="areAlta" id="areAlta" required>
          </div>
          <div class='span4'>
            <p class="skyBlue"><b>Usuario de Netsuite</b> &nbsp;&nbsp;&nbsp;
              <input type="radio" name="usuAlta" id="usuAlta" VALUE="Sí">Sí &nbsp;&nbsp;&nbsp;
              <input type="radio" name="usuAlta" id="usuAlta" VALUE="No">No
            </p>

            <p class="skyBlue"><b>Usuario de Netsuite</b></p>
            <select id="usuAlta" name="usuAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>

        </div> <br />

        <br /><br />
        <div class="row-fluid">
          <div class='span4'>
            <h4 class="skyBlueDark">Legal</h4> <br />
            <p class="skyBlue"><b>Convenio de confidencialidad</b></p>
            <select id="conAlta" name="conAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class='span4'>
            <h4 class="skyBlueDark">Almacén</h4> <br />
            <p class="skyBlue"><b>Uniforme</b></p>
            <select id="uniAlta" name="uniAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class='span4'>
            <h4 class="skyBlueDark">General</h4> <br />
            <p class="skyBlue"><b>Espacio trabajo asignado</b></p>
            <select id="espAlta" name="espAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
        </div>

        <br /><br />
        <h4 class="skyBlueDark">RRHH Administrativo</h4> <br />
        <div class="row-fluid">
          <div class='span4'>
            <p class="skyBlue"><b>Viáticos</b></p>
            <select id="viaAlta" name="viaAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class='span4'>
            <p class="skyBlue"><b>Vales de comida</b></p>
            <select id="valAlta" name="valAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
        </div> <br />

        <br /><br />
        <h4 class="skyBlueDark">IT</h4> <br />
        <div class="row-fluid">
          <div class='span4'>
            <p class="skyBlue"><b>Registro de lector biométrico</b></p>
            <select id="regAlta" name="regAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class='span4'>
            <p class="skyBlue"><b>Cuenta de correo</b></p>
            <select id="cueAlta" name="cueAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class='span4'>
            <p class="skyBlue"><b>Laptop/equipo de escritorio</b></p>
            <select id="lapAlta" name="lapAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
        </div> <br />
        <div class="row-fluid">
          <div class='span4'>
            <p class="skyBlue"><b>Diadema</b></p>
            <select id="diaAlta" name="diaAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class='span4'>
            <p class="skyBlue"><b>Aparato Teléfono/Extensión</b></p>
            <select id="apaAlta" name="apaAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class='span4'>
            <p class="skyBlue"><b>Celular</b></p>
            <select id="celAlta" name="celAlta">
              <option value="">Selecciona una opción</option>
              <option value="Sí">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
        </div> <br />

        <br /><br />
        <h4 class="skyBlueDark">Tecnología</h4> <br />
        <div class="row-fluid">
          <div class='span4'>
            <input type="text" placeholder="Oficina principal" name="ofiAlta" id="ofiAlta" required>
          </div>
        </div>
        <div class="row-fluid">
          <div class='span12'>
            <p></p><br />
            <center><button type="submit" class="btn btn-primary">Registrar</button></center>
          </div>
        </div>
      </form>
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