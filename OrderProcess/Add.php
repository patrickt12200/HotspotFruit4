<?php
    // Will check Database avalability.
    require_once('../database.php');
    require_once('../Functions.php');
    session_start();



    if(!$_SESSION['loggedIn'])header("Location:../Login.php");

        if(isset($_POST["submit"])){
        if(empty($_POST["UserID"]) || empty($_POST["Item"]) || empty($_POST["Cost"]))
        {
            $errorMsg = '<p style="color: red; font-size: 24pt;"> ERROR: No fields can be blank </p>';
            print($errorMsg);
        }

        else{
            $UserID = $_POST['UserID'];
            $Item = $_POST['Item'];
            $Cost = $_POST['Cost'];
            AddOrderToDb($UserID,$Item,$Cost,$db);
            header("Location:../Orderviewer.php");
        }
        }

?>