<?php 
    require_once('bdd1.php');
    
    if (empty($_POST['mailStart']) || empty($_POST['passStart'])) {
        $error = "Datos inválidos";
        setcookie("cooError", $error, time() + (86400 * 30), "/"); //1 día
    } else {

        // VALIDAR QUE SÓLO ENTREN LOS ROLES 9, 10 y 12
        $mailStart = $_POST['mailStart'];
        $passStart = $_POST['passStart'];
            
        $consulta= $mysqli->query("SELECT idEmpleado, nombreEmpleado, apellidosEmpleado, correoEmpleado, passwordEmpleado, idDepartamento, idPais, COUNT(*) count FROM Employee e LEFT JOIN Departamento de USING (idDepartamento) WHERE correoEmpleado = '$mailStart' AND passwordEmpleado ='$passStart'");
        
        while($row = mysqli_fetch_assoc($consulta)) {
           echo $row['count'];
           setcookie("cooValidate", $row['count'], time() + (86400 * 30), "/"); //1 día
        
            if($row['count'] == 1){
                $cookie_idEmpleado = $row['idEmpleado'];
                $cookie_nombre = $row['nombreEmpleado'];
                $cookie_apellido = $row['apellidosEmpleado'];
                $cookie_correo = $row['correoEmpleado'];
                $cookie_password = $row['passwordEmpleado'];
                $cookie_idDepartamento = $row['idDepartamento'];
                $cookie_idPais = $row['idPais'];
            
                setcookie("cooEmp", $cookie_idEmpleado, time() + (86400 * 30), "/");
                //setcookie("cooNom", $cookie_nombre, time() + (86400 * 30), "/"); //1 día
                //setcookie("cooApe", $cookie_apellido, time() + (86400 * 30), "/");
                //setcookie("cooCor", $cookie_correo, time() + (86400 * 30), "/");
                //setcookie("cooPass", $cookie_password, time() + (86400 * 30), "/");
                setcookie("cooDep", $cookie_idDepartamento, time() + (86400 * 30), "/");
                setcookie("cooPai", $cookie_idPais, time() + (86400 * 30), "/");
            
                header('Location: ../../index.php');
            }
    
            else{
                header('Location: '.$_SERVER['HTTP_REFERER']); 
            }
        }
    } 
    
    
    
    
    


?>






