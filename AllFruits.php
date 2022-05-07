<?php
$counter = 0;
// Will check Database avalability

require_once('database.php');
require_once('Functions.php');
session_start();
// if(!$_SESSION['loggedIn'])header("Location:Login.php");

include('Taskbar.php') ?>
<br>

<!DOCTYPE html>
<html lang="en">
<head class='menu'>

    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="scripts.js"></script>
    <title>Document</title>
</head>
<body>
<form action='addFruit.php' method="post">

<label>Fruit ID</label>
<select name="fruitID">
<?php foreach($fruit_data as $fruit): ?>
    <option value="<?php echo $fruit['Name']; ?>">
    <?php echo $fruit['Name']; ?>
    </option>
<?php endforeach; ?>
</select>
<label>Quantity</label>
<select name="qty">
<?php for($i=01; $i<=10; $i++): ?>
<option>
    <?php echo $i; endfor ?>
</option>
</select>
<input type="submit" class="button" value="Add to Cart!">

</form>
<div id='allOurFruit'>
<?php foreach($fruit_data as $key => $fruit){;  ?>
        <div class="column">
            <div class="card">
                <img src="images/<?php echo $fruit['Name'] ?>.jpg" class="column_img">
                <div class="container">

                    <h2 class="title" id="<?php echo$fruit['Name']; ?>"><?php echo$fruit['Name']; ?></h2>
                    <p class="description"><?php echo$fruit['description']; ?></p>
                    <p class="price">$<?php echo$fruit['Price']; ?></p>    
                    <input type="hidden" name="fruitID" value="<?php echo $fruit['Name'] ?>" method="post">               
                    </div>
                </div>
            </div>
        </div>        
    <?php };?>             
<span>
</body>
</html>
