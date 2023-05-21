const formOpenBtn = document.querySelector("#form-open"),
    home = document.querySelector(".home"),
    formContainer = document.querySelector(".form_container"),
    formCloseBtn = document.querySelector(".form_close"),
    signupBtn = document.querySelector("#signup"),
    loginBtn2 = document.querySelector("#login"),
    pwShowHide = document.querySelectorAll(".pw_hide"),
    loginNow = document.getElementById("loginNow");
formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

pwShowHide.forEach((icon) => {
    icon.addEventListener("click", () => {
        let getPwInput = icon.parentElement.querySelector("input");
        if (getPwInput.type === "password") {
            getPwInput.type = "text";
            icon.classList.replace("uil-eye-slash", "uil-eye");
        } else {
            getPwInput.type = "password";
            icon.classList.replace("uil-eye", "uil-eye-slash");
        }
    });
});

signupBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formContainer.classList.add("active");
});
loginBtn2.addEventListener("click", (e) => {
    e.preventDefault();
    formContainer.classList.remove("active");
});
loginNow.addEventListener("click", (e) => {
    e.preventDefault();
    window.location.href = "http://127.0.0.1:5500/aznews-master/about1.html";
});


const closeBtn = document.querySelector('.close-btn');

closeBtn.addEventListener('click', () => {
    formContainer.style.display = 'none';
});
formOpenBtn.addEventListener('click', () => {
    formContainer.style.display = 'block';
    formContainer.style.transition = '0.3s';
});
closeBtn.addEventListener("click", () => home.classList.remove("show"));