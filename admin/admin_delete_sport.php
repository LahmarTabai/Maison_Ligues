<?php
session_start();
try {
$_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$_bdd = new PDO('mysql:host=localhost;
                dbname=maisons', 
                'root', '',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));


                


                if(isset($_GET['id']) && isset($_GET['idev'])) {
                    $id = (int) $_GET['id'];
                    $idev = (int) $_GET['idev'];

                    $del = $_bdd->prepare('DELETE FROM `consulter` WHERE `consulter`.id_client = ? AND `consulter`.id_evenement = ?');
                    $del->execute(array($id, $idev));

                    header('Location: wellcome.php');

        
                
                }else {
                         echo"L'identifiant n'a pas été récupéré";
                     }        
     
               
} catch(PDOException $e) {
    die('Erreur de BDD'.$e->getMessage());
} 



