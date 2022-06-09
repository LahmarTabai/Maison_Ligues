<?php 
try {
$_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$_bdd1 = new PDO('mysql:host=172.190.1.52;
                dbname=tlahmar', 
                'tlahmar', 'NafissaNafissa1@',
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
    

                // Verifier si le mail existe ou pas
                $_id = $_POST['select'];


                
                      /*INSERT INTO `consulter` (id_client, id_evenement) VALUES (1, 1); */
                            $_req1 = $_bdd1->prepare('INSERT INTO `consulter` (id_client, id_evenement) VALUES (?,?)');
                            $_req1->execute(
                                array(
                                    htmlentities($_mail),
                                    htmlentities($_id))
                            );  
                        
                    
                



                
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
    <title>Document</title>
    
</head>
<body>
    
</body>
</html>


