<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Extranet1;charset=utf8', 'extranet_1', 'extranet19*1');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
