<?php
include('Taskbar.php');
?>


<!DOCTYPE html>
<html lang="en">
<head class='menu'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    <h1>Cart</h1>
    <main>
    <?php if(empty($_POST['cart'])){ ?>
        <p>Your cart is empty.</p>
        <?php }else{?>
            <form action="." method="post">
                <input type="hidden" name="action" value="update">
                <table>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                   <th>Item Total</th>                   
        </tr>

        <?php foreach($_SESSION['cart'] as $key):
        $cost = number_format($item['price'], 2);
        $total = number_format($item['total'], 2);
        endforeach;
        }
        ?>
        </table>
    </main>
</body>

</html>