//login button click
function login() {
    var data = new FormData();
    data.append("uid", username.value);
    data.append("pwd", password.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
            alert(this.responseText);
            document.getElementById("session").innerHTML = this.responseText;
        }
    }
    request.open("POST", "core/login.inc.php", true);
    request.send(data);
}

//logout button click
function Logout() {
    var Logout = new XMLHttpRequest();

    Logout.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
            alert("you are logd out");
            document.getElementById("session").innerHTML = "";
        }
    }
    Logout.open("POST", "core/logout.inc.php", true);
    Logout.send();
}

//when page is loaded
function loaded() {
    var session = new XMLHttpRequest();

    session.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
            document.getElementById("session").innerHTML = this.responseText;
        }
    }
    session.open("POST", "core/session.php", true);
    session.send();
}

function Register() {
    var data = new FormData();
    data.append("uid", R_username.value);
    data.append("pwd", R_password.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Typical action to be performed when the document is ready:
            alert(this.responseText);
        }
    }
    request.open("POST", "core/register.php", true);
    request.send(data);
}
