<?php
    // Will check Database avalability.
    require_once('database.php');
    require_once('Functions.php');
    session_start();

    if(empty($_POST["uname"]) || empty($_POST["pass"]) || empty($_POST["email"]))
        {
            $errorMsg = '<p style="color: red; font-size: 24pt;"> ERROR: Username and Password cannot be blank </p>';
            print($errorMsg);
        }
    else{
        $email = $_POST['email'];
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        CreateAccount($email,$username,$password,$db);
        header("Location:index.php");
    }


?>