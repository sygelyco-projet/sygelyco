<?php
if (session_id() == "") 
    session_start(); 
	require '../connexionBD/connexionBD.php';
	require '../models/categorie_classes.php';

$cat1 = $_POST['cat_name1'];
$des1 = $_POST['des_cat1'];
$cycle1 = $_POST['cycle1'];
$cat2 = $_POST['cat_name2'];
$des2 = $_POST['des_cat2'];
$cycle2 = $_POST['cycle2'];

$niveau=new Niveau();

if($niveau->check($cat1)==1){
	$rep["statut"]="exist";
	$rep["mesg"]=$cat1;
	echo json_encode($rep);
}else if(($cat2!="")&&($niveau->check($cat2)==1)){
	$rep["statut"]="exist";
	$rep["mesg"]=$cat2;
	echo json_encode($rep);
}
else{
	$niveau->save($cat1,$des1,$cycle1);
	if($cat2!="") $niveau->save($cat2,$des2,$cycle2);
	$rep["statut"]="success";
	echo json_encode($rep);
}
?>