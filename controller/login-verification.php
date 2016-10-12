<?php
if (session_id() == "") 
    session_start(); 
	require '../connexionBD/connexionBD.php';
	require '../models/connexioninfo.php';
	
	/*$req = $db->prepare('INSERT INTO utilisateur(login, password) VALUES(:login, :password)');
$req->execute(array(
	'login' => "admin",
	'password' => encrypt($_POST['pass'])
	));*/
		$retour=get_user_info($_POST['login'],encrypt($_POST['pass']));
		
		if(!empty($retour)){
	  foreach($retour as  $rep)
{
	 $_SESSION['user'] = $rep;

	
}
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + 300 ; // ending a session in 5 miniutes
    
  // $_SESSION['id_anne_scolaire'];
echo "1";
}else{
	echo "0";
}
?>
