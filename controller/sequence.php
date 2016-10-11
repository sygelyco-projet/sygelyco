<?php
if (session_id() == "") 
    session_start(); 
	require '../connexionBD/connexionBD.php';
	require '../models/sequence.php';

$nom_seq1 = $_POST['nom_seq1'];
$nom_seq2 = $_POST['nom_seq2'];
$des1 = $_POST['des_seq1'];
$des2 = $_POST['des_seq2'];
$abr1 = $_POST['abre_seq1'];
$abr2 = $_POST['abre_seq2'];

$sequence=new Sequence();

if($sequence->check($nom_seq1)==1){
	$rep["statut"]="exist";
	$rep["mesg"]=$nom_seq1;
	echo json_encode($rep);
}else if($sequence->check_abr($abr1)==1){
	$rep["statut"]="exist";
	$rep["mesg"]=$abr1;
	echo json_encode($rep);
}
else if(($nom_seq2!="")&&($sequence->check($nom_seq2)==1)){
	$rep["statut"]="exist";
	$rep["mesg"]=$nom_seq2;
	echo json_encode($rep);
}else if(($abr2!="")&&($sequence->check_abr($abr2)==1)){
	$rep["statut"]="exist";
	$rep["mesg"]=$abr2;
	echo json_encode($rep);
}
else{
	$sequence->save($nom_seq1,$abr1,$des1);
	if(($nom_seq2!="")&&(!ctype_space($nom_seq2))) $sequence->save($nom_seq2,$abr2,$des2);
	$rep["statut"]="success";
	echo json_encode($rep);
}
?>