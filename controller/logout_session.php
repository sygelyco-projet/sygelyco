<?php

	if(($_POST['login']=="test")&&($_POST['pass']=="test"))
	{
		//on charge la variable session
		echo "1"; // on 'retourne' la valeur 1 au javascript si la connexion est bonne 
	}
	else 
	{
		echo "0"; // on 'retourne' la valeur 0 au javascript si la connexion n'est pas bonne
	}
?>
