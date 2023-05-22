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



const closeBtn = document.querySelector('.close-btn');

closeBtn.addEventListener('click', () => {
    formContainer.style.display = 'none';
});
formOpenBtn.addEventListener('click', () => {
    formContainer.style.display = 'block';
    formContainer.style.transition = '0.3s';
});
closeBtn.addEventListener("click", () => home.classList.remove("show"));

function loginNow1() {
    // xử lý đăng nhập ở đây

    // sau khi đăng nhập thành công, gọi hàm để tải lại trang web và ẩn nút login
    location.reload();
    changeLoginButton();
    home.addEventListener("click", () => home.classList.remove("show"));
}

// Hàm ẩn form ddawng
function hideLoginForm() {
    var loginForm = document.getElementsByClassName("form_container");
    loginForm.style.display = "none"; // Thay đổi thuộc tính display từ block thành none
}

function changeLoginButton() {
    formOpenBtn.innerHTML = "<i class='fa fa-user' id='dan'></i>";

}

function showloginform() {
    home.addEventListener("click", () => home.classList.add("show"));
}