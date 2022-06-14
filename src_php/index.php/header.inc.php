<?php

    const title = "Maison Ligues";
    class Index {
        public $_reset_css = "./css/reset.css";
        public $_css_index = "./css/style.css";

        static $_lang = ["fr", "en", "ar"];
        
    }

    $_new_css = new Index;
?>

<!DOCTYPE html>
<html lang="<?= Index::$_lang[0]?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title><?= title ?></title>
    <link rel="stylesheet" href="<?= $_new_css->_reset_css ?>">
    <link rel="stylesheet" href="<?= $_new_css->_css_index ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="./asset/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./asset/favicon/favicon-16x16.png">
    <link rel="manifest" href="./asset/favicon/site.webmanifest">
</head>