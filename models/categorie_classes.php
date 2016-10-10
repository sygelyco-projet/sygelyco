<?php 
class  Niveau{
	private $_Cycle;
	private $_Nom;
	private $_Desc;
	
	public function getNom(){ return $this->_Nom ;}
	public function getDesc() { return $this->_Desc; }
	public function getCycle() { return $this->_Cycle; }	
	public function setNom($Nom){  $this->_Nom = strtoupper($Nom) ;}
	public function setDesc($Desc){  $this->_Desc = strtoupper($Desc) ;}
	public function setCycle($Cycle){  $this->_Cycle = strtoupper($Cycle) ;}
	
	
	//autres fonctions
	public function check($cat){

		 global $db;
    $req = $db->prepare('SELECT * FROM cathegorie_classe WHERE nom_cat = ?');
		$req->execute(array($cat));
    $rep = $req->fetchAll();
    if(!empty($rep))
    	return 1;
	else return 0;
	
}

public function save($nom_cat,$description_cat,$id_cycle){
			global $db;
           $req = $db->prepare('INSERT INTO cathegorie_classe(nom_cat, description_cat,id_cycle) VALUES(:nom_cat, :description_cat,:id_cycle)');
        $req->execute(array(
            'nom_cat' => $nom_cat,
            'description_cat' => $description_cat,
            'id_cycle' => $id_cycle
            ));
}

public function allcategories(){
			global $db;
            $req = $db->query('SELECT * FROM cathegorie_classe');
            $find = $req->fetchAll();
            return $find;
}


}

?>