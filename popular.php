<?php
    // Will check Database avalability.

    //require_once('database.php');
    /*$FillTable = "SELECT * FROM students";   
    $Fulltable = $db->query($FillTable);
    $id1 = $_POST['IDRange1'];
    $id2 = $_POST['IDRange2'];*/

    include('Taskbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<h1 class="popularHead">Popular</h1>
<p class="description">Our Most Bestest Fruits!</p>
<p class="description">Give us your money, today!</p>

<div id="allOurFruit">
    <div class="row">
        <div class="column">
            <div class="card">
             <img src="images/banana.jpg" class="column_img">
                <div class="container">
             <h2 class="title">American Banana</h2>
             <p class="description">An American Favorite. If you hate it, you're not normal</p>
                    <p class="price">$2.99/lb</p>
                    <p><button class="button">Add to Cart</button> </p>
        </div>

    </div>
        </div>

<div class="column">
    <div class="card">
        <img src="images/honeycrisp.jpg" class="column_img">
            <div class="container">
            <h2 class="title">Honey Crisp Apple</h2>
            <p class="description">Literally the best apple ever bro.</p>
                <p class="price">$2.99/lb</p>
                <p><button class="button">Add to Cart</button> </p>
            </div>
    </div>

</div>
</div>

    <div class="row">
    <div class="column">
        <div class="card">
            <img src="images/dragonfruit.jpg" class="column_img">
                 <div class="container">
                     <h2 class="title">Dragon Fruit</h2>
                     <p class="description">Honestly, idek why people like these</p>
                     <p class="price">$5.99/lb</p>
                     <p><button class="button">Add to Cart</button></p>
                 </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <img src="images/guava.jpg" class="column_img">
            <div class="container">
                <h2 class="title">Guava</h2>
                <p class="description">Unusually sweet, probably you're new favorite</p>
                <p class="price">$1.99/lb</p>
                <p><button class="button">Add to Cart</button></p>
            </div>
        </div>
    </div>
    </div>
        <div class="row">
        <div class="column">
            <div class="card">
                <img src="images/passionfruit.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">Passion Fruit</h2>
                    <p class="description">Kind of looks gross, but tastes like a kiwi and a pineapple had a baby.</p>
                    <p class="price">$24.99/lb</p>
                    <p><button class="button">Add to Cart</button></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="images/jackfruit.jpg" class="column_img">
                <div class="container">
                    <h2 class="title">JackFruit</h2>
                    <p class="description">Basically a repackaged mango</p>
                    <p class="price">$5.99/lb</p>
                    <p><button class="button">Add to Cart</button></p>
                </div>
            </div>
        </div>
</div>
</div>

</body>
</html>