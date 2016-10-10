<?php
if (session_id() == "") 
    session_start(); 
	require '../connexionBD/connexionBD.php';
	require '../models/etablissement.php';
	require 'home_path.php';  
	require 'move_uploadfile.php';
	//var_dump($_POST['school_name']);
	$etablissement=new Etablissement();
	$etablissement1=new Etablissement();
	$etablissement->getcurrentEtablissement();
		if ($_FILES["logo"]["name"]!=""){
			if(file_exists("../public_files/img/home/.".$etablissement->getlogo())){
			 unlink("../public_files/img/home/.".$etablissement->getlogo());
			}
			$logo=move_file($_FILES["logo"],"logo","../public_files/img/home/");
			}else $logo=$etablissement->getlogo();

		if ($_FILES["signature_p"]["name"]!=""){
			if(file_exists("../public_files/img/home/.".$etablissement->getSignature())) unlink("../public_files/img/home/.".$etablissement->getSignature());
			$signature_p=move_file($_FILES["signature_p"],"signature_p","../public_files/img/home/");
			}else $signature_p=$etablissement->getSignature();

			if ($_FILES["slide1"]["name"]!=""){
			if(file_exists("../public_files/img/home/.".$etablissement->getSlide1())) unlink("../public_files/img/home/.".$etablissement->getSlide1());
			$slide1=move_file($_FILES["slide1"],"01","../public_files/img/home/");
			}else $slide1=$etablissement->getSlide1();

			if ($_FILES["slide2"]["name"]!=""){
			if(file_exists("../public_files/img/home/.".$etablissement->getSlide2())) unlink("../public_files/img/home/.".$etablissement->getSlide2());
			$slide2=move_file($_FILES["slide2"],"02","../public_files/img/home/");
			}else $slide2=$etablissement->getSlide2();

			if ($_FILES["slide3"]["name"]!=""){
			if(file_exists("../public_files/img/home/.".$etablissement->getSlide3())) unlink("../public_files/img/home/.".$etablissement->getSlide3());
			$slide3=move_file($_FILES["slide3"],"03","../public_files/img/home/");
			}else $slide3=$etablissement->getSlide3();

			if ($_FILES["slide4"]["name"]!=""){
			if(file_exists("../public_files/img/home/.".$etablissement->getSlide4())) unlink("../public_files/img/home/.".$etablissement->getSlide4());
			$slide4=move_file($_FILES["slide4"],"04","../public_files/img/home/");
			}else $slide4=$etablissement->getSlide4();
			
	$etablissement1->set_info("0",$_POST['school_name'],$_POST['director_name'],$_POST['boite_p'],$_POST['phone_number'],$_POST['email'],$logo,$signature_p,$slide1,$slide2,$slide3,$slide4);

	
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