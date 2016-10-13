<?php 
class  Note{
	private $_Nom;
	private $_Desc;
	
	public function getNom(){ return $this->_Nom ;}
	public function getDesc() {return $this->_Desc; }	
	public function setNom($Nom){  $this->_Nom = strtoupper($Nom) ;}
	public function setDesc($Desc){  $this->_Desc = strtoupper($Desc) ;}
	
	//autres fonctions
	public function check($cycle){

		 global $db;
    $req = $db->prepare('SELECT * FROM cycle WHERE nom_cy = ?');
		$req->execute(array($cycle));
    $rep = $req->fetchAll();
    if(!empty($rep))
    	return 1;
	else return 0;
	
}

public function save($nom_cy,$description_cy){
			global $db;
           $req = $db->prepare('INSERT INTO cycle(nom_cy, description_cy) VALUES(:nom_cy, :description_cy)');
        $req->execute(array(
            'nom_cy' => $nom_cy,
            'description_cy' => $description_cy
            ));
}

public function allcycle(){
			global $db;
            $req = $db->query('SELECT * FROM cycle');
            $find = $req->fetchAll();
            return $find;
}
}

?>