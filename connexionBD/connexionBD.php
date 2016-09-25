<?php
try
{
	global $PDO;
	global $db;
	global $base_de_donnee;
$db = new PDO('mysql:host=127.0.0.1;dbname=sygelyco;charset=utf8', 'root', '');

$base_de_donnee = "sygelyco" ;
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



// Sources www.stackoverflow.com
//pour cripter et decripter les clés


function encrypt($mdp)
{
    $ch1 = 'b54sFmjJ52';
    $ch2 = 'DAK_dak';
    $mdp = md5(sha1($ch1) . sha1($mdp) . sha1($ch2));
 
    return($mdp);
}

?>