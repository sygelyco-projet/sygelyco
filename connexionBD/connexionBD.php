<?php
try
{
	global $PDO;
	global $db;
	global $base_de_donnee;
$db = new PDO('mysql:host=127.0.0.1;dbname=sygelyco', 'root', '');

$base_de_donnee = "sygelyco" ;
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>