document.addEventListener("DOMContentLoaded", e => {
    /*----------------------- Desactivation du lien avec du Ajax -------------------------*/

    (function ($) {
        $('.addPanier').click(function (event) {
            event.preventDefault();
            $.get($(this).attr('href'), {}, function (data) {
                if (data.error == false) {
                    alert(data.message);
                } else {
                    alert(data.message);
                }
            }, 'json');
            return false;
        });
    })(jQuery);

    /*----------------------- Commancer -------------------------*/

    e.preventDefault();
    let btn = document.querySelectorAll(".toggle");
    let body = document.querySelector('body');
    let icoferm = '<i class="fas fa-times fermer" aria-hidden="true"></i>';
    let nav = document.querySelector('.gauche');

    for (let i = 0; i < btn.length; i++) {
        btn[i].addEventListener("click", e => {
            if (btn[i].innerHTML.match('<i class="fas fa-bars ouvrir" aria-hidden="true"></i>')) {
                btn[i].innerHTML = icoferm;
                nav.style.backgroundColor = "rgba(0, 0, 0, 0.3)";
            } else if (btn[i].innerHTML.match('<i class="fas fa-times fermer" aria-hidden="true"></i>')) {
                btn[i].innerHTML = '<i class="fas fa-bars ouvrir" aria-hidden="true"></i>';
                nav.style.background = "";
            }
            body.classList.toggle("open");
        });
    };

    /*----------------------- Partie Identifiant -------------------------*/

    // const local = JSON.parse(localStorage.getItem("user"));
    // let tark = local.identifiant;
    // let ident = tark.substring(0, tark.indexOf('@'));

    // let res = document.getElementById("compte");

    /* tempo  */
    // const local = JSON.parse(localStorage.getItem("user"));
    // let ident = local[0];

    // let res = document.getElementById("compte");

    // res.innerHTML = '<a href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; ' + `${ident}` + "</a>";

    /*----------------------- Partie Modale 1  -------------------------*/

    let el, modal, closed, open_modal, closed_all, modale, close_any_where1, close_any_where2;

    el = document.querySelectorAll(".list1 li");
    modal = document.querySelector(".parent-modale");
    closed = document.querySelector(".modale button");
    closed_all = document.querySelector(".modale img");
    modale = document.querySelector(".modale");

    close_any_where1 = document.getElementById("any_where1");
    close_any_where2 = document.getElementById("any_where2");

    /* property elements */

    open_modal = function () {
        /* les variables */
        let image = this.dataset.image;
        let title = this.dataset.title;
        let desc = this.dataset.description;
        let dates = this.dataset.dates;
        let lien = this.dataset.id;

        modal.classList.add("modale-active"); /* ajouter la classe active */
        /* sélectionner les sélecteurs html*/
        document.querySelector(".modale img").setAttribute("src", image);
        document.querySelector(".modale .desc h3").innerText = title;
        document.querySelector(".modale .desc p").innerHTML = `<strong>Déscription : </strong>${desc}`;
        document.querySelector(".modale .desc time").innerText = `Annee ${dates}`;
        document.querySelector(".modale .desc time").setAttribute("datetime", dates);
        document.querySelector(".modale .add").setAttribute("href", lien);
    };

    for (rows of el) {
        rows.addEventListener("click", open_modal);
    }
    closed.addEventListener("click", () => {
        modal.classList.remove("modale-active");
    });
    closed_all.addEventListener("click", () => {
        modal.classList.remove("modale-active");
    });
    close_any_where1.addEventListener("click", () => {
        close_any_where1.classList.remove("modale-active");
    });

    /*----------------------- Partie Modale 2  -------------------------*/

    let el2, modal2, closed2, open_modal2, closed_all2, modale2;

    el2 = document.querySelectorAll(".list2 li");
    modal2 = document.querySelector(".parent-modale2");
    closed2 = document.querySelector(".modale2 button");
    //  closed_all2 = document.querySelector(".modale2 img");
    modale2 = document.querySelector(".modale2");

    /* property elements */

    open_modal2 = function () {
        /* les variables */
        let video = this.dataset.video;
        let title = this.dataset.title;
        let desc = this.dataset.description;
        let dates = this.dataset.dates;

        modal2.classList.add("modale-active2"); /* ajouter la classe active */
        /* sélectionner les sélecteurs html*/
        document.querySelector(".modale2 iframe").setAttribute("src", video);
        document.querySelector(".modale2 .desc h3").innerText = title;
        document.querySelector(".modale2 .desc p").innerHTML = `<strong>Déscription : </strong>${desc}`;
        document.querySelector(".modale2 .desc time").innerText = `Annee ${dates}`;
        document.querySelector(".modale2 .desc time").setAttribute("datetime", dates);
    };

    for (rows of el2) {
        rows.addEventListener("click", open_modal2);
    }
    closed2.addEventListener("click", () => {
        modal2.classList.remove("modale-active2");
    });
    close_any_where2.addEventListener("click", () => {
        close_any_where2.classList.remove("modale-active2");
    });
    //  closed_all2.addEventListener("click", () => {
    //      modal2.classList.remove("modale-active2");
    //  });

});