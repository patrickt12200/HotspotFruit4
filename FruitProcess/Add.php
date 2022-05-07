<?php
    // Will check Database avalability.
    require_once('../database.php');
    require_once('../Functions.php');
    session_start();



    if(!$_SESSION['loggedIn'])header("Location:../Login.php");

        if(isset($_POST["submit"])){
        if(empty($_POST["fruitID"]) || empty($_POST["fruitName"]) || empty($_POST["fruitOrigin"]) || empty($_POST["fruitOrganic"]) || empty($_POST["fruitPrice"]))
        {
            $errorMsg = '<p style="color: red; font-size: 24pt;"> ERROR: No fields can be blank </p>';
            print($errorMsg);
        }

        else{
            $id = $_POST['fruitID'];
            $name = $_POST['fruitName'];
            $Orgin = $_POST['fruitOrigin'];
            $organ = $_POST['fruitOrganic'];
            $price = $_POST['fruitPrice'];
            $description = $_POST['fruitDescription'];
            AddToDb($id,$name,$price,$Orgin,$organ,$db, $description);
            header("Location:../InfoChange.php");
        }
        }

?>