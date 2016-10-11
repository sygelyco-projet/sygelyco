<?php
if (session_id() == "") 
    session_start(); 
	require '../connexionBD/connexionBD.php';
	require '../models/matiere.php';

$mt1 = $_POST['mt_name1'];
$mt2 = $_POST['mt_name2'];
$des1 = $_POST['des_mt1'];
$des2 = $_POST['des_mt2'];
$abr1 = $_POST['abre_mt1'];
$abr2 = $_POST['abre_mt2'];

$matiere=new Matiere();

if($matiere->check($mt1)==1){
	$rep["statut"]="exist";
	$rep["mesg"]=$mt1;
	echo json_encode($rep);
}else if($matiere->check_abr($abr1)==1){
	$rep["statut"]="exist";
	$rep["mesg"]=$abr1;
	echo json_encode($rep);
}
else if(($mt2!="")&&($matiere->check($mt2)==1)){
	$rep["statut"]="exist";
	$rep["mesg"]=$mt2;
	echo json_encode($rep);
}else if(($abr2!="")&&($matiere->check_abr($abr2)==1)){
	$rep["statut"]="exist";
	$rep["mesg"]=$abr2;
	echo json_encode($rep);
}
else{
	$matiere->save($mt1,$abr1,$des1);
	if(($mt2!="")&&(!ctype_space($mt2))) $matiere->save($mt2,$abr2,$des2);
	$rep["statut"]="success";
	echo json_encode($rep);
}
?>