<?php
    // Will check Database avalability.
    require_once('../database.php');
    require_once('../Functions.php');
    session_start();



    if(!$_SESSION['loggedIn'])header("Location:../Login.php");

        if(isset($_POST["submit2"])){
        if(empty($_POST["fruitID2"]))
        {
            $errorMsg = '<p style="color: red; font-size: 24pt;"> ERROR: No fields can be blank </p>';
            print($errorMsg);
        }

        else{
            $id = $_POST['fruitID2'];
            RemoveFromDb($id,$db);
            header("Location:../InfoChange.php");
        }
        }

?>