<?php
if (isset($_GET['action'])) {
    session_start();
    unset($_SESSION['user'][0]);
    session_destroy();
    header('location: ../views/authentification.php');
} else{
    if (isset($_POST['mdp_oublie'])) {
        include('../models/Beneficiaire.php');
        $recuperation = Beneficiaire::db()->prepare('SELECT mdp FROM beneficiaire WHERE matricule = ? ');
        $execution = $recuperation->execute(array($_POST['matricule']));
        $recuperation = $recuperation->fetch();
        session_start();
        $_SESSION['mdp_recupere'] = $recuperation['mdp'];
        header('location: ../views/motdepasserecup.php');
    }
    include('../models/Beneficiaire.php');

    $username = $_POST['username'];
    $mdp = $_POST['password'];
    try {
        $connexion = Beneficiaire::db()->prepare('SELECT * FROM beneficiaire WHERE matricule = ? AND mdp = ?');
        
        $execution = $connexion->execute(array($username, $mdp));
        if ($connexion->rowCount() == 1) {
            $beneficiaire_connecte = $connexion->fetch();
            switch ($beneficiaire_connecte['etat'] ) {
                case NULL:
                    header('location: ../views/authentification.php?erreur=idInvalid');
                    break;
                case "0":
                    session_start();
                    $_SESSION['motif'] = $beneficiaire_connecte['motif'];
                    header('location: ../views/echecins.php');
                    break;
                case "1":
                    session_start();
                    $_SESSION['user'] = $beneficiaire_connecte;
                    $photos = scandir('../fichiers/photo/'.$beneficiaire_connecte['matricule']);
                    $photos = array_slice($photos,2);
                    $photo = $photos[0];
                    $_SESSION['user']['photo'] = $photo;
                    header('location: cespaceetudiant.php');
                    break;
                default:
                    header('location: ../views/authentification.php');
                break;
            }
        } else{
            header('location: ../views/authentification.php?erreur=idError');
        }


    } catch (Exception $e) {
        die($e->getMessage());
    }
}




