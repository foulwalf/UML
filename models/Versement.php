
<?php
class Versement // Présence du mot-clé class suivi du nom de la classe.
{
    //les attributs
    //les fonctions 
    private  function VersementsParEtudiants(){
        $VersementsParEtudiants = Beneficiaire::db()->query('SELECT * FROM beneficiaire JOIN versement ON benficiaire.idbenef = versement.beneficiaire_idbenef');
    }

    private  function Versements(){
        $VersementsParEtudiants = Beneficiaire::db()->query('SELECT * FROM versement');
    }

}