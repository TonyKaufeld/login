<?php

    include 'dbh.inc.php';
    session_start();

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
        
    //error handlers
    //check if inputs are empty
    $sql = "SELECT * FROM users WHERE name='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        echo "error";
        exit();
    } else {
        if ($row = mysqli_fetch_assoc($result)) {
            //checking the password
            $hashedPwdCheck = password_verify($pwd, $row['password']);
            if ($hashedPwdCheck == false) {
                echo "wrong password " . $row['password'] . $pwd;
                exit();
            } elseif ($hashedPwdCheck == true) {
                //Log in the user here
                $_SESSION['uid'] = $row['name'];
                //checks if there is a session
                if(isset($_SESSION['uid'])) {
                    echo "welkom " . $_SESSION['uid'];
                }
                exit();
            }
        }
    }

