<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="description" content="beschrijving">
    <meta name="author" content="Auteur">
    <title></title>
    <link rel="stylesheet" href="Css/header.css">
    <script src="Javascript/login.js"></script>
    
</head>

<body onload="loaded()">

    <div id="login-form">
        <div id="login-container">

            <input type="text" placeholder="Enter Username" id="username" required><br/>
            <input type="password" placeholder="Enter Password" id="password" required><br/>
            
            <button onclick="login()">Login</button>
            <button onclick="Logout()">Logout</button>

            <p id="session"></p>

            <input type="text" placeholder="Enter Username" id="R_username" required><br/>
            <input type="password" placeholder="Enter Password" id="R_password" required><br/>
            
            <button onclick="Register()">Register</button>

        </div>
    </div>

</body>
