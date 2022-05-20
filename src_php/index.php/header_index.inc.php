<?php
    const titre1 = "Films, séries TV et bien plus en illimité.";
    const titre2 = "Où que vous soyez. Annulez à tout moment.";
    const btn1 = "S'identifier";
    const btn2 = "Commencer >";
    const text = "Prêt à regarder Netflix ? Saisissez votre adresse e-mail pour vous abonner ou réactiver votre abonnement.";
    const place = "Adresse e-mail";


    class Header {
        public $_logo = "./asset/Netflix-Logo.wine.svg";
        public $_header_class = "showcase";
        public $_ul_class = "showcase-top";
        public $_img_alt = "Netflix Logo";
        public $_lien_class = "btn btn-rounded";
        public $_section_class = "showcase-content";
        public $_form_class = "life";

        static $_lien = "#but2"; 
        static $_span_id = "mail_manquant";
    }

    $_new_head = new Header;


?>
<header class="<?= $_new_head->_header_class ?>">
     <nav>
         <ul class="<?= $_new_head->_ul_class ?>">
             <li><img src="<?= $_new_head->_logo ?>" alt="<?= $_new_head->_imh_alt ?>"></li><!-- whitespace
          --><li><a href="<?= Header::$_lien ?>" class="<?= $_new_head->_lien_class ?>"><?= btn1 ?></a></li>
         </ul>
     </nav>
     <section class="<?= $_new_head->_section_class ?>">
         <h1><?= titre1 ?></h1>
         <h2><?= titre2 ?></h2>
         <p><?= text ?></p>
         
         <form method="get" action="<?= Header::$_lien ?>" class="<?= $_new_head->_form_class ?>">

             <input type="email" name="email1" aria-labelledby="e-mail" class="mail" id="mail1" placeholder="<?= place ?>">
             <button id="but1" type="submit" class="btn btn-lg"><?= btn2 ?></button>
            
         </form>
         <span class="<?= Header::$_span_id ?>"></span>

     </section>
</header>
