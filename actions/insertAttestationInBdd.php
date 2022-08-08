<?php
require('actions/database.php');

if(isset($_POST['validate_attestation']) AND !empty($_POST['attestation_text'])) {
    $attestationText = htmlspecialchars($_POST['attestation_text']);
    $attestationText = str_replace("\n", "<br/>", $attestationText);

    $insertAttestationInBdd = $bdd->prepare('INSERT INTO attestations(etudiant, convention, message_contenu) VALUES(?, ?, ?)');
    $insertAttestationInBdd->execute(array($studentId, $conventionId, $attestationText));

    echo "L'attestation a bien été insérée dans la base de données";
}
