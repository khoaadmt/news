document.getElementById('loginNow').addEventListener('click', function() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const users = [
        { "username": "user1", "password": "pass1" },
        { "username": "user2", "password": "pass2" },
        { "username": "user3", "password": "pass3" }
    ];
    let authenticated = false;
    for (let i = 0; i < users.length; i++) {
        if (username === users[i].username && password === users[i].password) {
            authenticated = true;
            break;
        }
    }
    if (authenticated) {
        // chuyển đến trang sau khi đăng nhập thành công
        window.location.href = "http://127.0.0.1:5500/about1.html";
    } else {
        // hiển thị thông báo lỗi cho người dùng
        document.getElementById('error-message').innerHTML = "Sai tên đăng nhập hoặc mật khẩu. Vui lòng thử lại.";
    }
});