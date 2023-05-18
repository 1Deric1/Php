<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifs</title>
</head>
<body>
    <form action="ifstatements.php" method="post">
        <label>AGE:</label><br>
        <input type="text" name="age">
        <input type="submit" value="send">
    </form>
</body>
</html>
<?php
    $age = $_POST["age"];
    if ($age >=18) {
        echo "Voce e de Maior!!";
    }
    elseif($age < 18 and $age > 6){
        echo"Voce e de menor ";
    }
    elseif ($age <=6) {
        echo"Idade invalida";
    }
    else{
        echo"The enter age don't valid";
    }
?>