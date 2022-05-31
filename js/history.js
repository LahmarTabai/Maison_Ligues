document.addEventListener("DOMContentLoaded", e => {

    /*----------------------- Desactivation du lien avec du Ajax -------------------------*/
    console.log('okoqskodkqs');
    (function ($) {
        $('.delPanier').click(function (event) {
            event.preventDefault();
            $.get($(this).attr('href'), {}, function (data) {
                if (data.error == true) {
                    alert(data.message);
                    console.log(data.message);
                } else {
                    alert(data.message);
                    console.log(data.message);
                }
            }, 'json');
            return false;
        });
    })(jQuery);

    console.log('ok');
});