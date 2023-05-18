<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Loops.php" method="post">
        <label>LOOPS:</label><br>
        <input type="submit" name = "stop" value="stop">
    </form>
</body>
</html>
<?php
    $seconds = 0;
    $running = true;
    while($running){
        if(isset($_POST["stop"])){
            $running = false;   
            echo "vc parou";
        }
        else{
            $seconds++;
            echo $seconds . "<br>";        
        }
    }
?>