
<?php

global $home_path;
$home_path='http://127.0.0.1/sygelyco';
/* Configure le limiteur de cache à 'private' */

//session_cache_limiter('private');

/* Configure le délai d'expiration à 30 minutes */
//session_cache_expire(5);

/* Démarre la session */

if (session_id() == "") 
    session_start();  

    if(isset($_SESSION['expire'])){
        $now = time(); // checking the time now when home page starts

    if($now > $_SESSION['expire'])
    {
        session_destroy();
        $url=$home_path.'/index.php?lang='.$_GET['lang']; 
		header('Refresh:0;'.$url.'');
    }
    }
    

$req = $db->query('SELECT id_anne_scolaire FROM etablissement');
$donnees = $req->fetch();
$_SESSION['id_anne_scolaire']=$donnees['id_anne_scolaire'];
//$_SESSION = array();
//session_destroy();
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//var_dump($actual_link);
//if($actual_link!=$home_path.'/index.php'){

//}
?>