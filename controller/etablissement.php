<?php
if (session_id() == "") 
    session_start(); 
	require '../connexionBD/connexionBD.php';
	require '../models/etablissement.php';
	require 'home_path.php';  
	//var_dump($_POST['school_name']);
	$etablissement=new Etablissement();
	$etablissement1=new Etablissement();
	$etablissement1->set_info("0",$_POST['school_name'],$_POST['director_name'],$_POST['boite_p'],$_POST['phone_number']);
	$etablissement->getcurrentEtablissement();
	if($etablissement->getidE()=="0")
		$etablissement1->save();
	else $etablissement1->update($etablissement->getidE());
	if($_POST['lang']=="fr")
	$_SESSION['success_message']="bien mise à jour.";
	else if($_POST['lang']=="en")
	$_SESSION['success_message']="well update.";
    else $_SESSION['success_message']="así actualizar.";

	$url=$home_path.'/views/home.php?lang='.$_POST['lang']; 
 	header('Refresh:0;'.$url.'');


?>