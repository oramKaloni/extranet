<?php

require_once('bdd.php');
       

//if (isset($_POST['nombreEvento']) && isset($_POST['fechaEvento']) && isset($_POST['idDepartamento']) && isset($_POST['descripcionEvento']) && isset($_POST['imagenEvento'])){

	$nombreFormulario = $_POST['nombreFormulario'];
	$fechaSurvey = $_POST['fechaSurvey'];
	$linkFormulario = $_POST['linkFormulario'];
	$activoFormulario = true;
	$fechaSurvey = date_create($fechaSurvey);
  $fechaSurvey = date_format($fechaSurvey, 'Y-m-d');

/* try { */
    
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Survey (nombreFormulario, linkFormulario,fechaSurvey, activoFormulario) VALUES ('$nombreFormulario', '$linkFormulario', '$fechaSurvey', '$activoFormulario')";
    $bdd->exec($sql);
   // echo "New record created successfully";
    
	$bdd = null;
	
/*
	}
catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}
*/
	
//}
	header('Location: ../../survey.php'); 

	
?>