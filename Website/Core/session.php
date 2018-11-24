<?php

session_start();

//checks if there is a session
if(isset($_SESSION['uid'])) {
    echo "welkom " . $_SESSION['uid'];
}