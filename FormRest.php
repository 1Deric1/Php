<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant </title>
</head>

<body>
    <form action="FormRest.php" method="post">
        <label> Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">

    </form>
</body>
</html>
<?php
    try{
        $item = "pizza";
        $price = 5.99;
        $quantity = $_POST["quantity"];
        $total = $quantity*$price ;
        echo "You have ordered {$quantity} x {$item}s <br>";
        echo"Your total is: \${$total}";
    }
    catch(\Throwable $th){
        echo "Erro";
    }
?>