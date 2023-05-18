<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="FormArea.php" method="post">
        <label>Radius</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php
    try{
        $radius = $_POST["radius"];
        $circumference = 2 * pi() * $radius;
        $circumference = round($circumference, 2);
        
        $area = pi() * pow($radius,  2);
        $area = round($area,2);
        
        $volume = 4/3 * pi() * pow($radius,3);
        $volume= round($volume,2);
        echo"Circumference = {$circumference}cm<br>";   
        echo"Area = {$area}cm^2<br>";   
        echo"Volume = {$volume}cm<br>";   
        
        //
    }
    catch(\Throwable $th){
        echo"Error the file";
    }
?>