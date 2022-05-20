document.addEventListener("DOMContentLoaded", () => {

  /*-------------------- Partie Foire Aux Questions ----------------------- */

  let btn = document.querySelectorAll(".toggle");
  let res = document.querySelectorAll(".hidden");

  let icoferm = '<i class="fas fa-times fermer" aria-hidden="true"></i>';

  for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click", function (e) {

      res[i].classList.toggle("show");

      if (btn[i].innerHTML.match('<i class="fas fa-plus ouvrir" aria-hidden="true"></i>')) {
        btn[i].innerHTML = icoferm;
        for (let j = 0; j < i; j++) {
          if (j != i) {
            btn[j].innerHTML = '<i class="fas fa-plus ouvrir" aria-hidden="true"></i>';
            res[j].classList.remove("show");
          }
        }

        for (let k = btn.length; k > i; k--) {
          if (k != i) {
            btn[k].innerHTML = '<i class="fas fa-plus ouvrir" aria-hidden="true"></i>';
            res[k].classList.remove("show");
          }
        }
      } else if (btn[i].innerHTML.match('<i class="fas fa-times fermer" aria-hidden="true"></i>')) {
        btn[i].innerHTML = '<i class="fas fa-plus ouvrir" aria-hidden="true"></i>';
      }
    });
  };

  /*-------------------- Mail Validation input 1 ----------------------- */

  let mail_m = document.querySelectorAll(".mail_manquant");

  let mail_v = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

  let btnValid = [document.getElementById("but1"), document.getElementById("but2")];

  let btnValidclass = document.querySelectorAll(".mail");

  for (let i = 0; i < btnValid.length; i++) {
    btnValid[i].addEventListener("click", e => {
      if (mail_v.test(btnValidclass[i].value)) {
        mail_m[i].textContent = "";
        const user = {
          identifiant: btnValidclass[i].value
        };
        localStorage.setItem("User1", JSON.stringify(user));
      } else {
        //   e.preventDefault();
        mail_m[i].textContent = "E-Mail manquant ou invalide !";
        localStorage.clear();
      }
    });
  };
});