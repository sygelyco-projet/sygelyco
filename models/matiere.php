<?php 
class  Matiere{
	private $_Nom;
	private $_Abrege;
	private $_Des;
	
	public function getNom(){ return $this->_Nom ;}
	public function getAbrege() {return $this->_Abrege; }
	public function getDescription() {return $this->_Des; }	
	public function setNom($Nom){  $this->_Nom = strtoupper($Nom) ;}
	public function setDescription($Des){  $this->_Des = strtoupper($Des) ;}
	public function setAbrege($Abrege){  $this->_Abrege = strtoupper($Abrege) ;}
	
	//autres fonctions
	
	public function check($mat){

		 global $db;
    $req = $db->prepare('SELECT * FROM matiere WHERE nom_mat = ?');
		$req->execute(array($mat));
    $rep = $req->fetchAll();
    if(!empty($rep))
    	return 1;
	else return 0;
	
}
	public function check_abr($abr){

		 global $db;
    $req = $db->prepare('SELECT * FROM matiere WHERE abrege_mat = ?');
		$req->execute(array($abr));
    $rep = $req->fetchAll();
    if(!empty($rep))
    	return 1;
	else return 0;
	
}

public function save($mat,$abr,$description_mat){
			global $db;
           $req = $db->prepare('INSERT INTO matiere(nom_mat, abrege_mat,description_mat,id_utilisateur) VALUES(:nom_mat, :abrege_mat,:description_mat,:id_utilisateur)');
        $req->execute(array(
            'nom_mat' => $mat,
            'abrege_mat' => $abr,
            'description_mat' => $description_mat,
            'id_utilisateur' => $_SESSION['user']['id']
            ));
}
	
}

?>