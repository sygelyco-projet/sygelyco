#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: eleve
#------------------------------------------------------------

CREATE TABLE eleve(
        id                 int (11) Auto_increment  NOT NULL ,
        matricule          Varchar (25) NOT NULL ,
        nom_el             Varchar (255) NOT NULL ,
        prenom_el          Varchar (255)   ,
        sexe               Char (1) NOT NULL ,
        date_nais_el       Date NOT NULL ,
        lieu_nais_el       Varchar (255) NOT NULL ,
        quartier_el        Varchar (255)  ,
        nom_tuteur1        Varchar (255) NOT NULL ,
        tel_tuteur1        Varchar (25) NOT NULL ,
        relation_tuteur1   Varchar (255) NOT NULL ,
        nom_tuteur2        Varchar (255) ,
        tel_tuteur2        Varchar (25) ,
        relation_tuteur2   Varchar (255) ,
        nationnalite_el    Varchar (255) NOT NULL ,
        ecole_dorigine     Varchar (255)  ,
        type_ecole_origine Varchar (25) ,
        redoublant         Varchar (3) ,
        photo              Varchar (255) ,
         date_creation      DATETIME ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id ) ,
        UNIQUE (matricule )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: classe
#------------------------------------------------------------

CREATE TABLE classe(
        id                   int (11) Auto_increment  NOT NULL ,
        nom_cl               Varchar (50) ,
        abrege               Varchar (20) ,
        description_cl       Text ,
        id_cathegorie_classe Int ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id ) ,
        UNIQUE (nom_cl ,abrege )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: cathegorie_classe
#------------------------------------------------------------

CREATE TABLE cathegorie_classe(
        id              int (11) Auto_increment  NOT NULL ,
        nom_cat         Varchar (50) ,
        description_cat Text ,
        id_cycle        Int ,
        PRIMARY KEY (id ) ,
        UNIQUE (nom_cat )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: cycle
#------------------------------------------------------------

CREATE TABLE cycle(
        id             int (11) Auto_increment  NOT NULL ,
        nom_cy         Varchar (50) ,
        description_cy Text ,
        PRIMARY KEY (id ) ,
        UNIQUE (nom_cy )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        id           int (11) Auto_increment  NOT NULL ,
        login        Varchar (255) NOT NULL ,
        password     Varchar (255) NOT NULL ,
        nom_user     Varchar (255) NOT NULL ,
        prenom_user  Varchar (255) NOT NULL ,
        sexe         Varchar (1) NOT NULL ,
        tel_user1    Varchar (25) NOT NULL ,
        tel_user2    Varchar (25) NOT NULL ,
        photo        Varchar (255) NOT NULL ,
        email        Varchar (255) ,
        date_heure       DATETIME ,
        commentaires Text NOT NULL ,
		code_passe_oublie VARCHAR(10) NOT NULL,
        PRIMARY KEY (id ) ,
        UNIQUE (login ,password ,email )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: droit_sur_eleve
#------------------------------------------------------------

CREATE TABLE droit_sur_eleve(
        id             int (11) Auto_increment  NOT NULL ,
        nom_dr         Varchar (100) NOT NULL ,
        description_dr Text   ,
        PRIMARY KEY (id ) ,
        UNIQUE (nom_dr )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: privilege
#------------------------------------------------------------

CREATE TABLE privilege(
        id             int (11) Auto_increment  NOT NULL ,
        nom_pr         Varchar (50) NOT NULL ,
        description_pr Text  ,
        PRIMARY KEY (id ) ,
        UNIQUE (nom_pr )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: privilege_utilisateur
#------------------------------------------------------------

CREATE TABLE privilege_utilisateur(
        id             int (11) Auto_increment  NOT NULL ,
        id_utilisateur   Int NOT NULL ,
        id_privilege   Int NOT NULL ,
        id_anne_scolaire   Int NOT NULL ,
        PRIMARY KEY (id ) 
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: sanction
#------------------------------------------------------------

CREATE TABLE sanction(
        id             int (11) Auto_increment  NOT NULL ,
        nom_sa         Varchar (25) NOT NULL ,
        description_sa Text  ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id ) ,
        UNIQUE (nom_sa )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: anne_scolaire
#------------------------------------------------------------

CREATE TABLE anne_scolaire(
        id               int (11) Auto_increment  NOT NULL ,
        annee            Varchar (9) NOT NULL ,
        etat             Varchar (25) NOT NULL ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id ) ,
        UNIQUE (annee )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: sequence
#------------------------------------------------------------

CREATE TABLE sequence(
        id              int (11) Auto_increment  NOT NULL ,
        nom_seq         Varchar (25) NOT NULL ,
        description_seq Text ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id ) ,
        UNIQUE (nom_seq )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: matiere
#------------------------------------------------------------

CREATE TABLE matiere(
        id              int (11) Auto_increment  NOT NULL ,
        nom_mat         Varchar (50) NOT NULL ,
        abrege_mat      Varchar (15) NOT NULL ,
        description_mat Text ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id ) ,
        UNIQUE (nom_mat ,abrege_mat )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: grade
#------------------------------------------------------------

CREATE TABLE grade(
        id             int (11) Auto_increment  NOT NULL ,
        nom_gr         Varchar (50) NOT NULL ,
        description_gr Text  ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id ) ,
        UNIQUE (nom_gr )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: statu
#------------------------------------------------------------

CREATE TABLE statu(
        id             int (11) Auto_increment  NOT NULL ,
        nom_st         Varchar (50) NOT NULL ,
        description_st Text ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id ) ,
        UNIQUE (nom_st )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: personnel
#------------------------------------------------------------

CREATE TABLE personnel(
        id                     int (11) Auto_increment  NOT NULL ,
        nom_pers               Varchar (255) NOT NULL ,
        prenom_pers            Varchar (255)  ,
        sexe                   Varchar (1) NOT NULL ,
        tel_pers1              Varchar (255) NOT NULL ,
        tel_pers2              Varchar (25)  ,
        email                  Varchar (255)  ,
        commentaire            Text NOT NULL ,
        photo                  Varchar (255) NOT NULL ,
        date_nais_pers         Date NOT NULL ,
        lieu_nais_pers         Varchar (255) NOT NULL ,
        matricule              Varchar (25) ,
        nationnalite           Varchar (255)  ,
        region_dorigine        Varchar (255)  ,
        diplome_professionnel  Varchar (255) ,
        diplome_universitaire  Varchar (255) ,
        num_cni                Varchar (20) ,
        situation_matrimoniale Varchar (255) ,
        nombre_enfants         Int ,
        ville_residence        Varchar (255) ,
        nom_conjoint           Varchar (255) ,
        tel_conjoint           Varchar (255)  ,
        profession_conjoint    Varchar (255)  ,
        date_retraite          Date   ,
        date_creation       DATETIME ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id ) ,
        UNIQUE (matricule )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: etablissement
#------------------------------------------------------------

CREATE TABLE etablissement(
        id                  int (11) Auto_increment  NOT NULL ,
        nom_etablissement   Varchar (255) NOT NULL ,
        nom_proviseur       Varchar (255) NOT NULL ,
        boite_postale       Varchar (255) NOT NULL ,
        tel_etablissement1  Varchar (255) NOT NULL ,
        tel_etablissement2  Varchar (255) ,
        email               Varchar (255) ,
        devise              Varchar (100) ,
        tutel               Varchar (25) ,
        signature_proviseur Varchar (25) ,
        logo                Varchar (25) NOT NULL ,
        slide1              Varchar (25) ,
        slide2              Varchar (25) ,
        slide3              Varchar (25) ,
        slide4              Varchar (25) ,
        nb_messages_restant Int ,
        id_anne_scolaire    Int NOT NULL ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: achat_sms
#------------------------------------------------------------

CREATE TABLE achat_sms(
        id               int (11) Auto_increment  NOT NULL ,
        nbre_sms         Int NOT NULL ,
        cout_unitaire    Int NOT NULL ,
        date_achat       DATETIME NOT NULL ,
        id_anne_scolaire Int ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;

 
#------------------------------------------------------------
# Table: droit_attribue_sur_eleve
#------------------------------------------------------------

CREATE TABLE droit_attribue_sur_eleve(
        id_droit_sur_eleve             Int NOT NULL ,
        id_utilisateur Int NOT NULL ,
        id_eleve       Int NOT NULL ,
        id_sequence    Int NOT NULL ,
        id_anne_scolaire    Int NOT NULL ,
		date_debut     Date NOT NULL ,
        date_fin       Date NOT NULL ,
        PRIMARY KEY (id_droit_sur_eleve ,id_utilisateur ,id_eleve ,id_sequence )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: sanction_attribue
#------------------------------------------------------------

CREATE TABLE sanction_attribue(
        id_sanction               Int NOT NULL ,
        id_eleve         Int NOT NULL ,
        id_anne_scolaire Int NOT NULL ,
        id_sequence      Int NOT NULL ,
        date_attribution DATETIME ,
        id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id_sanction ,id_eleve ,id_anne_scolaire ,id_sequence )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: abscence_eleves
#------------------------------------------------------------

CREATE TABLE abscence_eleves(
        id_sequence               Int NOT NULL ,
        id_eleve         Int NOT NULL ,
        id_anne_scolaire Int NOT NULL ,
		nombre           Int ,
        id_utilisateur   Int NOT NULL ,
         date_heure       DATETIME ,
        PRIMARY KEY (id_sequence ,id_eleve ,id_anne_scolaire  )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: note
#------------------------------------------------------------

CREATE TABLE note(
        id_eleve               Int NOT NULL ,
        id_sequence      Int NOT NULL ,
        id_anne_scolaire Int NOT NULL ,
        id_matiere       Int NOT NULL ,
		note             Int ,
        id_utilisateur   Int NOT NULL ,
        date_heure       DATETIME ,
        PRIMARY KEY (id_eleve ,id_sequence ,id_anne_scolaire ,id_matiere )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: a_frequente
#------------------------------------------------------------

CREATE TABLE a_frequente(
        id_anne_scolaire         Int NOT NULL ,
        id_classe  Int NOT NULL ,
        id_eleve   Int NOT NULL ,
		redoublant Varchar (3) NOT NULL ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id_anne_scolaire ,id_classe ,id_eleve )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: matieres_personnel
#------------------------------------------------------------

CREATE TABLE matieres_personnel(
        id_personnel         Int NOT NULL ,
        id_matiere Int NOT NULL ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id_personnel ,id_matiere )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: enseigner
#------------------------------------------------------------

CREATE TABLE enseigner(
        id_personnel     Int NOT NULL ,
        id_anne_scolaire Int NOT NULL ,
        id_matiere       Int NOT NULL ,
        id_classe        Int NOT NULL ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id_personnel ,id_anne_scolaire ,id_matiere ,id_classe )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: matiere_classe
#------------------------------------------------------------

CREATE TABLE matiere_classe(
        id_classe               Int NOT NULL ,
		id_matiere       Int NOT NULL ,
        id_anne_scolaire Int NOT NULL ,
		coef             Int NOT NULL ,
        groupe           Varchar (25) NOT NULL ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id_classe ,id_matiere ,id_anne_scolaire )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: grade_personnel
#------------------------------------------------------------

CREATE TABLE grade_personnel(
        id_personnel               Int NOT NULL ,
        id_grade         Int NOT NULL ,
        id_anne_scolaire Int NOT NULL ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id_personnel ,id_grade ,id_anne_scolaire )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: statu_personnel
#------------------------------------------------------------

CREATE TABLE statu_personnel(
        id_personnel              Int NOT NULL ,
        id_statu         Int NOT NULL ,
        id_anne_scolaire Int NOT NULL ,
		id_utilisateur   Int NOT NULL ,
        PRIMARY KEY (id_personnel ,id_statu ,id_anne_scolaire )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: envoyer_message
#------------------------------------------------------------

CREATE TABLE envoyer_message(
        id               Int NOT NULL ,
		contenu          Varchar (250) ,
        tel_destinataire Varchar (25) NOT NULL ,
        date_heure       DATETIME NOT NULL ,
        id_utilisateur   Int NOT NULL ,
        id_anne_scolaire Int NOT NULL ,
        PRIMARY KEY (id ,id_utilisateur ,id_anne_scolaire )
)ENGINE=InnoDB;

ALTER TABLE classe ADD CONSTRAINT FK_classe_id_cathegorie_classe FOREIGN KEY (id_cathegorie_classe) REFERENCES cathegorie_classe(id);
ALTER TABLE cathegorie_classe ADD CONSTRAINT FK_cathegorie_classe_id_cycle FOREIGN KEY (id_cycle) REFERENCES cycle(id);
ALTER TABLE privilege_utilisateur ADD CONSTRAINT FK_utilisateur_id_privilege FOREIGN KEY (id_privilege) REFERENCES privilege(id);
ALTER TABLE privilege_utilisateur ADD CONSTRAINT FK_privilege_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE privilege_utilisateur ADD CONSTRAINT FK_privilege_utilisateur_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE etablissement ADD CONSTRAINT FK_etablissement_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE achat_sms ADD CONSTRAINT FK_achat_sms_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE droit_attribue_sur_eleve ADD CONSTRAINT FK_droit_attribue_sur_eleve_id FOREIGN KEY (id_droit_sur_eleve) REFERENCES droit_sur_eleve(id);
ALTER TABLE droit_attribue_sur_eleve ADD CONSTRAINT FK_droit_attribue_sur_eleve_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE droit_attribue_sur_eleve ADD CONSTRAINT FK_droit_attribue_sur_eleve_id_eleve FOREIGN KEY (id_eleve) REFERENCES eleve(id);
ALTER TABLE droit_attribue_sur_eleve ADD CONSTRAINT FK_droit_attribue_sur_eleve_id_sequence FOREIGN KEY (id_sequence) REFERENCES sequence(id);
ALTER TABLE droit_attribue_sur_eleve ADD CONSTRAINT FK_droit_attribue_sur_eleve_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE sanction_attribue ADD CONSTRAINT FK_sanction_attribue_id FOREIGN KEY (id_sanction) REFERENCES sanction(id);
ALTER TABLE sanction_attribue ADD CONSTRAINT FK_sanction_attribue_id_eleve FOREIGN KEY (id_eleve) REFERENCES eleve(id);
ALTER TABLE sanction_attribue ADD CONSTRAINT FK_sanction_attribue_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE sanction_attribue ADD CONSTRAINT FK_sanction_attribue_id_sequence FOREIGN KEY (id_sequence) REFERENCES sequence(id);
ALTER TABLE sanction_attribue ADD CONSTRAINT FK_sanction_attribue_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE abscence_eleves ADD CONSTRAINT FK_abscence_eleves_id FOREIGN KEY (id_sequence) REFERENCES sequence(id);
ALTER TABLE abscence_eleves ADD CONSTRAINT FK_abscence_eleves_id_eleve FOREIGN KEY (id_eleve) REFERENCES eleve(id);
ALTER TABLE abscence_eleves ADD CONSTRAINT FK_abscence_eleves_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE abscence_eleves ADD CONSTRAINT FK_abscence_eleves_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE note ADD CONSTRAINT FK_note_id FOREIGN KEY (id_eleve) REFERENCES eleve(id);
ALTER TABLE note ADD CONSTRAINT FK_note_id_sequence FOREIGN KEY (id_sequence) REFERENCES sequence(id);
ALTER TABLE note ADD CONSTRAINT FK_note_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE note ADD CONSTRAINT FK_note_id_matiere FOREIGN KEY (id_matiere) REFERENCES matiere(id);
ALTER TABLE note ADD CONSTRAINT FK_note_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE a_frequente ADD CONSTRAINT FK_a_frequente_id FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE a_frequente ADD CONSTRAINT FK_a_frequente_id_classe FOREIGN KEY (id_classe) REFERENCES classe(id);
ALTER TABLE a_frequente ADD CONSTRAINT FK_a_frequente_id_eleve FOREIGN KEY (id_eleve) REFERENCES eleve(id);
ALTER TABLE matieres_personnel ADD CONSTRAINT FK_matieres_personnel_id FOREIGN KEY (id_personnel) REFERENCES personnel(id);
ALTER TABLE matieres_personnel ADD CONSTRAINT FK_matieres_personnel_id_matiere FOREIGN KEY (id_matiere) REFERENCES matiere(id);
ALTER TABLE enseigner ADD CONSTRAINT FK_enseigner_id FOREIGN KEY (id_personnel) REFERENCES personnel(id);
ALTER TABLE enseigner ADD CONSTRAINT FK_enseigner_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE enseigner ADD CONSTRAINT FK_enseigner_id_matiere FOREIGN KEY (id_matiere) REFERENCES matiere(id);
ALTER TABLE enseigner ADD CONSTRAINT FK_enseigner_id_classe FOREIGN KEY (id_classe) REFERENCES classe(id);
ALTER TABLE matiere_classe ADD CONSTRAINT FK_matiere_classe_id FOREIGN KEY (id_classe) REFERENCES classe(id);
ALTER TABLE matiere_classe ADD CONSTRAINT FK_matiere_classe_id_matiere FOREIGN KEY (id_matiere) REFERENCES matiere(id);
ALTER TABLE matiere_classe ADD CONSTRAINT FK_matiere_classe_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE grade_personnel ADD CONSTRAINT FK_grade_personnel_id FOREIGN KEY (id_personnel) REFERENCES personnel(id);
ALTER TABLE grade_personnel ADD CONSTRAINT FK_grade_personnel_id_grade FOREIGN KEY (id_grade) REFERENCES grade(id);
ALTER TABLE grade_personnel ADD CONSTRAINT FK_grade_personnel_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE statu_personnel ADD CONSTRAINT FK_statu_personnel_id FOREIGN KEY (id_personnel) REFERENCES personnel(id);
ALTER TABLE statu_personnel ADD CONSTRAINT FK_statu_personnel_id_statu FOREIGN KEY (id_statu) REFERENCES statu(id);
ALTER TABLE statu_personnel ADD CONSTRAINT FK_statu_personnel_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE envoyer_message ADD CONSTRAINT FK_envoyer_message_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE envoyer_message ADD CONSTRAINT FK_envoyer_message_id_anne_scolaire FOREIGN KEY (id_anne_scolaire) REFERENCES anne_scolaire(id);
ALTER TABLE statu_personnel ADD CONSTRAINT FK_statu_personnel_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE grade_personnel ADD CONSTRAINT FK_grade_personnel_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE matiere_classe ADD CONSTRAINT FK_matiere_classe_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE enseigner ADD CONSTRAINT FK_enseigner_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE matieres_personnel ADD CONSTRAINT FK_matieres_personnel_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE a_frequente ADD CONSTRAINT FK_a_frequente_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE achat_sms ADD CONSTRAINT FK_achat_sms_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE sequence ADD CONSTRAINT FK_sequence_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE anne_scolaire ADD CONSTRAINT FK_anne_scolaire_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE classe ADD CONSTRAINT FK_classe_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE eleve ADD CONSTRAINT FK_eleve_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE personnel ADD CONSTRAINT FK_personnel_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE sanction ADD CONSTRAINT FK_sanction_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE matiere ADD CONSTRAINT FK_matiere_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE grade ADD CONSTRAINT FK_grade_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);
ALTER TABLE statu ADD CONSTRAINT FK_statu_id_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id);