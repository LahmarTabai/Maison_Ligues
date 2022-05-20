<?php
$_response2 = $DB->query('SELECT * FROM `evenement` WHERE `id_evenement` > 29 ORDER BY `id_evenement` ASC');
?>


<?php foreach($_response2 as $_images):?> <!--itération avec la bdd -->
    <li 
            data-image="<?= strip_tags($_images->image_evenement) ?>" 
            data-title="<?= strip_tags($_images->nom_evenement) ?>" 
            data-description="<?= strip_tags($_images->presentation) ?>" 
            data-dates="<?= strip_tags($_images->date) ?>"
            data-id="src_php/panier/add_panier.php?id=<?= strip_tags($_images->id_evenement); ?>">
            
                <figure class="ham">
                    <img src="<?= strip_tags($_images->image_evenement) ?>" alt="<?= strip_tags($_images->nom_evenement) ?>">
                        <figcaption class="figma">
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                    Show
                            </h2>
                        </figcaption>                
                </figure>
</li>
<?php endforeach; ?>

<!--<a href="accueil.php?id=$_images["id_evenement"]?>">-->