<?php
if (
    $ipClient == "201.155.194.138"  || //Santa Fe 1
    $ipClient == "201.174.135.234"  || //Santa Fe 2
    $ipClient == "201.150.32.133"   || //Santa Fe 3
    $ipClient == "181.49.253.230"   || //Bogota
    $ipClient == "190.145.170.124"  || //Medellin
    $ipClient == "190.167.110.216"  || //Dominicana
    $ipClient == "24.173.5.46"      || //Dallas
    $ipClient == "189.120.74.115"   || //Brasil
    $ipClient == "81.203.201.35"       //España
    
) {

    echo "<script>console.log('Bienvenido a kaloni  " . $ipClient . "');</script>";
} else {
    echo "<script>console.log('FAIL  " . $ipClient . "');</script>";

    header('Location: https://efactory-kaloni.com/extranet/403.php');
}
