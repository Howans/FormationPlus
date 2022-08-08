<?php
require('actions/database.php');

if((isset($_POST['validate_student']) or isset($_POST['validate_attestation'])) AND !empty($_POST['student'])) {
    $user = htmlspecialchars($_POST['student']);
    $user = explode(' ', $user);
    $lastname = $user[0];
    $firstname = $user[1];
    
    $getTheSelectedUserId = $bdd->prepare('SELECT idEtudiant FROM etudiants WHERE nom = ? AND prenom = ?');
    $getTheSelectedUserId->execute(array($lastname, $firstname));
    $studentId = $getTheSelectedUserId->fetch();
    $studentId = $studentId['idEtudiant'];

    $getConventionIdOfUsers = $bdd->prepare('SELECT convention FROM etudiants WHERE idEtudiant = ?');
    $getConventionIdOfUsers->execute(array($studentId));
    $conventionId = $getConventionIdOfUsers->fetch();
    $conventionId = $conventionId['convention'];

    $getTheConvention = $bdd->prepare('SELECT nom, nbHeur FROM conventions WHERE idConvention = ?');
    $getTheConvention->execute(array($conventionId));
    $conventionInformations = $getTheConvention->fetch();

    $conventionName = $conventionInformations['nom'];
    $conventionNbHeur = $conventionInformations['nbHeur'];
}
