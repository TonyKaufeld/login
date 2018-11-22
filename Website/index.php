<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="beschrijving">
    <meta name="author" content="Auteur">
    <title></title>
    <link rel="stylesheet" href="Css/header.css">
    <script src="Javascript/login.js"></script>
    
</head>

<body>

    <div id="menu-container">
        <div id="menu">

            <ul>
                <a href="Register.php"><li>Register</li></a>
                <a href="index.php"><li>Home</li></a>
                <a href="contact.php"><li>Login</li></a>
            </ul>

        </div>
    </div>

    <div id="login-form">
        <div id="login-container">

            <input type="text" placeholder="Enter Username" id="username" required>
            <input type="password" placeholder="Enter Password" id="password" required>
            
            <button onclick="myFunction()">Login</button>

            <p id="username_value"></p>
            <p id="password_value"></p>
        </div>
    </div>

</body>
