<?php
    const js = "./js/app.js";
?>

<body>

    <?php
        include_once ("./src_php/index.php/header_index.inc.php");
    ?>

    <?php
        include_once ("./src_php/index.php/main_index.inc.php");
    ?>

    
    <?php
        include_once ("./src_php/footer.inc.php");
    ?>

    <script src="<?= js ?>"></script>
</body>
</html>