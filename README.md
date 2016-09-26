# sygelyco
A chaque ajout d'un fichier ou d'un module sur le projet, la description de son role est porte dans ce fichier.
Les lignes de code doivent être commentées pour mieux expliciter ce qu'on fait.
NB. avant de faire un commit, se rassurer que le projet marche correctement.

Ras pour le moment
juste pour tester..
ok.

DAK-SOFT...

yes mbom

cree un etablissement d abord
$_SESSION['id_anne_scolaire']
$_SESSION['user'] pr le user
$_SESSION['user']['id'] pr le user id
$_SESSION['user']['nom_user'] pr le nom etc
 ds tous vos fichiers que vs allez creer en dehors de l index vs faites l instruction ci au debut
<?php
 require '../connexionBD/connexionBD.php';
 require '../controller/session.php';
  if (!isset($_SESSION['user']))
{
   $url=$home_path.'/index.php';
echo '<script>window.location.href ="'.$url.'";</script>';
  
}
  ?>