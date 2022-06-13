<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My History</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/history.css">
</head>
<?php 
try {
$_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$_bdd = new PDO('mysql:host=localhost;
                dbname=maisons', 
                'root', '',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
      
                // récupération du mail :

        $_mail_user  = $_SESSION['mail'];

        $_response = $_bdd->query("SELECT CL.prénom_client, E.nom_evenement, C.date_consultation, E.image_evenement, E.id_evenement, C.id_client 
                                    FROM `client_ligue` AS CL 
                                    INNER JOIN `consulter` AS C ON (CL.id_client = C.id_client) 
                                    INNER JOIN `evenement` AS E ON (E.id_evenement = C.id_evenement) 
                                    WHERE CL.mail_client = '{$_mail_user}' ORDER BY C.date_consultation DESC");
        
        // recupération de l'id du client et le sauvegarder dans une variable de session :

        $res = $_bdd->query("SELECT `id_client` FROM `client_ligue` WHERE `mail_client` = '{$_mail_user}'");

        $test = $res->fetch();
        $_elf = (int) $test[0];
        

        $_SESSION['id_client'] = $_elf;
        


        $number = $_response->rowCount();
                
               
} catch(PDOException $e) {
    die('Erreur de BDD'.$e->getMessage());
} 
?>
<body>

    <header>
        <h1><code>You have <?= $number ?> events in your history</code> </h1>
    </header>

    <main>
<!--itération avec la bdd -->
<ul>
<?php foreach($_response as $_images):?> 
    <li>
                <figure>
                    <img src="<?= strip_tags($_images['image_evenement']) ?>" alt="<?= strip_tags($_images['nom_evenement']) ?>">
                        <figcaption>
                            <h2><?= strip_tags($_images['nom_evenement']) ?></h2>
                            <a class="delPanier" href="Delete_history.php?id=<?= strip_tags($_images['id_evenement'])?>">Annuler</a>
                        </figcaption>                
                </figure>
</li>
<?php endforeach; ?>
</ul>
    </main>
    
    <footer>

    </footer>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="./js/history.js"></script>
</body>
</html>

