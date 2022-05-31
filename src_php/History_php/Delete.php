<?php 
 session_start();
 try {
 $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
 $_bdd = new PDO('mysql:host=localhost;
                 dbname=maisons', 
                 'root', '',
                 array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
       
                 // récupération du l'id du mail :
 
         $_mail_user  = $_SESSION['mail'];
         var_dump($_GET['id']);
 
         $_id = $_bdd->query("SELECT `id_client` FROM `client_ligue` WHERE `mail_client` = '{$_mail_user}'");
         
         $admin = $_id->fetch();
        
         $id_user = (int) $admin[0]; // ==> c'est l'id recupéré du mail de la base de donnée
       
 
                 // récupération du l'id du sport choisis :
 
         $_id_sport = (int) $_GET['id'];

         // Vérifier si l'history est vide ou pas :

        

        $vid = $_bdd->prepare('SELECT * FROM `consulter` WHERE `consulter`.id_client = ?');
        $vid->execute(array($id_user));
  
        $json = array('error' => false);
        if ($vid->rowCount() == 0) {

            $json['message'] = "Votre History est vide ! ";

         }else {
            $json['error'] = false;
            $_req = $_bdd->query("DELETE FROM `consulter` WHERE `consulter`.`id_client` = '{$id_user}' 
                                 AND `consulter`.`id_evenement` = '{$_id_sport}' ");
            $json['message'] = "Ce Sport a bien été supprimé ! ";     
            }
 
             echo json_encode($json);
                  
 } catch(PDOException $e) {
     die('Erreur de BDD'.$e->getMessage());
 } 
 ?>
 
 









?>