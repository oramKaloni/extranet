<?php
require_once('bdd.php');

if (isset($_POST['fechaRe']) && isset($_POST['inicioRe']) && isset($_POST['finRe']) && isset($_POST['motivoRe']) && isset($_POST['participantesRe'])){
	
	$fechaRe = $_POST['fechaRe'];
	$inicioRe = $_POST['inicioRe'].":00";
	$finRe = $_POST['finRe'].":00";
	$motivoRe = $_POST['motivoRe'];
	$participantesRe = $_POST['participantesRe'];
	$departamentoRe = $_POST['departamentoRe'];
	$salaRe = $_POST['salaRe'];
	$paisRe = $_POST['paisRe'];
	
	$fechaRe = date_create($fechaRe);
    $fechaRe = date_format($fechaRe, 'Y-m-d');
	
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Reserva(fechaReserva, inicioReserva, finReserva, motivoReserva, participantesReserva, idDepartamento, idSala, idPais) VALUES ('$fechaRe', '$inicioRe', '$finRe', '$motivoRe', '$participantesRe', '$departamentoRe', '$salaRe', '$paisRe')";
    $bdd->exec($sql);
    echo "New record created successfully";
    
	$bdd = null;
	
}
	header('Location: '.$_SERVER['HTTP_REFERER']); 
	?>
	
	
	
