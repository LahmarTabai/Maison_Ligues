document.addEventListener("DOMContentLoaded", () => {

  /*-------------------- Recupération du mail ----------------------- */

  const local = JSON.parse(localStorage.getItem("User1"));
  let res = document.getElementById("mail");
  res.value = `${local.identifiant}`;

  const form = {
    name: document.getElementsByName("name")[0],
    first_name: document.getElementsByName("firstname")[0],
    mail: document.getElementsByName("mail")[0],
    city: document.getElementsByName("city")[0],
    country: document.getElementsByName("country")[0],
    btn_validation: document.querySelector("button"),
    warning: document.querySelector(".warning"),
    info: [],
    control() {
      if (this.first_name.value && this.name.value && this.mail.value && this.city.value && this.country.value) {

        form.info.push(this.first_name.value, this.name.value, this.mail.value, this.city.value, this.country.value);

        localStorage.clear();
        localStorage.setItem('User', JSON.stringify(form.info));

        form.warning.classList.remove("show-warning");
      } else {
        form.warning.classList.add("show-warning");
        form.warning.innerText = "Veillez Remplir tous les champs";
      }
    }
  };

  form.btn_validation.addEventListener("click", e => {

    form.control();
  });
});

// /*-------------------- Recupération du 1er mail ----------------------- */
// const local1 = JSON.parse(localStorage.getItem("user1"));

// let res1 = document.getElementById("mail");

// res1.value = `${local1.identifiant}`;

// /*-------------------- Recupération du 2em mail ----------------------- */
// const local2 = JSON.parse(localStorage.getItem("user2"));

// let res2 = document.getElementById("mail");

// res2.value = `${local2.identifiant}`;