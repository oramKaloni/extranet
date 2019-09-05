<?php
    //Get week's days
    $date = date("m/d/y");
    $ts = strtotime($date);
    $dow = date('w', $ts); //calcular # d铆as desde lunes
    $offset = $dow - 1;
    if ($offset < 0) { $offset = 6; }
    $ts = $ts - $offset*86400; //timestamp for monday
    for ($i = 0; $i < 5; $i++, $ts += 86400){
       // print date("d/m/Y", $ts) . "\n";
        ${'diaSemana' . $i} = date("d/m/Y", $ts);
        ${'diaSemanaFormat' . $i} = date("Y-m-d", $ts);
    }
    
    // 1) Conexión
    require_once('bdd1.php');
    
    $getID = $_COOKIE['salaOptName'];
    
    if($getID != null) {
        $consulta= $mysqli->query("SELECT * FROM Reserva r LEFT JOIN Departamento de USING (idDepartamento) LEFT JOIN Sala USING (idSala) LEFT JOIN Pais USING (idPais) WHERE idSala = $getID");
    }
    /*if($getID == null) {
        $consulta= $mysqli->query("SELECT * FROM Reserva r LEFT JOIN Departamento de USING (idDepartamento) LEFT JOIN Sala USING (idSala) LEFT JOIN Pais USING (idPais) WHERE idSala = 1");
    }*/
                        
    // 2) Preparar la orden SQL
   // $consulta= $mysqli->query("SELECT * FROM Reserva r LEFT JOIN Departamento de USING (idDepartamento) LEFT JOIN Sala USING (idSala)");
            
    // 3) Ejecutar la orden y obtener datos
    while ($fila = mysqli_fetch_array($consulta)){
    
        // Format to show date
        $inicioReserva = date_create($fila['inicioReserva']);
        $inicioReserva = date_format($inicioReserva, 'H:s');
                
        /*
        $lu7a = "false"; $lu8a = "false"; $lu9a = "false"; $lu10a = "false"; $lu11a = "false"; $lu12p = "false"; $lu1p = "false"; $lu2p = "false"; $lu3p = "false"; $lu4p = "false"; $lu5p = "false"; $lu6p = "false"; $lu7p = "false";
        $ma7a = "false"; $ma8a = "false"; $ma9a = "false"; $ma10a = "false"; $ma11a = "false"; $ma12p = "false"; $ma1p = "false"; $ma2p = "false"; $ma3p = "false"; $ma4p = "false"; $ma5p = "false"; $ma6p = "false"; $ma7p = "false";
        $mi7a = "false"; $mi8a = "false"; $mi9a = "false"; $mi10a = "false"; $mi11a = "false"; $mi12p = "false"; $mi1p = "false"; $mi2p = "false"; $mi3p = "false"; $mi4p = "false"; $mi5p = "false"; $mi6p = "false"; $mi7p = "false";
        $ju7a = "false"; $ju8a = "false"; $ju9a = "false"; $ju10a = "false"; $ju11a = "false"; $ju12p = "false"; $ju1p = "false"; $ju2p = "false"; $ju3p = "false"; $ju4p = "false"; $ju5p = "false"; $ju6p = "false"; $ju7p = "false";
        $vi7a = "false"; $vi8a = "false"; $vi9a = "false"; $vi10a = "false"; $vi11a = "false"; $vi12p = "false"; $vi1p = "false"; $vi2p = "false"; $vi3p = "false"; $vi4p = "false"; $vi5p = "false"; $vi6p = "false"; $vi7p = "false";
        */
                
        if($fila['fechaReserva'] == $diaSemanaFormat0) {
            if($inicioReserva == "07:00") { $lu7a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; } 
            if($inicioReserva == "08:00") { $lu8a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "09:00") { $lu9a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "10:00") { $lu10a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "11:00") { $lu11a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "12:00") { $lu12p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "13:00") { $lu1p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "14:00") { $lu2p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; } 
            if($inicioReserva == "15:00") { $lu3p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "16:00") { $lu4p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "17:00") { $lu5p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "18:00") { $lu6p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "19:00") { $lu7p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
        }
                
        if($fila['fechaReserva'] == $diaSemanaFormat1) {
            if($inicioReserva == "07:00") { $ma7a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; } 
            if($inicioReserva == "08:00") { $ma8a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "09:00") { $ma9a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "10:00") { $ma10a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "11:00") { $ma11a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "12:00") { $ma12p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "13:00") { $ma1p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "14:00") { $ma2p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; } 
            if($inicioReserva == "15:00") { $ma3p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "16:00") { $ma4p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "17:00") { $ma5p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "18:00") { $ma6p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "19:00") { $ma7p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
        }
        if($fila['fechaReserva'] == $diaSemanaFormat2) {
            if($inicioReserva == "07:00") { $mi7a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; } 
            if($inicioReserva == "08:00") { $mi8a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "09:00") { $mi9a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "10:00") { $mi10a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "11:00") { $mi11a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "12:00") { $mi12p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "13:00") { $mi1p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "14:00") { $mi2p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; } 
            if($inicioReserva == "15:00") { $mi3p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "16:00") { $mi4p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "17:00") { $mi5p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "18:00") { $mi6p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "19:00") { $mi7p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
        }
        if($fila['fechaReserva'] == $diaSemanaFormat3) {
            if($inicioReserva == "07:00") { $ju7a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; } 
            if($inicioReserva == "08:00") { $ju8a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "09:00") { $ju9a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "10:00") { $ju10a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "11:00") { $ju11a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "12:00") { $ju12p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "13:00") { $ju1p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "14:00") { $ju2p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; } 
            if($inicioReserva == "15:00") { $ju3p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "16:00") { $ju4p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "17:00") { $ju5p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "18:00") { $ju6p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "19:00") { $ju7p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
        }
        if($fila['fechaReserva'] == $diaSemanaFormat4) {
            if($inicioReserva == "07:00") { $vi7a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; } 
            if($inicioReserva == "08:00") { $vi8a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "09:00") { $vi9a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "10:00") { $vi10a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "11:00") { $vi11a = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "12:00") { $vi12p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "13:00") { $vi1p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "14:00") { $vi2p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; } 
            if($inicioReserva == "15:00") { $vi3p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "16:00") { $vi4p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "17:00") { $vi5p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "18:00") { $vi6p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
            if($inicioReserva == "19:00") { $vi7p = "true - ". $fila['idReserva'] . " - " . $fila['abreviaturaDepartamento'] . " - " . $fila['nombreSala'] . " - " . $fila['motivoReserva'] . " - " . $fila['participantesReserva'] . " - " . $fila['nombrePais']; }
        }
                
        $datos = new stdClass();
        $datos->lu7a = $lu7a; $datos->lu8a = $lu8a; $datos->lu9a = $lu9a; $datos->lu10a = $lu10a; $datos->lu11a = $lu11a; $datos->lu12p = $lu12p; $datos->lu1p = $lu1p; $datos->lu2p = $lu2p; $datos->lu3p = $lu3p; $datos->lu4p = $lu4p; $datos->lu5p = $lu5p; $datos->lu6p = $lu6p; $datos->lu7p = $lu7p;
        $datos->ma7a = $ma7a; $datos->ma8a = $ma8a; $datos->ma9a = $ma9a; $datos->ma10a = $ma10a; $datos->ma11a = $ma11a; $datos->ma12p = $ma12p; $datos->ma1p = $ma1p; $datos->ma2p = $ma2p; $datos->ma3p = $ma3p; $datos->ma4p = $ma4p; $datos->ma5p = $ma5p; $datos->ma6p = $ma6p; $datos->ma7p = $ma7p;
        $datos->mi7a = $mi7a; $datos->mi8a = $mi8a; $datos->mi9a = $mi9a; $datos->mi10a = $mi10a; $datos->mi11a = $mi11a; $datos->mi12p = $mi12p; $datos->mi1p = $mi1p; $datos->mi2p = $mi2p; $datos->mi3p = $mi3p; $datos->mi4p = $mi4p; $datos->mi5p = $mi5p; $datos->mi6p = $mi6p; $datos->mi7p = $mi7p;
        $datos->ju7a = $ju7a; $datos->ju8a = $ju8a; $datos->ju9a = $ju9a; $datos->ju10a = $ju10a; $datos->ju11a = $ju11a; $datos->ju12p = $ju12p; $datos->ju1p = $ju1p; $datos->ju2p = $ju2p; $datos->ju3p = $ju3p; $datos->ju4p = $ju4p; $datos->ju5p = $ju5p; $datos->ju6p = $ju6p; $datos->ju7p = $ju7p;
        $datos->vi7a = $vi7a; $datos->vi8a = $vi8a; $datos->vi9a = $vi9a; $datos->vi10a = $vi10a; $datos->vi11a = $vi11a; $datos->vi12p = $vi12p; $datos->vi1p = $vi1p; $datos->vi2p = $vi2p; $datos->vi3p = $vi3p; $datos->vi4p = $vi4p; $datos->vi5p = $vi5p; $datos->vi6p = $vi6p; $datos->vi7p = $vi7p;
        
        $todo = new stdClass();
        $todo->usuario = array($datos);
                
    }
    echo json_encode($datos);
?>