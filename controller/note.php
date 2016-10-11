<?php
if (session_id() == "") 
    session_start(); 
	require '../connexionBD/connexionBD.php';
	require '../models/cycle.php';
	require 'home_path.php';

$cycle1 = $_POST['cycle_name1'];
$des1 = $_POST['des_cycle1'];
$cycle2 = $_POST['cycle_name2'];
$des2 = $_POST['des_cycle2'];

$cycle=new Cycle();

if($cycle->check($cycle1)==1){
	$rep["statut"]="exist";
	$rep["mesg"]=$cycle1;
	echo json_encode($rep);
}else if(($cycle2!="")&&($cycle->check($cycle2)==1)){
	$rep["statut"]="exist";
	$rep["mesg"]=$cycle2;
	echo json_encode($rep);
}
else{
	$cycle->save($cycle1,$des1);
	if($cycle2!="") $cycle->save($cycle2,$des2);
	$rep["statut"]="success";
	echo json_encode($rep);
}
?>