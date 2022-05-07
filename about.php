<?php
// Will check Database avalability.

require_once('database.php');
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
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<div class="aboutSection">
    <h1>About HotSpot Fruit</h1>
    <p>Only the highest quality fruits, sourced from private Farmers across the globe.</p>
    <p>Fresh, Fairly Priced, and Sustainable.</p>
</div>

<h2 id="TeamSection">Our Team</h2>
<div class="row">
    <div class="column">
        <div class="card">
            <img src="images/team/patrick.jpg" style="max-width: 50%; max-height: 100%;">
            <div class="container">
                <h2>Patrick Towne</h2>
                <p class="title">Lover of Fruit</p>
                <p>towne@pnw.edu</p>
                <p><button class="button">Email</button> </p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="images/team/brandon.JPG" style="max-width: 50%; max-height: 100%">
                 <div class="container">
                     <h2>Brandon Freeman</h2>
                     <p class="title">Fruit Lover</p>
                     <p>freem117@pnw.edu</p>
                     <p><button class="button">Email</button></p>
                 </div>

        </div>
    </div>
</div>

</body>
</html>