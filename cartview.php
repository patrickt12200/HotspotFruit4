<?php
include('Taskbar.php');
include('database.php');
$prod = $db->prepare("SELECT * FROM cartdata order by price");
$prod->execute();
$cart_data = $prod->fetchAll(\PDO::FETCH_ASSOC);
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
            <form action="." method="post">
                <input type="hidden" name="action" value="update">
                <table class='card'>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                   <th>Item Total</th>                   
                 </tr>
                 <tr>
                     <?php foreach($cart_data as $key => $cart): ?>
                <th><?php echo $cart['item']; ?></th>
                <th><?php echo $cart['price']; ?></th>
                <th><?php echo $cart['qty']; ?></th>
                <th><?php echo $cart['qty'] * $cart['price'] ; ?></th>
</tr>
                     </form>
<?php endforeach; ?>
        </table>

        <form action="removeFruit.php" method="post">
        <input type="submit" class="button" value="Clear Cart">
        </form>

        <form action="ThankYou.php" method="post">
        <input type="submit" class="button" value="Submit Order" name="SubmitOrder">
        </form>
    </main>
</body>

</html>