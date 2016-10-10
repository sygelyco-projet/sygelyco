<?php
if (session_id() == "") 
    session_start(); 
	require '../connexionBD/connexionBD.php';
	require '../models/classe.php';

$cl1 = $_POST['cl_name1'];
$cl2 = $_POST['cl_name2'];
$des1 = $_POST['des_cl1'];
$des2 = $_POST['des_cl2'];
$cat1 = $_POST['cat1'];
$cat2 = $_POST['cat2'];
$abr1 = $_POST['abre_cl1'];
$abr2 = $_POST['abre_cl2'];

$classe=new Classe();

if($classe->check($cl1)==1){
	$rep["statut"]="exist";
	$rep["mesg"]=$cl1;
	echo json_encode($rep);
}else if($classe->check_abr($abr1)==1){
	$rep["statut"]="exist";
	$rep["mesg"]=$abr1;
	echo json_encode($rep);
}
else if(($cl2!="")&&($classe->check($cl2)==1)){
	$rep["statut"]="exist";
	$rep["mesg"]=$cl2;
	echo json_encode($rep);
}else if(($abr2!="")&&($classe->check_abr($abr2)==1)){
	$rep["statut"]="exist";
	$rep["mesg"]=$abr2;
	echo json_encode($rep);
}
else{
	$classe->save($cl1,$abr1,$des1,$cat1);
	if($cl2!="") $classe->save($cl2,$abr2,$des2,$cat2);
	$rep["statut"]="success";
	echo json_encode($rep);
}
?>