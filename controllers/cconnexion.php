<?php
if (isset($_GET['action'])) {
    session_start();
    unset($_SESSION['user'][0]);
    session_destroy();
    header('location: ../views/authentification.php');
} else{

    include('../models/Beneficiaire.php');

    $username = $_POST['username'];
    $mdp = $_POST['password'];
    try {
        $connexion = Beneficiaire::db()->prepare('SELECT * FROM beneficiaire WHERE matricule = ? AND mdp = ?');
        $execution = $connexion->execute(array($username, $mdp));
        if ($connexion->rowCount() > 0) {
            $beneficiaire_connecte = $connexion->fetch();
            switch ($beneficiaire_connecte['etat'] ) {
                case NULL:
                    header('location: ../views/authentification.php?erreur=idInvalid');
                    break;
                case 0:
                    session_start();
                    $_SESSION['motif'] = $beneficiaire_connecte['motif'];
                    header('location: ../views/echecins.php');
                    break;
                case 1:
                    session_start();
                    $_SESSION['user'] = $beneficiaire_connecte;
                    $photos = scandir('../fichiers/'.$beneficiaire_connecte['matricule'].'/photo');
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



