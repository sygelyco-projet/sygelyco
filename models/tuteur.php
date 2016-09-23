<?php 
class  tuteurs{
	private $_MatriculeEleve;
	private $_Nom;
	private $_Prenom;
	private $_Sexe;
	private $_Tel1;
	private $_Tel2;
	private $_Classe;
	
	public function getMatriculeEleve(){ return $this->_MatriculeEleve ;}
	public function getNom() {return $this->_Nom; }
	public function getPrenom() { return $this->_Prenom; }
	public function getSexe() { return $this->_Sexe; }
	public function getTel1() {return $this->_Tel1; }
	public function getTel2() {return $this->_Tel2; }
	public function getClasse() {return $this->_Classe; }
	
	public function setMatriculeEleve($MatriculeEleve){  $this->_MatriculeEleve = strtoupper($MatriculeEleve) ;}
	public function setNom($Nom){  $this->_Nom = strtoupper($Nom) ;}
	public function setPrenom($Prenom){  $this->_Prenom = strtoupper($Prenom) ;}
	public function setSexe($Sexe){  $this->_Sexe = strtoupper($Sexe) ;}
	public function setTel1($Tel1){  $this->_Tel1 = strtoupper($Tel1) ;}
	public function setTel2($Tel2){  $this->_Tel2 = strtoupper($Tel2) ;}
	public function setClasse($Classe){  $this->_Classe = strtoupper($Classe) ;}
	
	//autres fonctions
	
}

?>