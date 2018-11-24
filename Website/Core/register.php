<?php
    
    include 'dbh.inc.php';
    
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    
    //errorhandlers//
    //check for emty fields//
    
    if (empty($uid) || empty($pwd)){
        
        echo "username or password is empty";
        exit();
        
    } else {
        //check if input characters ar valid
        if (!preg_match("/^[a-zA-Z]*$/", $uid)) {
            echo "invalid name";
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE name='$uid'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
                
            if ($resultCheck > 0) {
                echo "username already exists";
                exit(); 
            } else {
                //Hashing the password
                $hashedPwD = password_hash($pwd, PASSWORD_DEFAULT);
                //insert the user into the database
                $sql = "INSERT INTO `users`(`name`, `password`) VALUES ('$uid', '$hashedPwD')";
                mysqli_query($conn, $sql);
                echo "Hello " . $uid;
                exit();
            }
        }
    }
