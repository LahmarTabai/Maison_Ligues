<?php   
    const p1_footer = "Des questions ? Appelez le (+33) 0805-543-063";
    const p2_footer = "Netflix France";

    const class_footer = "footer-cols";

    class Footer {
        static $_lien = [
            "FAQ",
            "Relations Investisseurs",
            "Modes de lecture",
            "Mentions légales",
            "Seulement sur Netflix",
            "Centre d'aide",
            "Recrutement",
            "Conditions d'utilisation",
            "Nous contacter",
            "Compte",
            "Utiliser des cartes cadeaux",
            "Confidentialité",
            "Test de vitesse",
            "Presse",
            "Acheter des cartes cadeaux",
            "Préférences de cookies",
            "Informations légales"
        ];
    }
?>

<footer>
        <p><?= p1_footer ?></p>
        <nav>
            <ul class="<?= class_footer ?>">
                <li><a href="#"><?= Footer::$_lien[0] ?></a></li><!-- 
             --><li><a href="#"><?= Footer::$_lien[1] ?></a></li><!-- 
             --><li><a href="#"><?= Footer::$_lien[2] ?></a></li><!--
             --><li><a href="#"><?= Footer::$_lien[3] ?></a></li><!--
             --><li><a href="#"><?= Footer::$_lien[4] ?></a></li><!-- 
             --><li><a href="#"><?= Footer::$_lien[5] ?></a></li><!--
             --><li><a href="#"><?= Footer::$_lien[6] ?></a></li><!--
             --><li><a href="#"><?= Footer::$_lien[7] ?></a></li><!-- 
             --><li><a href="#"><?= Footer::$_lien[8] ?></a></li><!--
             --><li><a href="#"><?= Footer::$_lien[9] ?></a></li><!--
             --><li><a href="#"><?= Footer::$_lien[10] ?></a></li><!-- 
             --><li><a href="#"><?= Footer::$_lien[11] ?></a></li><!-- 
             --><li><a href="#"><?= Footer::$_lien[12] ?></a></li><!--
             --><li><a href="#"><?= Footer::$_lien[13] ?></a></li><!--
             --><li><a href="#"><?= Footer::$_lien[14] ?></a></li><!-- 
             --><li><a href="#"><?= Footer::$_lien[15] ?></a></li><!--
             --><li><a href="#"><?= Footer::$_lien[16] ?></a></li>
            </ul>
        </nav>
        <p><?= p2_footer ?></p>
</footer>