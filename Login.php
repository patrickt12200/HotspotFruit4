<?php
        session_start();
        require_once('database.php');
        require_once('Functions.php');
        

        if(isset($_POST["logout"])){
            session_destroy();
            echo "logged out";
            //header("Location:Login.php");
        }

        if(isset($_POST["login"]))
        {
            if(empty($_POST["uname"]) || empty($_POST["pass"]))
            {
                $errorMsg = '<p style="color: red; font-size: 24pt;"> ERROR: Username and Password cannot be blank </p>';
            }
    
            else
            {
                $query = "SELECT * FROM logindata WHERE Username = :uname AND Passwd = :pass";
                $statement = $db->prepare($query);
                $statement->execute(
    
                    array('uname' => $_POST["uname"],
                          'pass' => $_POST["pass"])
    
                );

    
                $counter = $statement->rowCount();
    
                if($counter > 0){
                
                    $_SESSION["uname"] = $_POST["uname"];
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['Type'] = 13;

                    $uname =$_SESSION['uname'];

                    $query2 = $db->query($call = "SELECT * from logindata where username = '$uname'");
                    while($row = $query2->fetch()){
                        $_SESSION['Type'] = $row['Type'];
                    }
                    print_r($_SESSION);
            
                    header("Location:index.php");
                } else {
                    $errorMsg = '<p style="color: red; font-size: 24pt;"> ERROR: Username and/or password are incorrect! </p>';
                }       
            }


        }
    include('Taskbar.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form method="POST">
            <input type="text" name="uname">
            <br>
            <input type="password" name="pass">
            <br>
            <input type="submit" value="Login" name="login" style="">
            <input type='submit' value='logout' name='logout' onclick="session_destroy()" style="">
            <br>
            <br>
            <label>No account? Create one now!</label>
            <br>
            <a href='CreateAccount.php'>Create Account!</a>
        </form>

        <?php
            if(isset($errorMsg)){
                echo '<span>' . $errorMsg . '</span>';
            }
        ?>
    <main>
    </body>
</html>