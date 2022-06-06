document.addEventListener("DOMContentLoaded", e => {
    // cacher et afficher mot de passe:
    const showPassword = document.getElementById("eye");
    const password = document.getElementById("password-field");

    showPassword.addEventListener("click", e => {
        if (password.type === "text") {
            document.getElementById("password-field").setAttribute("type", "password");
            document.getElementById("eye").style.color = '#7a797e';
        } else {
            document.getElementById("password-field").setAttribute("type", "text");
            document.getElementById("eye").style.color = '#5887ef';
        }
    });
});