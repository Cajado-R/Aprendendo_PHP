<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php  

    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2> valores recebidos $v1 e $v2 </h2>";
    echo "<br> O valor absoluto de $v2 é ". abs($v2);
    echo "<br> o valor de $v1<sup>$v2</sup> ". pow($v1, $v2);
    echo "<br> A raiz de $v1 é ".sqrt($v1);
    echo "<br> O valor de $v2 arredondado é ". round($v2); //ceil e floor funcionam aqui 
    echo "<br> A parte inteira de $v2 é ". intval($v2);
    echo "<br> O valor de $v1 em moeda é ". number_format($v1,2,",");

?>
</body>
</html>