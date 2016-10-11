<?php 
class  Sequence{
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
	
	public function check($seq){

		 global $db;
    $req = $db->prepare('SELECT * FROM sequence WHERE nom_seq = ?');
		$req->execute(array($seq));
    $rep = $req->fetchAll();
    if(!empty($rep))
    	return 1;
	else return 0;
	
}
	public function check_abr($abr){

		 global $db;
    $req = $db->prepare('SELECT * FROM sequence WHERE abrege_sequence = ?');
		$req->execute(array($abr));
    $rep = $req->fetchAll();
    if(!empty($rep))
    	return 1;
	else return 0;
	
}

public function save($seq,$abr,$description_seq){
			global $db;
           $req = $db->prepare('INSERT INTO sequence(nom_seq, abrege_sequence,description_seq,id_utilisateur) VALUES(:nom_seq, :abrege_sequence,:description_seq,:id_utilisateur)');
        $req->execute(array(
            'nom_seq' => $seq,
            'abrege_sequence' => $abr,
            'description_seq' => $description_seq,
            'id_utilisateur' => $_SESSION['user']['id']
            ));
}
	
}

?>