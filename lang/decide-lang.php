   	 <?php

	 if (isset($_GET['lang'])){
	 
		 if ($_GET['lang']=='esp') {           // si la langue est 'esp' (espagnol) on inclut le fichier esp-lang.php
		 include('esp-lang.php');
		 } 
		 
		 else if ($_GET['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
		 include('en-lang.php');
		 }
		 else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
		 include('fr-lang.php');
		 $lang='fr';
		 }
   	 
   	 }else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
   	 include('fr-lang.php');
	 $lang='fr';
   	 }
/*	 if (!isset($_GET['lang'])){
			 $lang='fr';
			 if(isset($_COOKIE['lang'])) {
		  	     $lang = $_COOKIE['lang'];
		  	 }
				 	  	 
		  	 //script d'origine
		  	 if ($lang=='esp') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
		  	     include('esp-lang.php'); 
		  	 } elseif ($lang=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
		  	     include('en-lang.php'); 
		  	 }  else {
				include('fr-lang.php');
			 }
 
 
	 }
	 else{
	 $lang=$_GET['lang'];
	 $expire = 365*24*3600; 
	 echo '</br></br>;	test';
	//enregistrement du cookie au nom de lang
	 setcookie('lang', $lang, time() + $expire);  
   	 }*/
   	 ?>