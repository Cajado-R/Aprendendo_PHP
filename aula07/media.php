<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $m1 = $_GET["a"];
    $m2 = $_GET["b"];
    echo "a primeira nota é $m1 e a segunda é $m2";
    $r = ($m1 + $m2) /2;
    echo " <br> a média é $r";
    
    echo "<br> você está ". ($r<7)?" Reprovado":"Aprovado";
    
    
    
    
    
    
    
    ?>
</body>
</html>