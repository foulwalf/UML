
<?php
class Beneficiaire {// Présence du mot-clé class suivi du nom de la classe.
    //les attributs
    public $_idBeneficiaire;
    public $_nomBeneficiaire;
    public $_prenomBeneficiaire;
    public $_dateDeNaissance;
    public $_lieuDeNaissance;
    public $_diplome;
    public $_filiere;
    public $_niveau;
    public $_email;
    public $_contact;
    public $_contactparent;
    public $_fichiers = [];
    public $_matricule;
    public $_codeversement;
    public $_valide;

    //constructeur de création de la classe Beneficiaire
    function __construct($nomBeneficiaire, $prenomBeneficiaire, $dateDeNaissance, $lieuDeNaissance, $diplome, $filiere, $niveau, $email, $contact, $contactParent, $mdp, $fichiers){
        $this->_nomBeneficiaire = $nomBeneficiaire;
        $this->_prenomBeneficiaire = $prenomBeneficiaire;
        $this->_dateDeNaissance = $dateDeNaissance;
        $this->_lieuDeNaissance = $lieuDeNaissance;
        $this->_diplome = $diplome;
        $this->_filiere = $filiere;
        $this->_niveau = $niveau;
        $this->_email = $email;
        $this->_contact = $contact;
        $this->_contactparent = $contactParent;
        $this->_mdp = $mdp;
        $this->_fichiers = $fichiers;
        $this->_matricule = strtoupper(substr(str_shuffle(uniqid()),0,5)."-".$this->_niveau);
    }
    // constructeur pour l'espace étudiant
    public function create($idBeneficiaire, $matricule, $nomBeneficiaire, $prenomBeneficiaire, $filiere, $niveau, $valide){
        $this->_idBeneficiaire = $idBeneficiaire;
        $this->_matricule = $matricule;
        $this->_nomBeneficiaire = $nomBeneficiaire;
        $this->_prenomBeneficiaire = $prenomBeneficiaire;
        $this->_filiere = $filiere;
        $this->_niveau = $niveau;
        $this->_valide = $valide;
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
    public  function Inscription(){
        try {
            $inscription = self::db()->prepare('INSERT INTO beneficiaire(nombenef, prenombenef, datenaissbenef, lieudenaissbenef, diplome, filiere, email, contact, contactparent, niveau, mdp, matricule) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');
            $execution = $inscription->execute(array($this->_nomBeneficiaire, $this->_prenomBeneficiaire,   $this->_dateDeNaissance, $this->_lieuDeNaissance, $this->_diplome, $this->_filiere, $this->_email, $this->_contact, $this->_contactparent,$this->_niveau, $this->_mdp, $this->_matricule));
            return $execution;
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }

    //enregistrement de fichiers 
    public function Fichiers($tableauDeFichiers){
        try {
            $nomDuDossierFichiers = "../fichiers/fichiers/".$this->_matricule;
            $nomDuDossierPhoto = "../fichiers/photo/".$this->_matricule;
            if (!is_dir($nomDuDossierFichiers)) {
                mkdir($nomDuDossierFichiers, 0777);
            }
            
            if(!is_dir($nomDuDossierPhoto)){
                mkdir($nomDuDossierPhoto, 0777);
            }
            
            $chargements = [];

            $i = 0;
            foreach ($tableauDeFichiers as $fichier){
                if($i == 2 ){
                    $cible = $nomDuDossierPhoto.'/'.$fichier['name'];
                    if(move_uploaded_file($fichier['tmp_name'],$cible)){
                        array_push($chargements, true);
                    } else{
                        array_push($chargements, false);
                    }
                } else{
                    $cible = $nomDuDossierFichiers.'/'.$fichier['name'];
                    if(move_uploaded_file($fichier['tmp_name'],$cible)){
                        array_push($chargements, true);
                    } else{
                        array_push($chargements, false);
                    }
                }
                $i++;
            }
            return ($chargements[0] && $chargements[1])? true : false;

        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }

    public function ValidationDInstcription($codeVersement){

        $test = self::db()->prepare('SELECT idversement, codeversement, beneficiaire_idbenef FROM versement WHERE codeversement = ?');
        $execution = $test->execute(array($codeVersement));
        $test = $test->fetch();
        if($test){
            $maj = self::db()->prepare('UPDATE beneficiaire SET valide = ? WHERE idbenef = ?');
            $execution = $maj->execute(array(1,$test['beneficiaire_idbenef']));
            if($execution){
                
                return 'succes';
            } else{
                
                return 'error1';
            }
        } else{
            return 'error2';
        }
    }

    public function ConsultationDeSolde(){
        $totalScolarite = [
            'Informatique' => [
                'Licence 1' => 700000,
                'BTS 1' => 700000,
                'Licence 2' => 900000,
                'BTS 2' => 900000,
                'Licence 3' => 1100000,
                'Master 1' => 1300000,
                'Master 2' => 1400000,
            ],
            'RH-com' => [
                'Licence 1' => 700000,
                'BTS 1' => 700000,
                'Licence 2' => 900000,
                'BTS 2' => 900000,
                'Licence 3' => 1100000,
                'Master 1' => 1300000,
                'Master 2' => 1400000,
            ],
            'Pub' => [
                'Licence 1' => 700000,
                'BTS 1' => 700000,
                'Licence 2' => 900000,
                'BTS 2' => 900000,
                'Licence 3' => 1100000,
                'Master 1' => 1300000,
                'Master 2' => 1400000,
            ],
            'Finance-compta' => [
                'Licence 1' => 700000,
                'BTS 1' => 700000,
                'Licence 2' => 900000,
                'BTS 2' => 900000,
                'Licence 3' => 1100000,
                'Master 1' => 1300000,
                'Master 2' => 1400000,
            ],
            'Marketing management' => [
                'Licence 1' => 700000,
                'BTS 1' => 700000,
                'Licence 2' => 900000,
                'BTS 2' => 900000,
                'Licence 3' => 1100000,
                'Master 1' => 1300000,
                'Master 2' => 1400000,
            ],
            'Commerce inter' => [
                'Licence 1' => 700000,
                'BTS 1' => 700000,
                'Licence 2' => 900000,
                'BTS 2' => 900000,
                'Licence 3' => 1100000,
                'Master 1' => 1300000,
                'Master 2' => 1400000,
            ],
            'Logistique' => [
                'Licence 1' => 700000,
                'BTS 1' => 700000,
                'Licence 2' => 900000,
                'BTS 2' => 900000,
                'Licence 3' => 1100000,
                'Master 1' => 1300000,
                'Master 2' => 1400000,
            ],
        ];

        $scolaritePayee = self::db()->prepare('SELECT beneficiaire_idbenef, SUM(montantversement) as scolarite_payee FROM versement WHERE   beneficiaire_idbenef = ?');
        $execution = $scolaritePayee->execute(array($this->_idBeneficiaire));
        $scolaritePayee  = $scolaritePayee->fetch();
        $solde = $totalScolarite[$this->_filiere][$this->_niveau] - $scolaritePayee['scolarite_payee'];
        return ['solde' => $solde, 'scolarite' => $totalScolarite[$this->_filiere][$this->_niveau], 'scolaritePayee' => $scolaritePayee['scolarite_payee']];

    }

    public function ConsultationDeEmploiDuTemps(){
        $dossier = '../Emploi du temps/'.$this->_filiere.'/'.$this->_niveau;
        $emploisDuTemps = [];
            if ($handle = opendir($dossier)) {
            while (false !== ($fichier = readdir($handle))) {
                if ($fichier !== "." && $fichier !== "..") {
                    array_push($emploisDuTemps, $fichier);
                }
            }
            closedir($handle);
        }

        $recentTime = filemtime($emploisDuTemps[0]);
        $recentFileName = $dossier.'/'.$emploisDuTemps[0];
        
        foreach ($emploisDuTemps as $emploiDuTemps) {
            if (filemtime($emploiDuTemps) > $recentTime) {
                $recentTime = filemtime($emploiDuTemps);
                $recentFileName = $dossier.'/'.$emploiDuTemps;
            }
        }
        $fichier = $recentFileName;
        $date = strftime("%A %d %B %G", strtotime(date("d F Y", $recentTime)));

        return [$date, $fichier];
        
    }

    public function supprimer(){
        $test = self::db()->prepare('DELETE FROM beneficiaire WHERE matricule = ?');
        $execution = $test->execute(array($this->_matricule));
        return $execution;
    }
}