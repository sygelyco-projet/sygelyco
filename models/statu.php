<?php 

class  status{
	private $_Nom;
	private $_Desc;
	
	public function getNom(){ return $this->_Nom ;}
	public function getDesc() {return $this->_Desc; }	
	public function setNom($Nom){  $this->_Nom = strtoupper($Nom) ;}
	public function setDesc($Desc){  $this->_Desc = strtoupper($Desc) ;}
	
	//autres fonctions
	
	
}

?>