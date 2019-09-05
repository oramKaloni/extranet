<?php

require_once('bdd.php');


    $imagenNews = "";
    /* --- RECUPERAR IMAGEN --- */
    $target_dir = "../img/news/";
    $target_file = $target_dir . basename($_FILES["imagenNews"]["name"]);
	$imagenNews = basename($_FILES["imagenNews"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagenNews"]["tmp_name"]);
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
    // if ($_FILES["imagenNews"]["size"] > 5500000) {
    //    echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }
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
        if (move_uploaded_file($_FILES["imagenNews"]["tmp_name"], $target_file)) {
          //  echo "The file ". $target_file. " has be$n uploaded.";
        } else {
          //  echo "Sorry, there was an error uploading your file.";
        }
    }
    /* --- END RECUPERAR IMAGEN --- */
    
    $fileNews = "";
    /* --- RECUPERAR ARCHIVO---  */
    $target_dir1 = "../file/news/";
    $target_file1 = $target_dir1 . basename($_FILES["fileNews"]["name"]);
    $fileNews1 = basename($_FILES["fileNews"]["name"]);
    $uploadOk1 = 1;
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    if(isset($_POST["submit"])) {
        $check1 = getimagesize($_FILES["fileNews"]["tmp_name"]);
        if($check1 !== false) {
          //  echo "File is an image - " . $check1["mime"] . ".";
            $uploadOk1 = 1;
        } else {
          //  echo "File is not an image.";
            $uploadOk1 = 0;
        }
    }
    if (file_exists($target_file1)) {
       // echo "Sorry, file already exists.";
        $uploadOk1 = 0;
    }
    if ($_FILES["fileNews"]["size"] > 500000) {
      //  echo "Sorry, your file is too large.";
        $uploadOk1 = 0;
    }
    if($imageFileType1 != "pdf" && $imageFileType1 != "doc" && $imageFileType1 != "docx" && $imageFileType1 != "xls"  && $imageFileType1 != "xlsx" ) {
      //  echo "Sorry, only PDF, DOC, DOCX, XLS & XLXS files are allowed.";
        $uploadOk1 = 0;
    }
    if ($uploadOk1 == 0) {
      //  echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileNews"]["tmp_name"], $target_file1)) {
          //  echo "The file ". $fileNews ." has been uploaded.";
        } else {
          //  echo "Sorry, there was an error uploading your file.";
        }
    }

    /* --- END RECUPERAR ARCHIVO--- */
       

//if (isset($_POST['nombreNews']) && isset($_POST['fechaNews']) && isset($_POST['idDepartamento']) && isset($_POST['descripcionNews']) && isset($_POST['imagenNews'])){

	$nombreNews = $_POST['nombreNews'];
	$fechaNews = $_POST['fechaNews'];
	$idDepartamento = $_POST['idDepartamento'];
	$descripcionNews = $_POST['descripcionNews'];
	$fraseNews = $_POST['fraseNews'];
	$imagenNews = $_FILES["imagenNews"]["name"];
	$fileNews = $_FILES["fileNews"]["name"];
	
	$fechaNews = date_create($fechaNews);
    $fechaNews = date_format($fechaNews, 'Y-m-d');

/*try { */
    
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO News(nombreNews, fechaNews, idDepartamento, descripcionNews, fraseNews, imagenNews, fileNews) VALUES ('$nombreNews', '$fechaNews', '$idDepartamento', '$descripcionNews', '$fraseNews', '$imagenNews', '$fileNews')";
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
	header('Location: ../../news.php'); 

	
?>