
<?php
class Beneficiaire {// Présence du mot-clé class suivi du nom de la classe.

    
    //les attributs
    private $_nomBeneficiaire;
    private $_prenomBeneficiaire;
    private $_dateDeNaissance;
    private $_lieuDeNaissance;
    private $_diplome;
    private $_serie;
    private $_dateDiplome;
    private $_filiere;
    private $_niveau;
    private $_email;
    private $_contact;
    private $_adresse;
    private $_nomParent;
    private $_contactparent;
    private $_emailParent;
    private $_fichiers = [];

    //constructeur de la classe Beneficiaire
    function __construct($nomBeneficiaire,$prenomBeneficiaire,$dateDeNaissance,$lieuDeNaissance,$diplome,$serie,$dateDiplome,$filiere, $niveau, $email, $contact, $adresse, $nomParent, $contactParent, $emailParent, $fichiers){
        $this->_nomBeneficiaire = $nomBeneficiaire;
        $this->_prenomBeneficiaire = $prenomBeneficiaire;
        $this->_dateDeNaissance = $dateDeNaissance;
        $this->_lieuDeNaissance = $lieuDeNaissance;
        $this->_diplome = $diplome;
        $this->_serie = $serie;
        $this->_dateDiplome = $dateDiplome;
        $this->_filiere = $filiere;
        $this->_niveau = $niveau;
        $this->_email = $email;
        $this->_contact = $contact;
        $this->_adresse = $adresse;
        $this->_nomParent = $nomParent;
        $this->_contactparent = $contactParent;
        $this->_emailParent = $emailParent;
        $this->_fichiers = $fichiers;
    }

    /*les différentes fonctions*/

    //connexion à la base de données
    public static function db(){
        try{
            $connexion = new PDO('mysql:host=localhost;dbname=uml;charset=UTF8', 'root', '');
        } catch(Exception $e){
            die($e->getMessage());
        }
        return $connexion;
    }
    //inscription du beneficiaire
    private  function Inscription(){
        $inscprition = $this->db()->prepare('INSERT INTO beneficiaire(nombenef, prenombenef, datenaissbenef, lieudenaissbenef, diplome, serie, datediplome, filiere, email, contact, adresse, nomparent, contactparent, emailparent) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $inscprition = $inscprition->execute(array($this->_nomBeneficiaire, $this->_prenomBeneficiaire, $this->_dateDeNaissance, $this->_lieuDeNaissance, $this->_diplome, $this->_serie, $this->_dateDiplome, $this->_filiere, $this->_email, $this->_contact, $this->_adresse, $this->_nomParent, $this->_contactparent, $this->_emailParent));
        if ($inscprition) {
            return ['etat' => true , 'id' => $this->db()->lastInsertId()];
        } else {
            return ['etat' => false];
        }
    }

    //enregistrement de fichiers 
    private function Fichiers($nomBeneficiaire, $prenomBeneficiaire, $idBeneficiaire, $tableauDeFichiers){
        $nomDuDossier = $nomBeneficiaire.''.$prenomBeneficiaire.''.$idBeneficiaire;
        if(!is_dir('../fichiers/'.$nomDuDossier)){
            mkdir('../fichiers/'.$nomDuDossier, 0777, true);
        }
        $cible = $nomDuDossier.'/'.$_FILES[$tableauDeFichiers]['name'].'.'.PATHINFO($_FILES[$$tableauDeFichiers]['name'],PATHINFO_EXTENSION);
        if(move_uploaded_file($_FILES[$tableauDeFichiers]['tmp_name'],$cible)){
            return true;
        };

    }

    private function ValidationDInstcription($codeVersement, $idBeneficiaire, $dateVersement){
        $test = $this->db()->prepare('SELECT idversement, codeversement, dateversement, montantversement, beneficiaire_idbenef FROM versement WHERE codeversement = ? AND  beneficiaire_idbenef = ? AND dateversement =');
        $execution = $test->execute(array($codeVersement, $idBeneficiaire, $dateVersement));
        $test = $test->fetchAll();
        return $test?true:false;
    }

    private function ConsultationDeSolde($idBeneficiaire, $codeVersement, $filiere, $niveau){
        $scolarite = [
            'info' => [
                'lp1' => 700000,
                'bts1' => 700000,
                'lp2' => 900000,
                'lp3' => 1100000,
                'm1' => 1300000,
                'm2' => 1400000,
            ],
            'rh' => [
                'lp1' => 700000,
                'bts1' => 700000,
                'lp2' => 900000,
                'lp3' => 1100000,
                'm1' => 1300000,
                'm2' => 1400000,
            ],
            'pub' => [
                'lp1' => 700000,
                'bts1' => 700000,
                'lp2' => 900000,
                'lp3' => 1100000,
                'm1' => 1300000,
                'm2' => 1400000,
            ],
            'fin' => [
                'lp1' => 700000,
                'bts1' => 700000,
                'lp2' => 900000,
                'lp3' => 1100000,
                'm1' => 1300000,
                'm2' => 1400000,
            ],
            'mn' => [
                'lp1' => 700000,
                'bts1' => 700000,
                'lp2' => 900000,
                'lp3' => 1100000,
                'm1' => 1300000,
                'm2' => 1400000,
            ],
            'ci' => [
                'lp1' => 700000,
                'bts1' => 700000,
                'lp2' => 900000,
                'lp3' => 1100000,
                'm1' => 1300000,
                'm2' => 1400000,
            ],
            'log' => [
                'lp1' => 700000,
                'bts1' => 700000,
                'lp2' => 900000,
                'lp3' => 1100000,
                'm1' => 1300000,
                'm2' => 1400000,
            ],
        ];

        $scolaritePayee = $this->db()->prepare('SELECT codeversement, SUM(montantversement) as scolarite_payee, beneficiaire_idbenef FROM versement ORDER BY beneficiaire_idbenef, codeversement WHERE codeversement = ? AND  beneficiaire_idbenef = ?');
        $execution = $scolaritePayee->execute(array($codeVersement, $idBeneficiaire));
        $scolaritePayee  = $scolaritePayee->fetchAll();
        $solde = $scolarite[$filiere][$niveau] - $scolaritePayee['scolarite_payee'];
        return $solde;

    }

    private function ConsultationDeEmploiDuTemps($idBeneficiaire, $filiere, $niveau){
        $fichiers = scandir('../models');
        $fichiers = array_slice($fichiers,2);
    }
}