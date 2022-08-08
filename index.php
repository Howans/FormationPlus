<?php 
    require('actions/displayUsersInSelect.php');
    require('actions/getStudentConvention.php');
    require('actions/insertAttestationInBdd.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormationPlus</title>
</head>
<body>
    <form method="POST" action="">
        <select name="student">
            <?php foreach($listOfUsers as $user) { ?>
                <option value="<?php echo $user; ?>"><?php echo $user; ?></option>
            <?php } ?>
        </select>
        <br/>
        <br/>

        <input type="submit" value="Sélectionner l'étudiant" name="validate_student">
        <br/>
        <br/>

        <?php if(isset($_POST['validate_student']) AND !empty($_POST['student'])) { ?>
            <input type="text" placeholder="Nom convention" value="<?= $conventionName; ?>" disabled />
            <br/>
            <br/>
            <textarea rows="20" cols="90" name="attestation_text">Bonjour <?= $_POST['student']; ?>,
Vous avez suivi <?= $conventionNbHeur; ?> heure(s) de formation chez FormationPlus.
Pouvez-vous nous retourner ce mail avec la pièce jointe signée.

Cordialement,
FormationPlus
            </textarea>
            
            <br/><br/>
            <input type="submit" value="Insérer dans la base de données" name="validate_attestation" />
        <?php } ?>
    </form>
</body>
</html>