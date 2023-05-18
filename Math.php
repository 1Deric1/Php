<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <form action="Math.php" method="post">
            <label>x:</label>
            <input type="text" name="x"><br><br>
            <label>y:</label>
            <input type="text" name="y">
            <input type="submit" value="total">
        </form>
    </div>
</body>

</html>
<?php
try {
    //code...
    $x = $_POST["x"];
    $y = $_POST["y"];
//A funcao abs mostra o valor absuluto
//$total = abs($x);
//A funcao round mostra o valor arredondado pra o mais proximo
//$total = round($x);
//Valor arredondado pra baixo
//$total = floor($x);
//Arrendonda pra cima
//$total = ceil($x);
    //$total = pow($x, $y);
    //if ($x>=2) {
    //Raiz quadrada
    //$total = sqrt($x);
    //Maximo entre x e y
    //$total = max($x, $y);
    //Minimo entre x e y
    //$total = min($x, $y);
    //$total = pi();
    //rand funcao de numeros aleatorios
    $total = rand($x, $y);
    
    
    
    echo $total;
    //}
    //else {
    //    echo"seu numero e menor q 2";
    //}
    
} catch (\Throwable $th) {
    echo "erro";
}
?>