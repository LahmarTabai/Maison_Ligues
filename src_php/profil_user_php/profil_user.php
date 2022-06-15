<?php
session_start();
try {
include_once('../../bdd_connect.php');

$_mail = $_SESSION['mail'];
$_firstname = $_SESSION['firstname'];




$_prof = $_bdd->prepare('SELECT `nom_client`, `prénom_client`, `age_client`, `password`, `city_client`, `country_client` FROM `client_ligue` WHERE `mail_client` = ?');
        $_prof->execute(array($_mail));
        $_res = $_prof->fetch();

        // var_dump($_res);


} catch(PDOException $e) {
    die('Erreur de BDD'.$e->getMessage());
} 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Modification</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/modif_profil.css">
</head>
<body>
    <header>
        <h1><img src="../../asset/MAMA.png" alt="Netflix Logo"></h1>
    </header>
    <main>
        <form action="profil_modify_user.php" method="post">

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?= $_res['nom_client']; ?>">

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?= $_res['prénom_client']; ?>">

            <label for="age">Age :</label>
            <input type="date" id="age" name="age" value="<?= $_res['age_client']; ?>">

            <label for="password">Password :</label>
            <input type="text" id="password" name="password" value="">

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" value="<?= $_res['city_client']; ?>">

            <label for="pays">Pays :</label>
            <input type="text" id="pays" name="pays" value="<?= $_res['country_client']; ?>">

            <button type="submit" id="enregist" name="enregistrer" value="Envoyer">Enregistrer</button>
        </form>
    </main>
   

</body>
</html>