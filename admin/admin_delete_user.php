<?php
session_start();
try {
$_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$_bdd = new PDO('mysql:host=localhost;
                dbname=maisons', 
                'root', '',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));

                
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $recupUser = $_bdd->prepare('SELECT * FROM `client_ligue` WHERE id_client = ?');
    $recupUser->execute(array($id));
    if ($recupUser->rowCount() > 0) {
        
        // Delete user selection from table consulter :

        $deleteUserSelection = $_bdd->prepare('DELETE FROM `consulter` WHERE id_client = ?');
        $deleteUserSelection->execute(array($id));


        // Delete user from table users :

        $deleteUser = $_bdd->prepare('DELETE FROM `client_ligue` WHERE id_client = ?');
        $deleteUser->execute(array($id));

        header('Location: wellcome.php');
    }else {
        echo "aucun utilisateur n'a été trouvé";
    }
}else {
    echo"L'identifiant n'a pas été récupéré";
}         
               
} catch(PDOException $e) {
    die('Erreur de BDD'.$e->getMessage());
} 



