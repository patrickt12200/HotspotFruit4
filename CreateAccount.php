<?php
    // Will check Database avalability

    require_once('database.php');
    require_once('Functions.php');
    session_start();



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
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <form method="POST" action='CreateAcc.php'>
        <br>
        <label>Email</label><input type='email' name='email'>
        <br>
        <label>Username</label><input type="text" name="uname">
        <br>
        <label>Password</label><input type="password" name="pass">
        <br>
        <input type="submit" value="Create Now" name="CreateAcc">

    </form>
</body>
</html>