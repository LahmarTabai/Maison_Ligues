<?php
    const js_form = "./js/formulaire.js";
?>
<body>
<?php
    include_once ("./src_php/formulaire_php/header_form.inc.php");
?>
    
<?php
    include_once ("./src_php/formulaire_php/main_form.inc.php");
?>

<?php
    include_once ("./src_php/footer.inc.php");
?>


    <script src="<?= js_form ?>"></script>
</body>
</html>