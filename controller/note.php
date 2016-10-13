<?php
if (session_id() == "") 
    session_start(); 
	require '../connexionBD/connexionBD.php';
	require '../models/matiere.php';
	require 'home_path.php';

$classe = htmlentities(intval($_GET['classe']));

	$rep = $db->prepare("SELECT `id_matiere`,`nom_mat` FROM `matiere_classe` mc,`matiere` m WHERE mc.`id_classe`='".$classe."' and mc.`id_matiere`=m.`id` and mc.`id_anne_scolaire`='".$_SESSION['id_anne_scolaire']."'");
	$rep->execute( array() );
	while ($donnees =  $rep->fetch())
    {
		$json[$donnees['id_matiere']][] = utf8_encode($donnees['nom_mat']);
	}

echo json_encode($json);
?>