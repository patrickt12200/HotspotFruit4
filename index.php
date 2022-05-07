<?php
    // Will check Database avalability

    require_once('database.php');
    require_once('Functions.php');
    $sql_fruits = sql_fruits($db);
    session_start();

    if(!$_SESSION['loggedIn'])header("Location:Login.php");
    




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotspot Fruit</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<img src="images\logo.png" style="max-width: 300px; margin: auto" width="50%">
<body>
<div class="toggle">
    <a><i class="fa fa-bars"></i></a>
</div>
    <div class="menu">
        <ul>
            <li><a href="AllFruits.php">All our Fruits</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="Login.php">Log In</a></li>
        </ul>
    </div>
</body>
<footer>
<?php
                 if($_SESSION['Type'] == 'A'){
                echo "admin controls:  .<br>";
                echo "<a href='index.php'>Home</a><br>";
                echo "<a href='infochange.php'>EDIT DATA</a><br>";
                echo "<a href='Orderviewer.php'>Customer Orders</a><br>";
                }           
                ?>
    </footer>
</html>