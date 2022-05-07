<?php
include('database.php');
$prod = $db->prepare("SELECT * FROM fruitdata order by ID");
$prod->execute();
$fruit_data = $prod->fetchAll(\PDO::FETCH_ASSOC);

function sql_fruits($db){
    $callTable = "SELECT * FROM fruitdata 
    ORDER BY ID";
    $Fulltable = $db->query($callTable);
    $Fulltable->execute();

    return $Fulltable;
}

function Login($db, $uname, $pass){
 
}


//prints user view of fruit table
function UserLookup($Fulltable){
    echo "<table class='center'>";
            echo "<tr>";
                echo "<th>Fruit</th>";
                echo "<th>Origin</th>";
                echo "<th>Organic</th>";
                echo "<th>Price per pound</th>";                    
            echo "</tr>";
        foreach($Fulltable as $row){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Origin'] . "</td>";
                echo "<td>" . $row['Organic'] . "</td>";
                echo "<td>$" . $row['Price/Lb'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
}
function ShoppingLookup($Fulltable){
    echo "<table class='center'>";
            echo "<tr>";
                echo "<th>Fruit</th>";
                echo "<th>Origin</th>";
                echo "<th>Organic</th>";
                echo "<th>Price per pound</th>";
                echo "<th>Quantinty</th>";                     
            echo "</tr>";
        while($row = $Fulltable->fetch()){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Origin'] . "</td>";
                echo "<td>" . $row['Organic'] . "</td>";
                echo "<td>" . $row['Price/Lb'] . "</td>";

                echo "<td> <input class='smallbox' type='number' name='quantity'>
                <input type='submit' name='submit2' value='Add to Cart'> </td>";
        }
        echo "</table>";
}

//prints admin view of fruit table
function Adminlookup($Fulltable){
    echo "<table class='center'>";
            echo "<tr>";
                echo "<th>Fruit</th>";
                echo "<th>Origin</th>";
                echo "<th>Organic</th>";
                echo "<th>Price per pound</th>";
                echo "<th>ID</th>";                   
            echo "</tr>";
        while($row = $Fulltable->fetch()){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Origin'] . "</td>";
                echo "<td>" . $row['Organic'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['ID'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }


function AddToDb($id,$name,$price,$Orgin,$organ,$db,$desc){
    
    try{
        $ID = intval($id);
        $Name = strval($name);
        $Price = intval($price);
        $origin = strval($Orgin);
        $Organ = strval($organ);
        $insert = "INSERT INTO `fruitdata` (`ID`, `Name`, `Price/Lb`, `Origin`, `Organic`, `description`) 
            VALUES('$ID', '$Name', '$Price', '$origin', '$Organ', '$desc')";

            $db->exec($insert);
    }catch(Exception $e){
        print($e);
        print('<br>');
        print("$insert");

    }
    
}

function RemoveFromDb($id,$db){
    try{
        $ID = intval($id);
        $remove = "DELETE FROM `fruitdata` WHERE ID ='$ID' ";
        $db->exec($remove);
    }
    catch(Exception $e){
        print($e);
        print('<br>');

    }
}

function CreateAccount($email,$uname,$password,$db){
    try{
        $Email = strval($email);
        $Uname = strval($uname);
        $Password = strval($password);
   
        $insert = "INSERT INTO `logindata` ( `UserName`, `Passwd`, `Email`) VALUES('$Uname', '$Password','$Email')";

        $db->exec($insert);
    }catch(Exception $e){
        print($e);
        print('<br>');
        print("$insert");
    }
}

// -------------------------------------------------------------
// ----------  Cart Functions Start Here ----------------------
// -------------------------------------------------------------

function submitOrder($db){
    $order = array();
    $counter = 1;
    try{
    $query = "SELECT * FROM cartdata";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $cartData = $stmt->fetchAll();
    }catch(PDOException $e){
        print($e);
    }
    
    foreach($cartData as $fruit){
        $order[$counter]['item'] = $fruit['item'];
        $order[$counter]['quantity'] = $fruit['qty'];
        $order[$counter]['price'] = $fruit['price'];
        $counter++;
    } 
    $counter = 1;
    $tempArr = array();
    // foreach($order[$counter]['item'] as $item){
    //     $tempArr[] = implode("[", $item);
    //     foreach($order[$counter]['quantity'] as $qty){
    //         $tempArr = implode("," , $qty , ",");
    //     }
    //     foreach($order[$counter]['price'] as $price){
    //         $tempArr = implode($price, "]");
    //     }
    // }
    $result = implode("||", $order);
    echo($result);
    $uname = $_SESSION["uname"];
    try{
        $query = "INSERT INTO `orders` (`UserID`, `Item`, `Cost`) VALUES('$uname','$result', 13)";
    }catch(PDOException $e){
       
    }


}

function addItem($item, $quantity, $db){
    include('database.php');
   //print($item);

    try{
        $query = "SELECT `Price` FROM fruitdata
        WHERE Name = '$item'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $pricelist = $stmt->fetchAll();
    }catch(PDOException $e){
        print($e);
    }
    foreach($pricelist as $price){
        $finalPrice = $price['Price'];
        print($item . "|" . $quantity. "|" . $finalPrice);
    }
    print(" Price:" . $finalPrice);
    try{
        $insert = "INSERT INTO `cartdata` ( `item`, `qty`, `price`) VALUES('$item', $quantity, $finalPrice)";
        $db->exec($insert);
    }catch(PDOException $e){
        print($e);
    }
}

function clearCart(){
    include('database.php');
    $remove = "DELETE FROM cartdata";
    $db->exec($remove);
}

function getTotal(){
    $subtotal = 0;
    foreach($_SESSION['cart'] as $item){
        $subtotal += $item['total'];
    }
    $final_subtotal = number_format($subtotal, 2);
    return $final_subtotal;
}

function update_item($item, $quantity){
    $quantity = (int) $quantity;
    if(isset($_POST['cart'][$item])){
        if($quantity <= 0){
            unset($_POST['cart'][$item]);
        }
        else{
            $_POST['cart'][$item]['qty'] = $quantity;
            $total = $_POST['cart'][$item]['Price'] *
                $_POST['cart'][$item]['$qty'];
            $_POST['cart'][$item]['total'] = $total;
        }
    }
}

function OrderLookup($db){
    $callTable = "SELECT * FROM orders 
    ORDER BY OrderID";
    $Fulltable = $db->query($callTable);
    $Fulltable->execute();


    echo "<table class='center'>";
            echo "<tr>";
                echo "<th>orderID</th>";
                echo "<th>UserID</th>";
                echo "<th>Item</th>";
                echo "<th>Cost</th>";                     
            echo "</tr>";
        while($row = $Fulltable->fetch()){
            echo "<tr>";
                echo "<td>" . $row['OrderID'] . "</td>";
                echo "<td>" . $row['UserID'] . "</td>";
                echo "<td>" . $row['Item'] . "</td>";
                echo "<td>" . $row['Cost'] . "</td>";
        }
        echo "</table>";






    return $Fulltable;
}

function AddOrderToDb($UserID,$Item,$Cost,$db){
    try{
        $insert = "INSERT INTO `Orders` (`UserID`, `Item`, `Cost`) 
        VALUES('$UserID', '$Item', '$Cost')";

        $db->exec($insert);
    }catch(Exception $e){
        print($e);
        print('<br>');
        print("$insert");
    }
}

function RemoveOrderFromDb($id,$db){
    try{
        $ID = intval($id);
        $remove = "DELETE FROM `Orders` WHERE OrderID ='$ID' ";
        $db->exec($remove);
    }
    catch(Exception $e){
        print($e);
        print('<br>');

    }
}
?>