   	 <?php

	 $lang=$_GET['lang'];
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
	 
	 $expire = 365*24*3600; 
  	 
	//enregistrement du cookie au nom de lang
	 setcookie('lang', $lang, time() + $expire);  
   	 
   	 ?>