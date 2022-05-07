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
    <title>Admin Order Editor</title>
    
</head>
<body>
    <main>
      <?php
        if($_SESSION['loggedIn']){
          echo "<label>logged in as "; print_r($_SESSION); echo "</label>";
          echo "<br>";
        }

        //prints table 
        OrderLookup($db);
      ?>
    </main>
    <p>
      <form action="OrderProcess/Add.php" method="post">
          <br>
          <br>
          <h2> Add Item to List</h2>
          <br>
          <br>
          <label>UserID: </label><input type="text" name="UserID">
          <br> 
          <label>Item: </label><input type="text" name="Item">
          <br>
          <label>Cost: </label><input type="text" name="Cost">
          <br>       
          <br>
          <input type='submit' name='submit' value="ADD">
      </form>
    </p>
    <p>
      <form action="OrderProcess/Remove.php" method="post">
        <br>
        <br>
        <h2> Remove Item From List By ID</h2>
        <br>
        <br>
          <label>Order ID: </label><input type="number" name="OrderID">
          <input type='submit' name='submit2' value="Remove">
      </form>
    </p>

      
</body>
</html>