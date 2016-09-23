<?php 
class  message{
	private $_id;
	private $_abrege;
	private $_message;
	private $_date;
	private $_numero;
	
	public function getId(){ return $this->_id ;}
	public function getAbrege() {return $this->_abrege; }
	public function getMessage(){ return $this->_message ;}
	public function getDate() {return $this->_date; }
	public function getNumero() { return $this->_numero; }

	
	public function setId($Id){  $this->_id = $Id ;}
	//public function setAbrege($Abrege){  $this->_abrege = $Abrege ;}
	public function setMessage($message){  
		$this->_message = $message ; 
			if (strlen($message)>120){
				$this->_abrege=substr($message,0,120);
			}else{
				$this->_abrege=$message;
			}
	}
	public function setDate($date){  $this->_date = $date ;}
	public function setNumero($numero){  $this->_numero = $numero ;}
}

?>