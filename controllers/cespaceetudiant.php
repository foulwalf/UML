<?php
session_start();
include('../models/Beneficiaire.php');
$benef = new Beneficiaire(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$benef->create($_SESSION['user']['idbenef'], $_SESSION['user']['matricule'], $_SESSION['user']['nombenef'], $_SESSION['user']['prenombenef'], $_SESSION['user']['filiere'], $_SESSION['user']['niveau'], $_SESSION['user']['valide']);

$_SESSION['scolarite'] = $benef->ConsultationDeSolde();




$_SESSION['emploiDuTemps'] = $benef->ConsultationDeEmploiDuTemps();
if (isset($_POST['code_v'])) {
    $_SESSION['validation'] = $benef->ValidationDInstcription($_POST['code_v']);
}
header('location: ../views/espaceetudiant.php');

