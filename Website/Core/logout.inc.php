<?php

//checks if there is a session
if(isset($_SESSION['uid'])) {
    echo "welkom " . $_SESSION['uid'];
}

//if (isset($_POST['submit'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
//}