<?php 
class  personnels{
	private $_Id;
	private $_Nom;
	private $_Prenom;
	private $_Sexe;
	private $_Tel1;
	private $_Tel2;
	private $_Statu;
	
	public function getId(){ return $this->_Id ;}
	public function getNom() {return $this->_Nom; }
	public function getPrenom() { return $this->_Prenom; }
	public function getSexe() { return $this->_Sexe; }
	public function getTel1() {return $this->_Tel1; }
	public function getTel2() {return $this->_Tel2; }
	public function getStatu() {return $this->_Statu; }
	
	public function setId($Id){  $this->_Id = $Id ;}
	public function setNom($Nom){  $this->_Nom = strtoupper($Nom) ;}
	public function setPrenom($Prenom){  $this->_Prenom = strtoupper($Prenom) ;}
	public function setSexe($Sexe){  $this->_Sexe = strtoupper($Sexe) ;}
	public function setTel1($Tel1){  $this->_Tel1 = strtoupper($Tel1) ;}
	public function setTel2($Tel2){  $this->_Tel2 = strtoupper($Tel2) ;}
	public function setStatu($Statu){  $this->_Statu = strtoupper($Statu) ;}
	
	//autres fonctions
	
}

?>