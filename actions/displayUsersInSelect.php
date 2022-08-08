<?php
require('actions/database.php');

$listOfUsers = [];
$getAllUsers = $bdd->query('SELECT nom, prenom FROM etudiants');

while($user = $getAllUsers->fetch()) {
    $userinformations = $user['nom'] . " " . $user['prenom'];

    array_push($listOfUsers, $userinformations);
}