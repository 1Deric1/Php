<?php 
    $name = "Deric Santos";
    $food = "pizza";
    $email = "fake123@gmail.com";
    
    $age = 21;
    $users = 2;
    $quantity = 3;
    
    $gpa = 2.5;
    $price = 4.99;
    $tax_rat = 5.1;    
    
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;
    echo "Hello! {$name}<br>";
    echo "You like $food<br>";
    echo "You email is $email<br>";
    
    echo"You are {$age} years old<br>";
    echo"There are {$users} users online<br>";
    echo"You would like to {$quantity} itens<br>";
    echo"your gpa is: {gpa}<br>";
    echo"Yout pizza is \${$price}<br>";    
    echo"the sales tax rate is: {$tax_rat}%<br>";
    echo"Online status: {$online}<br>";
    echo"Onile status: {$online}<br>";
    echo"You have ordered {$quantity} x {$food}s<br>";    
    $total = $quantity * $price;
    echo"Your total is: \${$total}";
?> 