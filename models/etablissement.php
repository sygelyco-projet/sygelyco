<?php
    class Etablissement {
        private $_id; 
        private $_nom_etablissement; 
        private $_nom_proviseur; 
        private $_boite_postale;
        private $_tel_etablissement1;

       /* public function __construct($nom_etablissement, $nom_proviseur, $boite_postale, $tel_etablissement1){
            $this->_nom_etablissement=$nom_etablissement;
            $this->_nom_proviseur=$nom_proviseur;
            $this->_boite_postale=$boite_postale;
            $this->_tel_etablissement1=$tel_etablissement1;
        }*/
        public function set_info($id,$nom_etablissement, $nom_proviseur, $boite_postale, $tel_etablissement1){
            $this->_id=$id;
            $this->_nom_etablissement=$nom_etablissement;
            $this->_nom_proviseur=$nom_proviseur;
            $this->_boite_postale=$boite_postale;
            $this->_tel_etablissement1=$tel_etablissement1;
        }
        function getidE(){
            return $this->_id;
        }
        function getNomE(){
            return $this->_nom_etablissement;
        }
        function getNomP() {
            return $this->_nom_proviseur;
        }
        function getBp() {
            return $this->_boite_postale;
        }
        function getTel() {
            return $this->_tel_etablissement1;
        }
        public function save(){
            global $db;
            
               $req = $db->prepare('INSERT INTO etablissement(nom_etablissement, nom_proviseur,boite_postale,tel_etablissement1) VALUES(:nom_etablissement, :nom_proviseur,:boite_postale, :tel_etablissement1)');
            $req->execute(array(
                'nom_etablissement' => $this->_nom_etablissement,
                'nom_proviseur' => $this->_nom_proviseur,
                'boite_postale' => $this->_boite_postale,
                'tel_etablissement1' => $this->_tel_etablissement1
                ));
        
        }
    
    public function update($id){
        global $db;
        $req = $db->prepare('UPDATE etablissement SET nom_etablissement = :nom_etablissement, nom_proviseur = :nom_proviseur,boite_postale = :boite_postale, tel_etablissement1 = :tel_etablissement1 WHERE id = :id');
        $req->execute(array(
            'id' => $id,
            'nom_etablissement' => $this->_nom_etablissement,
            'nom_proviseur' => $this->_nom_proviseur,
            'boite_postale' => $this->_boite_postale,
            'tel_etablissement1' => $this->_tel_etablissement1
            ));
    }

    public function getcurrentEtablissement(){
            global $db;
            $req = $db->query('SELECT * FROM etablissement');
            $find = $req->fetchAll();
            if(empty($find)){
            $this->set_info("0","none","none","none","none");
        }else{
             foreach($find as  $rep)
        {
            $this->set_info($rep["id"],$rep["nom_etablissement"],$rep["nom_proviseur"],$rep["boite_postale"],$rep["tel_etablissement1"]);
        }
        }
    }

    }
?>