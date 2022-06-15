<?php
session_start();
include_once('../../bdd_connect.php');
try {
 if (isset($_POST['valider']) && isset($_POST['mail']) && isset($_POST['password'])) 
 {
     $username = htmlspecialchars($_POST['mail']);
     $password = htmlspecialchars($_POST['password']);
 
     $users = $_bdd->prepare('SELECT mail_client, password FROM `client_ligue` WHERE mail_client = ?');
     $users->execute(array($username));

     $data = $users->fetch();
     $row = $users->rowCount();

     if ($row == 1) 
     {
         if(filter_var($username, FILTER_VALIDATE_EMAIL))
         {
             if(password_verify($_POST['password'], $data[1]))
             {
                $_SESSION['mail'] = $username;
                //  $_SESSION['username'] = $username;
                header("LOCATION: ../../accueil.php");
             }
             else {
                     header('Location: connexion.php?error=password');
             }
         } else 
         {
            header('Location: connexion.php?error=email');
         }
     }else {
         header('Location: connexion.php?error=username');
     }
 }
         

} catch(PDOException $e) {
die('Erreur de BDD'.$e->getMessage());
}
?>