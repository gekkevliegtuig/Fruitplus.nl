<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fruitplus.nl</title>
    </head>
    
        <?php
        // put your code here
        
        //logindata
        $db_hostnaam = "localhost"; // De locatie waar de MySQL-service draait
$db_user = "user"; // De gebruikersnaam waarmee naar de database kan worden verbonden
$db_password = "password"; // Het wachtwoord waarmee naar de database kan worden verbonden
$db_name = "database"; // De naam van de database zelf, deze moet via de DBMS worden aangemaakt

$mysqli = new mysqli($db_hostnaam, $db_user, $db_password, $db_name);

//ingriendents 
$fruits = array('mango', 'strawberry', 'banana', 'apple', 'berries'. 'forestfruit')
$seeds = array ('flexseed', 'quina')
        

        
        
//dbreturn
$query = "SELECT * FROM costumers";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
echo htmlentities($row["costumer"]);
echo htmlentities($row["order"]);
        //time and 
        //
        

        //caculate price of smoothie & shoppingcart
    <?php $totalPrice = 0; ?>
    foreach ($_SESSION['SHOPPING_CART'] as $itemNumber => $item) {
    ?>
    <tr id="item<?php echo $itemNumber; ?>">    
        <td><a href="?remove=<?php echo $itemNumber; ?>"><img src="x.png"></a></td>
        <td><?php echo $item['name']; ?></td>
        <td>€<?php echo $item['price']; ?></td>
        <td><input name="items_qty[<?php echo $itemNumber; ?>]" type="text" id="item<?php echo $itemNumber; ?>_qty" value="<?php echo $item['qty']; ?>" size="3" maxlength="3" /></td>
        <td>€<?php echo $item['qty'] * $item['price']; ?></td>
        <?php $totalPrice += (($item['qty']>=0?$item['qty']:0) * $item['price']); ?>
    </tr>
    <?php
    }
    ?>
</table>
Total price: <?php>print $totalPrice  
                //print time on receipt
        $t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));

print 'time'
        
        
        ?>

       
        

        ?>
    
</html>
