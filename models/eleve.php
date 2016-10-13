<?php 
class  Eleve{
	private $_id;
	private $_matricule;
	private $_nom_el;
	private $_prenom_el;
	private $_Sexe;
	private $_date_nais_el;
	private $_lieu_nais_el;
	private $_quartier_el;
	private $_nom_tuteur1;
	private $_tel_tuteur1;
	private $_relation_tuteur1;
	private $_nom_tuteur2;
	private $_tel_tuteur2;
	private $_relation_tuteur2;
	private $_nationnalite_el;
	private $_ecole_dorigine;
	private $_type_ecole_origine;
	private $_redoublant;
	private $_photo;
	private $_classe;
	private $_nom_classe;
	
	public function getId(){ return $this->_id ;}
	public function getMatricule() { return $this->_matricule; }
	public function getNom() {return $this->_nom_el; }
	public function getPrenom() {return $this->_prenom_el; }
	public function getSexe() {return $this->_Sexe; }
	public function getDate_naiss() {return $this->_date_nais_el; }
	public function getLieu_naiss() {return $this->_lieu_nais_el; }
	public function getQuartier() {return $this->_quartier_el; }
	public function getNom_tuteur1() {return $this->_nom_tuteur1; }
	public function getTel_tuteur1() {return $this->_tel_tuteur1; }
	public function getRelation_tuteur1() {return $this->_relation_tuteur1; }
	public function getNom_tuteur2() {return $this->_nom_tuteur2; }
	public function getTel_tuteur2() {return $this->_tel_tuteur2; }
	public function getRelation_tuteur2() {return $this->_relation_tuteur2; }
	public function getNationnalite_el() {return $this->_nationnalite_el; }
	public function getEcole_dorigine() {return $this->_ecole_dorigine; }
	public function getType_ecole_origine() {return $this->_type_ecole_origine; }
	public function getRedoublant() { return $this->_redoublant; }
	public function getPphoto() {return $this->_photo; }
	
	public function getClasse($id_anne_scolaire) {
	$rep = $db->prepare("SELECT `id_classe`,`nom_cl` FROM `eleve` e, `a_frequente` a, `classe` n WHERE e.`id`='".$this->_id."' and e.`id`=a.`id_eleve` and a.`id_anne_scolaire`='".$id_anne_scolaire."' and a.`id_classe`=n.`id` ");
	$rep->execute( array() );
	$result= $rep->fetch();
	return $result['id_classe'];
	}
	
	public function setId($id){  $this->_id = strtoupper($id);}
	public function setMatricule($matricule) {  $this->_matricule= strtoupper($matricule); }
	public function setNom($nom_el) { $this->_nom_el= strtoupper($nom_el); }
	public function setPrenom($prenom_el) { $this->_prenom_el= strtoupper($prenom_el); }
	public function setSexe($Sexe) { $this->_Sexe= strtoupper($Sexe); }
	public function setDate_naiss($date_nais_el) { $this->_date_nais_el= strtoupper($date_nais_el); }
	public function setLieu_naiss($lieu_nais_el) { $this->_lieu_nais_el= strtoupper($lieu_nais_el); }
	public function setQuartier($quartier_el) { $this->_quartier_el= strtoupper($quartier_el); }
	public function setNom_tuteur1($nom_tuteur1) { $this->_nom_tuteur1= strtoupper($nom_tuteur1); }
	public function setTel_tuteur1($tel_tuteur1) { $this->_tel_tuteur1= strtoupper($tel_tuteur1); }
	public function setRelation_tuteur1($relation_tuteur1) { $this->_relation_tuteur1= strtoupper($relation_tuteur1); }
	public function setNom_tuteur2($nom_tuteur2) { $this->_nom_tuteur2= strtoupper($nom_tuteur2); }
	public function setTel_tuteur2($tel_tuteur2) { $this->_tel_tuteur2= strtoupper($tel_tuteur2); }
	public function setRelation_tuteur2($relation_tuteur2) { $this->_relation_tuteur2= strtoupper($relation_tuteur2); }
	public function setNationnalite_el($nationnalite_el) { $this->_nationnalite_el= strtoupper($nationnalite_el); }
	public function setEcole_dorigine($ecole_dorigine) { $this->_ecole_dorigine=strtoupper($ecole_dorigine) ; }
	public function setType_ecole_origine($type_ecole_origine) { $this->_type_ecole_origine= strtoupper($type_ecole_origine); }
	public function setRedoublant($redoublant) {  $this->_redoublant= strtoupper($redoublant); }
	public function setPphoto($photo) { $this->_photo= strtoupper($photo); }
	public function setClasse($classe) { $this->_classe=strtoupper($classe) ; }
	
	
	//autres fonctions
	public function getall_eleve_par_classe($classe, $id_anne_scolaire){
	global $db;
	$rep = $db->prepare("SELECT * FROM `eleve` e, `a_frequente` a, `classe` n WHERE a.`id_classe`='".$classe."' and e.`id`=a.`id_eleve` and a.`id_anne_scolaire`='".$id_anne_scolaire."' and a.`id_classe`=n.`id`  order by concat(`nom_el`,`prenom_el`)");
	$rep->execute( array() );
	$result= $rep->fetchAll();
	return $result;		
	}
	
	public function getnote($id_sequence,$id_anne_scolaire,$id_matiere,$id_utilisateur){
	global $db;
	/*if ($note=='/') $note_a_enregistrer = -1;*/
	$datetime = date("Y-m-d H:i:s");
	
    $req = $db->prepare("SELECT * FROM `note` WHERE `id_eleve`='".$this->_id."' and `id_sequence`='".$id_sequence."' and `id_anne_scolaire`='".$id_anne_scolaire."' and `id_matiere`='".$id_matiere."'");
	$req->execute(array());
    $rep = $req->fetch();
    if(!empty($rep))
    	 if($rep['note']!=-1) return $rep['note'];
		 else return '/';
	else {
		$req2 = $db->prepare("INSERT INTO `note`(`id_eleve`, `id_sequence`, `id_anne_scolaire`, `id_matiere`, `note`, `id_utilisateur`, `date_heure`) VALUES ('".$this->_id."','".$id_sequence."','".$id_anne_scolaire."','".$id_matiere."',NULL,'".$id_utilisateur."','".$datetime."')");
		$req2->execute(array());
		return '';
		}
	}
	
	public function save_note($id_sequence,$id_anne_scolaire,$id_matiere,$note,$id_utilisateur){
		if ($note=='/') $note_a_enregistrer = -1;
		else $note_a_enregistrer = $note;
    	$datetime = date("Y-m-d H:i:s");
		global $db;
		
		$req = $db->prepare("UPDATE `note` SET `note`='".$note_a_enregistrer."',`id_utilisateur`='".$id_utilisateur."',`date_heure`='".$datetime."' WHERE `id_eleve`='".$this->_id."' and `id_sequence`='".$id_sequence."' and `id_anne_scolaire`='".$id_anne_scolaire."' and `id_matiere`='".$id_matiere."'");
		//echo "UPDATE `note` SET `note`='".$note_a_enregistrer."',`id_utilisateur`='".$id_utilisateur."',`date_heure`='".$datetime."' WHERE `id_eleve`='".$this->_id."' and `id_sequence`='".$id_sequence."' and `id_anne_scolaire`='".$id_anne_scolaire."' and `id_matiere`='".$id_matiere."'";
		$req->execute(array());
		
	}
	
	
	
	
}

?>