<?php
session_start();
try {
include_once('../../bdd_connect.php');

$_mail = $_SESSION['mail'];
$_firstname = $_SESSION['firstname'];

        
        if (isset($_POST['enregistrer']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['password']) && isset($_POST['ville']) && isset($_POST['pays'])) {
            $_nom = $_POST['nom'];
            $_prenom = $_POST['prenom'];
            $_age = $_POST['age'];
            $_password = $_POST['password'];
            $_ville = $_POST['ville'];
            $_pays = $_POST['pays'];


        
            if(!$_nom  || !$_prenom  || !$_age || !$_password || !$_ville || !$_pays) {
                header("LOCATION: profil_user.php?error=formulaire_incomplete");
            }
            else {
                    $_password_hashed = password_hash($_password, PASSWORD_DEFAULT);

                    $_prof = $_bdd->prepare('UPDATE `client_ligue` SET `nom_client` = ?, `prénom_client` = ?, `age_client` = ?, `password` = ?, `city_client` = ?, `country_client` = ? WHERE `mail_client` = ?');
                    $_prof->execute(array(
                        htmlentities($_nom), 
                        htmlentities($_prenom), 
                        htmlentities($_age), 
                        htmlentities($_password_hashed), 
                        htmlentities($_ville), 
                        htmlentities($_pays), 
                        htmlentities($_mail)));

                    $_prof->closeCursor(); // Termine le traitement de la requête : PDOStatement::closeCursor() libère la connexion au serveur, permettant ainsi à d'autres requêtes SQL d'être exécutées, mais laisse la requête dans un état lui permettant d'être de nouveau exécutée.
                    header('Location: profil_user.php?success=modif_profil');
                    
        
                   
                }
        
    }else {
        header("LOCATION: profil_user.php?error=formulaire_incomplete");

    }

} catch(PDOException $e) {
die('Erreur de BDD'.$e->getMessage());
}

?>