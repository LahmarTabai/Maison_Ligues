<?php
$_response3 = $DB->query('SELECT * FROM `records` ORDER BY `id_record` ASC');
?>

<?php foreach($_response3 as $_images):?> <!--itération avec la bdd -->
    <li 
        data-video="<?= strip_tags($_images->video_record) ?>" 
        data-title="<?= strip_tags($_images->nom_record) ?>" 
        data-description="<?= strip_tags($_images->presentation_record) ?>" 
        data-dates="<?= strip_tags($_images->date_record) ?>">
            <figure class="ham">
                <img src="<?= strip_tags($_images->image_record) ?>" alt="<?= strip_tags($_images->nom_record) ?>">
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
