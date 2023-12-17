document.addEventListener("DOMContentLoaded", function () {
    const login = document.querySelector(".login");
    const registerBtn = document.querySelector(".registerBtn");
    const register = document.querySelector(".register");
    const loginBtn = document.querySelector(".loginBtn");

    registerBtn.addEventListener("click", () => {
        login.classList.add("hidden");
        register.classList.remove("hidden");
    });

    loginBtn.addEventListener("click", () => {
        login.classList.remove("hidden");
        register.classList.add("hidden");
    });
});