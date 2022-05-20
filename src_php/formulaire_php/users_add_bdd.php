<?php
try {
$_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$_bdd = new PDO('mysql:host=localhost;
                dbname=maisons', 
                'root', '',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
    
                // Verifier si le mail existe ou pas
    
                $users = $_bdd->prepare('SELECT * FROM `client_ligue` WHERE mail_client = ?');
                $users->execute(array($_POST['mail']));



                if ($users->rowCount() == 0) {

                    // insertion des données dans la BD
                    
                    if (isset($_POST['valider']) || isset($_POST['name']) || isset($_POST['firstname']) || isset($_POST['birthdate']) || isset($_POST['mail']) || isset($_POST['city']) || isset($_POST['country'])) {
                        $_name = $_POST['name'];
                        $_firstname = $_POST['firstname'];
                        $_birthdate = $_POST['birthdate'];
                        $_mail = $_POST['mail'];
                        $_city = $_POST['city'];
                        $_country = $_POST['country'];
                    
                        if(!$_name || !$_firstname || !$_birthdate || !$_mail || !$_city || !$_country) {
                            print "<p class=\"warning\"> champs vide veillez remplir</p>";
                        }
                        else {
                            $_req = $_bdd->prepare('INSERT INTO `client_ligue` (nom_client, prénom_client, age_client, mail_client, city_client, country_client) VALUES (?,?,?,?,?,?)');
                            $_req->execute(
                                array(htmlentities($_name),
                                    htmlentities($_firstname),
                                    htmlentities($_birthdate),
                                    htmlentities($_mail),
                                    htmlentities($_city),
                                    htmlentities($_country))
                            );
                            $_SESSION['mail'] = $_POST['mail'];
                            var_dump($_SESSION['mail']);
                        }
                    }
                }else {
                    // header("LOCATION: formulaire.php?");
                    echo "Cet Utilisateur existe déjas";

                }



                
} catch(PDOException $e) {
    die('Erreur de BDD'.$e->getMessage());
}

?>


