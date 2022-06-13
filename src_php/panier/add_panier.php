<?php 
session_start();
// include_once('../bdd_connect.php');
try {
$_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$_bdd = new PDO('mysql:host=localhost;
                dbname=maisons', 
                'root', '',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
      
                // récupération du l'id du mail :

        $_mail_user  = $_SESSION['mail'];

        $_id = $_bdd->query("SELECT `id_client` FROM `client_ligue` WHERE `mail_client` = '{$_mail_user}'");
        
        $admin = $_id->fetch();
        $id_user = (int) $admin[0]; // ==> c'est l'id recupéré du mail de la base de donnée
      

        

                // récupération du l'id du sport choisis :

        $_id_sport = (int) $_GET['id'];
 

                // Verification si le sport est déjas choisis :

        $_verif = $_bdd->query("SELECT `id_evenement` FROM `consulter` WHERE `id_evenement` = '{$_id_sport}' AND `id_client` = '{$id_user}'");
        $_verif = $_verif->fetch();
        $_even_verif = (int) $_verif[0];
       

            
                // verifier si le sport existe déjas :
        $json = array('error' => true);
        if ($_even_verif == 0) {

                // insertion :

        $_req = $_bdd->prepare('INSERT INTO `consulter` (id_client, id_evenement) VALUES (?,?)');
        $_req->execute(
                array(
                    htmlentities($id_user),
                    htmlentities($_id_sport))
                );  
                $json['error'] = false;
                $json['message'] = "Ce Sport a bien été choisi avec succès ! ";
        }else {
                $json['message'] = "Ce sport a déjas étais choisis ?! ";
            }

            echo json_encode($json);
                 
} catch(PDOException $e) {
    die('Erreur de BDD'.$e->getMessage());
} 
?>



