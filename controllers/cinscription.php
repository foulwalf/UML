<?php
//inclusion du  fichiers de la classe  Bénéficiaire
include('../models/Beneficiaire.php');

//recuperations des données envoyées par le formulaire

$nom = $_POST['first_name'];
$prenom = $_POST['last_name'];
$sexe = $_POST['sexe'];
$datedenaissance = $_POST['datedenaissance'];
$lieudenaissance = $_POST['lieudenaissance'];
$emailetudiant = $_POST['emailetudiant'];
$diplome = $_POST['diplome'];
$phone = $_POST['phone'];
$phoneparent = $_POST['phoneparent'];
$filiere = $_POST['filiere'];
$niveau = $_POST['niveau'];
$mdp = $_POST['motdepasse'];
$fichiers = [$_FILES['cni'],$_FILES['bac']];

//création d'une instance de la classe bénéficiaire avec pour attributs les données recuprées plus hauts

$benef = new Beneficiaire($nom, $prenom, $datedenaissance, $lieudenaissance, $diplome, $filiere, $niveau, $emailetudiant, $phone, $phoneparent, $mdp, $fichiers);

//appel de la fonction D'inscription sur l'instance de la classe bénéficiaire

$inscription = $benef->Inscription();
//si l'inscription (l'ajout des données dans la bd) est effectuée avec succès on passe au chargement des fichiers sur le serveur

if ($inscription) {
    $fichiers = $benef->Fichiers($nom,$prenom,$inscription['id'],$fichiers);
    if ($fichiers) {
        //si le chargements des fichiers est effectué avec succès on redirige l'utilisateur vers la page de succès
        session_start();
        $_SESSION['matricule'] = $inscription['matricule'];
        header('location: ../views/succesins.php');
    } else {
        //sinon on supprime l'enregistrement effectué dans la bd et on redirige l'utilisateur vers la page d'erreur

        $suppression = $benef->Supprimer($inscription['id']);
        header('location: ../views/erreurins.php');
    }
} else{
    //si l'inscription (l'ajout des données dans la bd) n'est pas effectué on redirige l'utilisateur vers la page d'erreur

    header('location: ../views/erreurins.php');
}