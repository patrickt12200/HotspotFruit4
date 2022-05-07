<?php
    // Will check Database avalability.
    require_once('database.php');
    require_once('Functions.php');
    session_start();



    if(!$_SESSION['loggedIn'])header("Location:Login.php");
    

    if($_SESSION['Type'] == 'A'){
        echo "<a href='index.php'>Home</a>";
        echo "<a href='Orderviewer.php'>Customer Orders</a>";
        echo "<a href='infochange.php'>EDIT DATA</a>";
        
    }
    else{
      header("Location:Login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>Admin Editor</title>
    
</head>
<body>
    <main>
      <?php
        if($_SESSION['loggedIn']){
          echo "<label>logged in as "; print_r($_SESSION); echo "</label>";
          echo "<br>";
        }

        //prints table 
        $Fulltable = sql_fruits($db);
        Adminlookup($Fulltable);
      ?>
    </main>
    <p>
      <form action="FruitProcess/Add.php" method="post">
          <br>
          <br>
          <h2> Add Item to List</h2>
          <br>
          <br>
          <label>Fruit ID: </label><input type="number" name="fruitID">
          <br>
          <label>Fruit Name: </label><input type="text" name="fruitName">
          <br> 
          <label>Fruit Origin: </label><input type="text" name="fruitOrigin">
          <br>
          <label>Fruit Organic: </label><input type="text" name="fruitOrganic">
          <br>
          <label>Fruit Price: </label><input type="text" name="fruitPrice">
          <br>        
          <br>
          <input type='submit' name='submit' value="ADD">
      </form>
    </p>
    <p>
      <form action="FruitProcess/Remove.php" method="post">
        <br>
        <br>
        <h2> Remove Item From List By ID</h2>
        <br>
        <br>
          <label>Fruit ID: </label><input type="number" name="fruitID2">
          <input type='submit' name='submit2' value="Remove">
      </form>
    </p>

      
</body>
</html>