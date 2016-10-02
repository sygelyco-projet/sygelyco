<?php
    class Etablissement {
        private $_id; 
        private $_nom_etablissement; 
        private $_nom_proviseur; 
        private $_boite_postale;
        private $_tel_etablissement1;
        private $_email;
        private $_signature_proviseur;
        private $_logo;
        private $_slide1;
        private $_slide2;
        private $_slide3;
        private $_slide4;

       /* public function __construct($nom_etablissement, $nom_proviseur, $boite_postale, $tel_etablissement1){
            $this->_nom_etablissement=$nom_etablissement;
            $this->_nom_proviseur=$nom_proviseur;
            $this->_boite_postale=$boite_postale;
            $this->_tel_etablissement1=$tel_etablissement1;
        }*/
        public function set_info($id,$nom_etablissement, $nom_proviseur, $boite_postale, $tel_etablissement1,$email,$logo,$signature_proviseur,$slide1,$slide2,$slide3,$slide4){
            $this->_id=$id;
            $this->_nom_etablissement=$nom_etablissement;
            $this->_nom_proviseur=$nom_proviseur;
            $this->_boite_postale=$boite_postale;
            $this->_tel_etablissement1=$tel_etablissement1;
            $this->_email=$email;
            $this->_logo=$logo;
            $this->_signature_proviseur=$signature_proviseur;
            $this->_slide1=$slide1;
            $this->_slide2=$slide2;
            $this->_slide3=$slide3;
            $this->_slide4=$slide4;
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
        function getEmail() {
            return $this->_email;
        }
        function getlogo() {
            return $this->_logo;
        }
        function getSignature() {
            return $this->_signature_proviseur;
        }
        function getSlide1(){
            return $this->_slide1;
        }
         function getSlide2(){
            return $this->_slide2;
        }
         function getSlide3(){
            return $this->_slide3;
        }
         function getSlide4(){
            return $this->_slide4;
        }
        public function save(){
            global $db;
            
               $req = $db->prepare('INSERT INTO etablissement(nom_etablissement, nom_proviseur,boite_postale,tel_etablissement1) VALUES(:nom_etablissement, :nom_proviseur,:boite_postale, :tel_etablissement1)');
            $req->execute(array(
                'nom_etablissement' => $this->_nom_etablissement,
                'nom_proviseur' => $this->_nom_proviseur,
                'boite_postale' => $this->_boite_postale,
                'tel_etablissement1' => $this->_tel_etablissement1,
                'email' => $this->_email,
                'signature_proviseur' => $this->_signature_proviseur,
                'logo' => $this->_logo,
                'slide1' => $this->_slide1,
                'slide2' => $this->_slide2,
                'slide3' => $this->_slide3,
                'slide4' => $this->_slide4
                ));
        
        }
    
    public function update($id){
        global $db;
        $req = $db->prepare('UPDATE etablissement SET nom_etablissement = :nom_etablissement, nom_proviseur = :nom_proviseur,boite_postale = :boite_postale, tel_etablissement1 = :tel_etablissement1,email = :email, signature_proviseur = :signature_proviseur,logo = :logo, slide1 = :slide1,slide2 = :slide2, slide3 = :slide3,slide4 = :slide4 WHERE id = :id');
        $req->execute(array(
            'id' => $id,
            'nom_etablissement' => $this->_nom_etablissement,
            'nom_proviseur' => $this->_nom_proviseur,
            'boite_postale' => $this->_boite_postale,
            'tel_etablissement1' => $this->_tel_etablissement1,
            'email' => $this->_email,
            'signature_proviseur' => $this->_signature_proviseur,
            'logo' => $this->_logo,
            'slide1' => $this->_slide1,
            'slide2' => $this->_slide2,
            'slide3' => $this->_slide3,
            'slide4' => $this->_slide4
            ));
    }

    public function getcurrentEtablissement(){
            global $db;
            $req = $db->query('SELECT * FROM etablissement');
            $find = $req->fetchAll();
            if(empty($find)){
            $this->set_info("0","none","none","none","none","none","none","none","none","none","none","none");
        }else{
             foreach($find as  $rep)
        {
            $this->set_info($rep["id"],$rep["nom_etablissement"],$rep["nom_proviseur"],$rep["boite_postale"],$rep["tel_etablissement1"],$rep["email"],$rep["logo"],$rep["signature_proviseur"],$rep["slide1"],$rep["slide2"],$rep["slide3"],$rep["slide4"]);
        }
        }
    }

    }
?>