<?php 

class liste{
private $size=0;
private $liste;

	public function getSize(){ return $this->size; }
	public function add($element){ 
		$this->liste[$this->size]=$element;
		$this->size = $this->size +1 ;
	}
	public function getElement($position){
		return $this->liste[$position -1];
	}

}

?>