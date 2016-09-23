<?php 
class  users{
	private $_Id;
	private $_Nom;
	private $_Prenom;
	private $_Sexe;
	private $_Login;
	private $_Password;
	private $_Tel1;
	private $_Tel2;
	
	public function getId(){ return $this->_Id ;}
	public function getNom() {return $this->_Nom; }
	public function getPrenom() { return $this->_Prenom; }
	public function getSexe() { return $this->_Sexe; }
	public function getLogin() {return $this->_Login; }
	public function getPassword() {return $this->_Password; }
	public function getTel1() {return $this->_Tel1; }
	public function getTel2() {return $this->_Tel2; }

	
	public function setId($Id){  $this->_Id = $Id ;}
	public function setNom($Nom){  $this->_Nom = strtoupper($Nom) ;}
	public function setPrenom($Prenom){  $this->_Prenom = strtoupper($Prenom) ;}
	public function setSexe($Sexe){  $this->_Sexe = strtoupper($Sexe) ;}
	public function setLogin($Login){  $this->_Login = $Login ;}
	public function setPassword($Password){  $this->_Password = $Password ;}
	public function setTel1($Tel1){  $this->_Tel1 = strtoupper($Tel1) ;}
	public function setTel2($Tel2){  $this->_Tel2 = strtoupper($Tel2) ;}
	
	//autres fonctions
	
}

?>