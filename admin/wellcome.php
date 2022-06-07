<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('Location: admin.php');
}
?>
<?php 
try {
$_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$_bdd = new PDO('mysql:host=localhost;
                dbname=maisons', 
                'root', '',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));

                
                $_response1 = $_bdd->query('SELECT nom_client, prénom_client, mail_client, id_client 
                                            FROM `client_ligue` ORDER BY id_client ASC');
                
                $_response2 = $_bdd->query('SELECT DISTINCT CL.mail_client, E.nom_evenement, E.id_evenement, C.id_client, C.date_consultation 
                                            FROM `client_ligue` AS CL 
                                            INNER JOIN `consulter` AS C ON (CL.id_client = C.id_client) 
                                            INNER JOIN `evenement` AS E ON (E.id_evenement = C.id_evenement) 
                                            ORDER BY C.date_consultation DESC');





        // $_response = $_bdd->query("SELECT CL.prénom_client, E.nom_evenement, C.date_consultation, E.image_evenement, E.id_evenement, C.id_client 
        //                             FROM `client_ligue` AS CL 
        //                             INNER JOIN `consulter` AS C ON (CL.id_client = C.id_client) 
        //                             INNER JOIN `evenement` AS E ON (E.id_evenement = C.id_evenement) 
        //                             WHERE CL.mail_client = '{$_mail_user}' ORDER BY C.date_consultation DESC");


       
                
               
} catch(PDOException $e) {
    die('Erreur de BDD'.$e->getMessage());
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/admin_wellcome.css">
</head>
<body>
    <header>
        <h1>Wellcome Tabai <a href="admin_logout.php"><i id="terr" class="fa fa-sign-out" aria-hidden="true"></i></a></h1>
        
    </header>
    <main>
        <section>
            <h2>Listes des utilisateurs</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>E-Mail</th>
        <th>Action</th>
    <tr>
<?php foreach($_response1 as $_images):?> <!--itération avec la bdd -->
<tr>
    <td><?= strip_tags($_images['nom_client']) ?></td>
    <td><?= strip_tags($_images['prénom_client']) ?></td>
    <td><?= strip_tags($_images['mail_client']) ?></td>
    <td><a href="admin_delete_user.php?id=<?= $_images['id_client'] ?>">Supprimer</a></td>
</tr>
<?php endforeach; ?>
</table>
</section>

<section>
            <h2>Historiques choisis </h2>
<table>
    <tr>
        <th>E-Mail</th>
        <th>Sports Choisis</th>
        <th>Date</th>
        <th>Action</th>
    <tr>
<?php foreach($_response2 as $_images):?> <!--itération avec la bdd -->
<tr>
    <td><?= strip_tags($_images['mail_client']) ?></td>
    <td><?= strip_tags($_images['nom_evenement']) ?></td>
    <td><?= strip_tags($_images['date_consultation']) ?></td>
    <td><a href="admin_delete_sport.php?id=<?= $_images['id_client'] ?>&idev=<?= $_images['id_evenement']?>">Supprimer</a></td>
</tr>
<?php endforeach; ?>
</table>
</section>




    </main>
    <footer>
        <p>&copy; - 2022 - Lahmar Tabai</p>
    </footer>    
</body>
</html>



  
<!--itération avec la bdd -->

 

