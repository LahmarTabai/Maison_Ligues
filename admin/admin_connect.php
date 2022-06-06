<?php
session_start();
try {
    $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $_bdd = new PDO('mysql:host=localhost;
                    dbname=maisons', 
                    'root', '',
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
                    
                    
        
                   
    
                    if (isset($_POST['valider']) && isset($_POST['username']) && isset($_POST['password'])) 
                    {
                        $username = htmlspecialchars($_POST['username']);
                        $password = htmlspecialchars($_POST['password']);
                    
                        $users = $_bdd->prepare('SELECT username, password FROM `admin` WHERE username = ?');
                        $users->execute(array($username));

                        $data = $users->fetch();
                        $row = $users->rowCount();

                        if ($row == 1) 
                        {
                            if(filter_var($username, FILTER_VALIDATE_EMAIL))
                            {
                                if(password_verify($_POST['password'], $data[1]))
                                {
                                    $_SESSION['username'] = $username;
                                    header('Location: wellcome.php');
                                }
                                else {
                                        header('Location: admin.php?error=password');
                                }
                            } else 
                            {
                               header('Location: admin.php?error=email');
                            }
                        }else {
                            header('Location: admin.php?error=username');
                        }
                    }
                            
            
    } catch(PDOException $e) {
        die('Erreur de BDD'.$e->getMessage());
    }
    
    ?>