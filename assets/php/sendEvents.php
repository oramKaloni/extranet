<?php

require_once('bdd.php');


    $imagenEvento = "";
    /* --- RECUPERAR IMAGEN --- */
    $target_dir = "../img/events/";
    $target_file = $target_dir . basename($_FILES["imagenEvento"]["name"]);
	$imagenEvento = basename($_FILES["imagenEvento"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagenEvento"]["tmp_name"]);
        if($check !== false) {
          //  echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
          //  echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
       // echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["imagenEvento"]["size"] > 500000) {
       // echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      //  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      //  echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["imagenEvento"]["tmp_name"], $target_file)) {
       //     echo "The file ". $target_file. " has be$n uploaded.";
        } else {
       //     echo "Sorry, there was an error uploading your file.";
       }
    }
    /* --- END RECUPERAR IMAGEN --- */
    
       

//if (isset($_POST['nombreEvento']) && isset($_POST['fechaEvento']) && isset($_POST['idDepartamento']) && isset($_POST['descripcionEvento']) && isset($_POST['imagenEvento'])){

	$nombreEvento = $_POST['nombreEvento'];
	$fechaEvento = $_POST['fechaEvento'];
	$idDepartamento = $_POST['idDepartamento'];
	$descripcionEvento = $_POST['descripcionEvento'];
	$fraseEvento = $_POST['fraseEvento'];
	$imagenEvento = $_FILES["imagenEvento"]["name"];

	$fechaEvento = date_create($fechaEvento);
    $fechaEvento = date_format($fechaEvento, 'Y-m-d');

/* try { */
    
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Event(nombreEvento, fechaEvento, idDepartamento, descripcionEvento, fraseEvento, imagenEvento) VALUES ('$nombreEvento', '$fechaEvento', '$idDepartamento', '$descripcionEvento', '$fraseEvento', '$imagenEvento')";
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
	header('Location: ../../events.php'); 

	
?>