function myFunction(value, apples) {
        
    var username = document.getElementById("username");
    var password = document.getElementById("password");

    var data = new FormData();
    data.append("uid", username.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
            document.getElementById("username_value").innerHTML = username;
            document.getElementById("password_value").innerHTML = password;
        }
    };
    request.open("POST", "core/login.inc.php", true);
    request.send(data);

    
    
}

