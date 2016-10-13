 <?php require '../models/eleve.php'; 
 require '../connexionBD/connexionBD.php';
 ?>
<?php
$eleve= new Eleve();
$eleve->setId($_GET['id_eleve']);
$eleve->save_note($_GET['sequence'],$_GET['id_annee'],$_GET['matiere'],$_GET['note'],$_GET['id_user']);
?><div class="progress progress-xs">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ((($_GET['progress']*5)*100)/$_GET['nbrEleve']).'%'; ?>;">
  </div>
  </div> <?php

//sleep(1);
?>