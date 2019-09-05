<?php

    $valueValidate = $_COOKIE['cooValidate'];
    
    if($valueValidate == 1) {
        //header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    if (empty($valueValidate) || $valueValidate == 0)  {
        setcookie("cooValidate", '0', time() + (86400 * 30), "/"); //1 día
        //header('Location: start.php');
    }

?>