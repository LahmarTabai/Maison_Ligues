<?php
session_start();
    include_once ("./src_php/connect_bdd.inc.php");
    $DB = new DB();
?>
<?php
include_once ("./src_php/panier/panier_class.php");
$panier = new panier();
?>
<?php
    const titleAcc = "Maison Ligues";   // Titre de la page
    class Acceuil {
        public $_reset_css = "./css/reset.css";
        public $_css_acceuil = "./css/acceuil.css";
       

        static $_lang = ["fr", "en", "ar"];
        
    }

    $_acc = new Acceuil;
?>

<!DOCTYPE html>
<html lang="<?= Acceuil::$_lang[0]?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title><?= titleAcc ?></title>
    <link rel="stylesheet" href="<?= $_acc->_reset_css ?>">
    <link rel="stylesheet" href="<?= $_acc->_css_acceuil ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="./asset/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./asset/favicon/favicon-16x16.png">
    <link rel="manifest" href="./asset/favicon/site.webmanifest">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>