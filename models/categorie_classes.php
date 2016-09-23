<?php 
class  categories_classes{
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
}

?>