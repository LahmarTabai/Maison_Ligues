<body>
<?php
    include_once ("./src_php/accueil.php/header_acc.inc.php");
    var_dump($_SESSION['mail']);
?>

    <main>
        <div class="films-et-series" role="cell" aria-labelledby="imges">
        <section class="section tendances" id="imges">
            <h2 id="series">Sports Individuels</h2>
            <ul id="narco" class="list1">

<?php
    include_once ("./src_php/connect_first_section.inc.php");
?>
            </ul>

        </section>

        <section class="section tendances">
            <h2 id="films">Sports Collectifs</h2>
            <ul class="list1">
<?php
    include_once ("./src_php/connect_second_section.inc.php");
?>
            </ul>

        </section>

        <section id="morta" class="section tendances">
            <h2 id="programmes">Le top 7 des records du monde les plus impressionnants</h2>
            <ul class="list2">
<?php
    include_once ("./src_php/connect_third_section.inc.php");
?>
            </ul>

        </section>


        
    </div>
    </main>

<?php
    include_once ("./src_php/footer.inc.php");
?>

<!-- modale pour les sections 1 et 2 -->
<div id="any_where1" class="parent-modale" role="dialog">
        <figure class="modale">
            <button aria-label="closed">
                <span class="material-icons">clear</span>
            </button>
            <img src="https://via.placeholder.com/500" alt="picture">
            <figcaption class="desc">
                <h3>title</h3>
                <p>
                    Years :
                </p>
                <time>Years : </time>
                
                <!-- <form class="pan" method="post" action="accueil.php">
                    <p class="lay" name="select">select</p>
                    <button id="panni" type="submit">Add To Basket</button>
                </form> -->
            </figcaption>
            <a class="add addPanier">add</a> 
        </figure>
    </div>

    <!-- modale pour la section 3 -->
<div id="any_where2" class="parent-modale2" role="dialog">
        <figure class="modale2">
            <button aria-label="closed">
                <span class="material-icons">clear</span>
            </button>
            <!-- <img src="https://via.placeholder.com/500" alt="picture"> -->
            <div class="container" role="article">
                <iframe class="responsive-iframe" allow src="https://via.placeholder.com/500" frameborder="0" allowfullscreen="true">
                    
                </iframe>
            </div>
            <figcaption class="desc">
                <h3>title</h3>
                <p>
                    Years :
                </p>
                <time>Years : </time>
            </figcaption>
        </figure>
    </div>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="./js/accueil.js"></script>
</body>

<?php
    include_once ("./src_php/formulaire_php/users_add_bdd.php");
?>





