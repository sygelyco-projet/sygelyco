<?php
	require '../connexionBD/connexionBD.php';
	require '../models/connexioninfo.php';
	/*$req = $db->prepare('INSERT INTO utilisateur(login, password) VALUES(:login, :password)');
$req->execute(array(
	'login' => "admin",
	'password' => encrypt($_POST['pass'])
	));*/
		$retour=get_user_info($_POST['login'],encrypt($_POST['pass']));
		
		if(!empty($retour)){
	  /*foreach($retour as  $rep)
{
	echo $rep['id'];
	
}*/
echo "1";
}else{
	echo "0";
}
?>
