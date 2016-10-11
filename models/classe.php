<?php 
class  Classe{
	private $_Categorie;
	private $_Nom;
	private $_Abrege;
	
	public function getNom(){ return $this->_Nom ;}
	public function getAbrege() {return $this->_Abrege; }
	public function getCategorie() {return $this->_Categorie; }	
	public function setNom($Nom){  $this->_Nom = strtoupper($Nom) ;}
	public function setCategorie($Categorie){  $this->_Categorie = strtoupper($Categorie) ;}
	public function setAbrege($Abrege){  $this->_Abrege = strtoupper($Abrege) ;}
	
	//autres fonctions
	
	public function check($cl){

		 global $db;
    $req = $db->prepare('SELECT * FROM classe WHERE nom_cl = ?');
		$req->execute(array($cl));
    $rep = $req->fetchAll();
    if(!empty($rep))
    	return 1;
	else return 0;
	
}
	public function check_abr($abr){

		 global $db;
    $req = $db->prepare('SELECT * FROM classe WHERE abrege = ?');
		$req->execute(array($abr));
    $rep = $req->fetchAll();
    if(!empty($rep))
    	return 1;
	else return 0;
	
}

public function save($cl,$abr,$description_cl,$id_cat){
			global $db;
           $req = $db->prepare('INSERT INTO classe(nom_cl, abrege,description_cl,id_cathegorie_classe,id_utilisateur) VALUES(:nom_cl, :abrege,:description_cl,:id_cathegorie_classe,:id_utilisateur)');
        $req->execute(array(
            'nom_cl' => $cl,
            'abrege' => $abr,
            'description_cl' => $description_cl,
            'id_cathegorie_classe' => $id_cat,
            'id_utilisateur' => $_SESSION['user']['id']
            ));
}
	
public function allclasse(){
			global $db;
            $req = $db->query('SELECT * FROM classe');
            $find = $req->fetchAll();
            return $find;
}

}

?>