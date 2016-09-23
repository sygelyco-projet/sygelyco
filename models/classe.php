<?php 
class  classe{
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
	
	
}

?>