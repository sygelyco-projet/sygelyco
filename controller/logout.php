<?php
 require 'home_path.php';     
if (session_id() == "") 
    session_start();
// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
//var_dump($home_path);
$url=$home_path.'/index.php?lang='.$_GET['lang']; 
echo '<script>window.location.href ="'.$url.'";</script>';

    // exit();
 /*header('Location: '.$home_path.'/index.php');
exit();*/
?>
