<?php
    const titreM1 = "Inscrivez vous des cet été.";
    const titreM2 = "Le Site de MDL est accessible depuis votre Tel.";
    const titreM3 = "Où que vous soyez.";
    const titreM4 = "les enfants ont aussi le droit à y participer.";
    const titreM5 = "Foire aux questions";
    const titreM6 = "Prêt à s'inscrire à des évenement ? Saisissez votre adresse e-mail pour vous abonner.";


    const btnM1 = "Commencer >";

    const textM1 = "Sur le site MDL plus de choix, plus de Sport et bien plus encore...";
    const textM2 = "Enregistrez vos évenement préférés et ayez toujours quelque chose à pratiquer.";
    const textM3 = "Inscrivez vous en accès illimité sur votre TV, smartphone, tablette et ordinateur, tout compris.";
    const textM4 = "Les enfants découvrent de nouvelles aventures et retrouvent leurs sports préférés dans un espace bien à eux.";

    const placeM = "Adresse e-mail";


    class Main {
        public $_button = '<button  class="toggle" aria-label="voir le details"><i class="fas fa-plus ouvrir" aria-hidden="true"></i></button>';
      

        public $_section_class = "showcase-content";
        public $_form_class = "life";
        static $_lien = "formulaire.php"; 
        static $_span_id2 = "mail_manquant";
    }

    $_main = new Main;


?>
<main>

        <div class="style-cards" role="doc-cover" aria-labelledby="presentation">

            <figure class="card-0" id="presentation">
                <figcaption class="desc">
                    <h3><?= titreM1 ?></h3>
                    <p><?= textM1 ?></p>
                </figcaption>
                <div>
                    <img src="./asset/tv.png" alt="Netflix TV">
                    <video src="./asset/tv-video.m4v" class="video-1" autoplay="" playsinline="" loop=""></video>
                </div>
                
            </figure>

            <figure class="card-1">
                <img src="./asset/mobile-0819.jpg" alt="Netflix Mobile">
                <figcaption class="desc">
                    <h3><?= titreM2 ?></h3>
                    <p><?= textM2 ?></p>
                </figcaption>
            </figure>

            <figure class="card-2">
                <figcaption class="desc">
                    <h3><?= titreM3 ?></h3>
                    <p><?= textM3 ?></p>
                </figcaption>
                <div>
                    <img src="./asset/device-pile.png" alt="Netflix Tv Apple">
                    <video src="./asset/enfant.m4v" class="video-2" autoplay="" playsinline="" loop=""></video>
                </div>
            </figure>

            <figure class="card-3">
                <img src="./asset/jeune.png" alt="Netflix Jeunes">
                <figcaption class="desc">
                    <h3><?= titreM4 ?></h3>
                    <p><?= textM4 ?></p>
                </figcaption>
            </figure>

        </div>

        <div class="faq" role="definition" aria-labelledby="def">
            <section class="lastsec" id="def">
                <h2><?= titreM5 ?></h2>
                <ul class="questions">
                    <li>MDL, qu'est-ce que c'est ? <?= $_main->_button?></li>
                    <li class="hidden">Netflix est un service de streaming qui propose une vaste sélection de séries TV, films, animes, documentaires et autres programmes primés sur des milliers d'appareils connectés à Internet.
                        <br><br>
                        Regardez tout ce que vous voulez, quand vous voulez, sans publicité et à un tarif mensuel très attractif. Découvrez de nouveaux films et séries TV chaque semaine, il y en a pour tous les goûts !</li>
                    <li>Combien coûte MDL Inscription ? <?= $_main->_button?></li>
                    <li class="hidden">Regardez Netflix sur votre smartphone, tablette, Smart TV, ordinateur ou appareil de streaming, le tout pour un tarif mensuel fixe. Les forfaits vont de 8,99 € à 17,99 € par mois. Pas de contrat ni de frais supplémentaires.</li>
                    <li>Où puis-je m'inscrire ?  <?= $_main->_button?></li>
                    <li class="hidden">Netflix, c'est où vous voulez, quand vous voulez. Connectez-vous à votre compte pour regarder Netflix en ligne sur netflix.com depuis votre ordinateur ou tout appareil connecté à Internet avec l'application Netflix, comme les Smart TV, smartphones, tablettes, lecteurs de streaming et consoles de jeu.
                        <br><br>
                        Vous pouvez aussi télécharger vos séries préférées avec l'application iOS, Android ou Windows 10. Téléchargez des titres pour les regarder sur votre appareil mobile, même sans connexion Internet. Emportez Netflix partout avec vous.</li>
                    <li>Puis-je annuler mon inscription ?  <?= $_main->_button?></li>
                    <li class="hidden">Netflix offre une grande souplesse. Pas de contrat compliqué. Sans engagement. Deux clics suffisent pour annuler votre compte en ligne. Pas de frais d'annulation : ouvrez ou fermez votre compte à tout moment.</li>
                    <li>Que puis-je choisir sur MDL ? <?= $_main->_button?></li>
                    <li class="hidden">Netflix propose un vaste catalogue comprenant notamment des longs métrages, des documentaires, des séries TV, des animes et des programmes originaux Netflix primés. Regardez Netflix à volonté, quand vous le voulez.</li>
                    <li>MDL est adapté aux enfants ? <?= $_main->_button?></li>
                    <li class="hidden">Netflix Jeunesse est inclus dans votre abonnement et offre un meilleur contrôle aux parents, ainsi qu'un espace dédié aux enfants, avec des films et des séries destinés à toute la famille.
                        <br><br>
                        Les profils Enfants comportent des fonctionnalités de contrôle parental avec code PIN permettant de modifier la catégorie d'âge des contenus que vos enfants peuvent regarder et de bloquer des titres spécifiques.</li>
                </ul>
            </section>

            <section>
                <h2 class="terr"><?= titreM6 ?></h2>
                <nav class="<?= $_main->_section_class ?>">
                    <form method="get" action="<?= Main::$_lien ?>" class="<?= $_main->_form_class ?>">
                        <input type="email" aria-labelledby="e-mail" name="email2" class="mail" id="mail2" placeholder="<?= placeM ?>">
                        <button id="but2" type="submit" class="btn btn-lg"><?= btnM1 ?></button>
                    </form>
                    <span class="<?= Main::$_span_id2 ?>"></span>
                </nav>
            </section>
        </div>
    </main>