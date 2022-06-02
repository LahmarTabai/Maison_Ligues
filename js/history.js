document.addEventListener("DOMContentLoaded", e => {

    /*----------------------- Desactivation du lien avec du Ajax -------------------------*/

    (function ($) {
        $('.delPanier').click(function (event) {
            event.preventDefault();
            $.get($(this).attr('href'), {}, function (data) {
                if (data.error == false) {
                    alert(data.message);
                    console.log(data.message);
                    location.href = "history.php";
                } else {
                    alert(data.message);
                    console.log(data.message);
                    location.href = "history.php";
                }
            }, 'json');
            return false;
        });
    })(jQuery);

    /*----------------------- Desactivation du lien avec du Ajax -------------------------*/
});