const loginBtn = document.querySelector("#login");
const registerBtn = document.querySelector("#register");
const loginForm = document.querySelector(".login-form");
const registerForm = document.querySelector(".register-form");

// Initialisation pour afficher le formulaire d'inscription au centre
loginForm.style.opacity = 0;
registerForm.style.opacity = 1;
registerForm.style.left = "50%";  // Centrer le formulaire d'inscription
registerBtn.style.backgroundColor = "#21264D";
loginBtn.style.backgroundColor = "rgba(255,255,255,0.2)";

// Gestion du clic sur le bouton de connexion
loginBtn.addEventListener('click', () => {
    loginBtn.style.backgroundColor = "#21264D";
    registerBtn.style.backgroundColor = "rgba(255,255,255,0.2)";
    loginForm.style.left = "50%";
    registerForm.style.left = "-50%";
    loginForm.style.opacity = 1;
    registerForm.style.opacity = 0;
});

// Gestion du clic sur le bouton d'inscription
registerBtn.addEventListener('click', () => {
    loginBtn.style.backgroundColor = "rgba(255,255,255,0.2)";
    registerBtn.style.backgroundColor = "#21264D";
    loginForm.style.left = "-50%";
    registerForm.style.left = "50%";
    loginForm.style.opacity = 0;
    registerForm.style.opacity = 1;
});
