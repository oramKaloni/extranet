<?php 
    setcookie("cooValidate", '0', time() + (86400 * 30), "/"); 
    header('Location: ../../index.php');
?>