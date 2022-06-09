<?php
session_start(); 
 try {
 $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 $_bdd = new PDO('mysql:host=172.190.1.52;
                dbname=tlahmar', 
                'tlahmar', 'NafissaNafissa1@',
                 array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));

                

                 if(isset($_GET['id'])) {
                    $id = (int) $_GET['id'];
                    $id_client = $_SESSION['id_client'];

                    $del = $_bdd->prepare('DELETE FROM `consulter` WHERE `consulter`.id_client = ? AND `consulter`.id_evenement = ?');
                    $del->execute(array($id_client, $id));

                    header('Location: history.php');

        
                
                }else {
                         echo"L'identifiant n'a pas été récupéré";
                     }        
     















       
                 // récupération du l'id du mail :
 
        //  $_mail_user  = $_SESSION['mail'];
        //  var_dump($_GET['id']);
 
        //  $_id = $_bdd->query("SELECT `id_client` FROM `client_ligue` WHERE `mail_client` = '{$_mail_user}'");
         
        //  $admin = $_id->fetch();
        
        //  $id_user = (int) $admin[0]; // ==> c'est l'id recupéré du mail de la base de donnée
       
 
        //          // récupération du l'id du sport choisis :
 
        //  $_id_sport = (int) $_GET['id'];

        //  // Vérifier si l'history est vide ou pas :

        // $vid = $_bdd->prepare('SELECT * FROM `consulter` WHERE `consulter`.id_client = ?');
        // $vid->execute(array($id_user));

        // var_dump($vid->rowCount());

  
        // $json = array('error' => true);

        // if ($vid->rowCount() > 0) {

        //     $del = $_bdd->prepare('DELETE FROM `consulter` WHERE `consulter`.id_client = ? AND `consulter`.id_evenement = ?');
        //     $del->execute(array($id_user, $_id_sport));

        //     $json['error'] = false;
        //     $json['message'] = "Ce Sport a bien été supprimé ! ";
            

        //  }else {
        //     $json['message'] = "Votre History est vide ! "; 
        //     }
 
        //      echo json_encode($json);
                  
 } catch(PDOException $e) {
     die('Erreur de BDD'.$e->getMessage());
 } 
 ?>









