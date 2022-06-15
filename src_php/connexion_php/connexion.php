<?php
session_start();
    const titleForm = "Maison Ligues Login";
    class Form {
        public $_reset_css = "../../css/reset.css";
        public $_css_formulaire = "../../css/formulaire.css";
       

        static $_lang = ["fr", "en", "ar"];
        
    }

    $_new_css = new Form;
?>
<!DOCTYPE html>
<html lang="<?= Form::$_lang[0]?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title><?= titleForm ?></title>
    <link rel="stylesheet" href="<?= $_new_css->_reset_css ?>">
    <link rel="stylesheet" href="<?= $_new_css->_css_formulaire ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="../../asset/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../asset/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../asset/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../asset/favicon/site.webmanifest">
</head>
<body>
<header>
    <h1><img src="../../asset/MAMA.png" alt="Netflix Logo"></h1>
</header>    

<main>
        <fieldset>
            <legend>Sign In</legend>
            <form id="myForm" method="POST" action="login_user.php"> 
 
            <label for="mail">E-Mail</label>
            <input type="email" id="mail" name="mail" placeholder="Enter Email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>


        <ul class="sign">
            <li><button type="submit" name="valider">Sign In</button></li>
        </ul>


        <ul class="ted">
            <li><label class="check" for="check">Remember me</label></li> 
            <li><input type="checkbox" id="check"></li>
        </ul>

        <ul class="nar">
            <li><a href="#">Need Help ?</a></li>
            <li><P><a href="#"><i class="fab fa-facebook-square"></i> &nbsp;Login with Facebook</a></P></li>
            <li><p class="taf">This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#"> Learn more</a></p></li>
        </ul>
                
            </form>
        </fieldset>

    </main>


<footer>
        <p>Des questions ? Appelez le (+33) 07.50.02.74.45</p>
        <nav>
            <ul class="footer-cols">
                <li><a href="#">FAQ</a></li><!-- 
             --><li><a href="#">Relations Investisseurs</a></li><!-- 
             --><li><a href="#">Modes de lecture</a></li><!--
             --><li><a href="#">Mentions légales</a></li><!--
             --><li><a href="#">Seulement sur Netflix</a></li><!-- 
             --><li><a href="#">Centre d'aide</a></li><!--
             --><li><a href="#">Recrutement</a></li><!--
             --><li><a href="#">Conditions d'utilisation</a></li><!-- 
             --><li><a href="#">Nous contacter</a></li><!--
             --><li><a href="#">Compte</a></li><!--
             --><li><a href="#">Utiliser des cartes cadeaux</a></li><!-- 
             --><li><a href="#">Confidentialité</a></li><!-- 
             --><li><a href="#">Test de vitesse</a></li><!--
             --><li><a href="#">Presse</a></li><!--
             --><li><a href="#">Acheter des cartes cadeaux</a></li><!-- 
             --><li><a href="#">Préférences de cookies</a></li><!--
             --><li><a href="#">Informations légales</a></li>
            </ul>
        </nav>
        <p>Maison Ligue France</p>
</footer>

    <script src="./js/formulaire.js"></script>
</body>
</html>