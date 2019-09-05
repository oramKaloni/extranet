<?php
require_once('bdd.php');
require 'PHPMailer_5.2.4/class.phpmailer.php';

if (isset($_POST['movAlta']) && isset($_POST['movAlta']) && isset($_POST['nomAlta']) && isset($_POST['pueAlta']) && isset($_POST['areAlta']) && isset($_POST['ofiAlta']) && isset($_POST['fecAlta']) && isset($_POST['nacAlta']) && isset($_POST['espAlta']) && isset($_POST['conAlta']) && isset($_POST['regAlta']) && isset($_POST['cueAlta']) && isset($_POST['viaAlta']) && isset($_POST['lapAlta']) && isset($_POST['diaAlta']) && isset($_POST['apaAlta']) && isset($_POST['celAlta']) && isset($_POST['usuAlta']) && isset($_POST['uniAlta']) && isset($_POST['valAlta'])){
	
	$movAlta = $_POST['movAlta'];
	$nomAlta = $_POST['nomAlta'];
	$pueAlta = $_POST['pueAlta'];
	$areAlta = $_POST['areAlta'];
	$ofiAlta = $_POST['ofiAlta'];
	$fecAlta = $_POST['fecAlta'];
	$nssAlta = $_POST['nssAlta'];
	$fnaAlta = $_POST['fnaAlta'];
	$nacAlta = $_POST['nacAlta'];
	$genAlta = $_POST['genAlta'];
	$cedAlta = $_POST['cedAlta'];
	$espAlta = $_POST['espAlta'];
	$conAlta = $_POST['conAlta'];
	$regAlta = $_POST['regAlta'];
	$cueAlta = $_POST['cueAlta'];
	$viaAlta = $_POST['viaAlta'];
	$lapAlta = $_POST['lapAlta'];
	$diaAlta = $_POST['diaAlta'];
	$apaAlta = $_POST['apaAlta'];
	$celAlta = $_POST['celAlta'];
	$usuAlta = $_POST['usuAlta'];
	$uniAlta = $_POST['uniAlta'];
	$valAlta = $_POST['valAlta'];
	$reeAlta = $_POST['reeAlta'];
	
	$fecAlta = date_create($fecAlta);
    $fecAlta = date_format($fecAlta, 'Y-m-d');
	
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Alta(movimientoAlta, nombreAlta, puestoAlta, areaAlta, oficinaAlta, fechaAlta, nssAlta, nacimientoAlta, nacionalidadAlta, generoAlta, cedulaAlta, espacioAlta, convenioAlta, registroAlta, cuentaAlta, viaticosAlta, laptopAlta, diademaAlta, aparatoAlta, celularAlta, usuarioAlta, uniformeAlta, valesAlta, reemplazoAlta) VALUES ('$movAlta', '$nomAlta', '$pueAlta', '$areAlta', '$ofiAlta', '$fecAlta', '$nssAlta', '$fnaAlta', '$nacAlta', '$genAlta', '$cedAlta', '$espAlta', '$conAlta', '$regAlta', '$cueAlta', '$viaAlta', '$lapAlta', '$diaAlta', '$apaAlta', '$celAlta', '$usuAlta', '$uniAlta', '$valAlta', '$reeAlta')";
    $bdd->exec($sql);
    echo "New record created successfully";
    
    $bdd = null;
	
	
	// ------------------------ SENDING NOTIFICATION - MAIL ------------------------

    try {
    	$mail = new PHPMailer(true);
        
        $body = 
        "
        <h1 style= 'font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; margin-top: 30px; text-align: center; text-shadow: 3px 3px 3px #aaa; border-bottom: 2px solid orange; width: 60%; margin-right: auto; margin-left: auto;'>REQUERIMIENTO INGRESO</h1><br/>
        <table style='margin-right: auto; margin-left: auto; font-family: Helvetica,Arial,Lucida,sans-serif; color:black;'>
            <tr height='30px;'>
                <td colspan='2' style='color: #052a80; text-align: center; text-transform: uppercase;'> <h3> Reemplazo de: " . $reeAlta . " </h3></td>
            </tr>
            <tr height='30px;'>
                <td colspan='2' style='color: #052a80; text-align: center; font-weight: bold; text-transform: uppercase;'> <h3> Nuevo ingreso: " . $nomAlta . " </h3></td>
            </tr> 
            <tr height='30px; margin-top:30px;'> <td colspan='2' style='padding-left: 20px; padding-right: 20px;'>  </td> </tr>
            <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> 
                    <h4 style= 'font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>Datos Generales</h4>
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
            <tr height='30px; margin-top:30px;'> <td colspan='2' style='padding-left: 20px; padding-right: 20px;'>  </td> </tr>
            <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> 
                    <h4 style= 'font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>NetSuite</h4>
                </td>
            </tr>
            <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Usuario de NetSuite:</b> &nbsp;&nbsp;&nbsp;" . $usuAlta . " </td>
            </tr>
            <tr height='30px; margin-top:30px;'> <td colspan='2' style='padding-left: 20px; padding-right: 20px;'>  </td> </tr>
            <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> 
                    <h4 style= 'font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>IT</h4>
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
            <tr height='30px; margin-top:30px;'> <td colspan='2' style='padding-left: 20px; padding-right: 20px;'>  </td> </tr>
            <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> 
                    <h4 style= 'font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>RRHH Administrativo</h4>
                </td>
            </tr>
            <tr height='30px;'> 
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Viáticos:</b> &nbsp;&nbsp;&nbsp;" . $viaAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Vales de comida:</b> &nbsp;&nbsp;&nbsp;" . $valAlta . " </td>
            </tr>
            <tr height='30px; margin-top:30px;'> <td colspan='2' style='padding-left: 20px; padding-right: 20px;'>  </td> </tr>
            <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> 
                    <h4 style= 'font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>Almacén</h4>
                </td>
                <td style='padding-left: 20px; padding-right: 20px;'> 
                    <h4 style= 'font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>Legal</h4>
                </td>
            </tr>
            <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Uniforme:</b> &nbsp;&nbsp;&nbsp;" . $uniAlta . " </td>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Convenio de confidencialidad:</b> &nbsp;&nbsp;&nbsp;" . $conAlta . " </td>
            </tr>
            <tr height='30px; margin-top:30px;'> <td colspan='2' style='padding-left: 20px; padding-right: 20px;'>  </td> </tr>
            <tr height='30px; margin-top:30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> 
                    <h4 style= 'font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: left; margin-right: auto; margin-left: auto; font-size:large;'>Dirección de proyectos</h4>
                </td>
            </tr>
            <tr height='30px;'>
                <td style='padding-left: 20px; padding-right: 20px;'> <b>Espacio trabajo asignado:</b> &nbsp;&nbsp;&nbsp;" . $espAlta . " </td>
            </tr>
        </table>
        
        <br/><br/><p><h3 style='font-family: Gilroy, Helvetica, Arial,Lucida,sans-serif; color: #052a80; text-align: center;'>INTRANET KALONI</h3></p>
        ";

    	$mail->IsSMTP();                           
    	$mail->SMTPAuth   = true;                  
    	$mail->Port       = 25;                    
    	$mail->Host       = "smtp.gmail.com"; 
    	$mail->Username   = "kavila@kaloni.com";     
    	$mail->Password   = "Kaloni2684*";
    	$mail->IsSendmail();
    	$mail->addCC('kavila@kaloni.com'); // addCC('saguilar@kaloni.com'); addCC('areynoso@kaloni.com');
    	$mail->addCC('afigueroa@kaloni.com');
    	$mail->From       = "rrhh@kaloni.com";
    	$mail->FromName   = "Kaloni";
    
    	$to = "kavila@kaloni.com"; // "soporte@kaloni.com, afigueroa@kaloni.com"
    
    	$mail->AddAddress($to); // $mail->AddAddress('soporte@kaloni.com'); $mail->AddAddress('afigueroa@kaloni.com');
    	//$mail->addAttachment('LibroKaloni.pdf');
    	$mail->CharSet = 'UTF-8';
    	$mail->Subject  = "Solicitud de Accesos";
    	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    	$mail->WordWrap   = 80; 
    	$mail->MsgHTML($body);
    	$mail->IsHTML(true);
    	$mail->Send();
    	echo 'Message has been sent.';
    } catch (phpmailerException $e) {
    	echo $e->errorMessage();
    }
    
    header('Location: ../../index.php?sts=success'); 

	// ------------------------ END SENDING NOTIFICATION - MAIL ------------------------
	
}
	else {
	    header('Location: '.$_SERVER['HTTP_REFERER']); 
	}
	
?>
	
	
	
