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
    
    $n1 = isset($_GET["ini"])?$_GET["ini"]:0;
    $n2 = isset($_GET["fin"])?$_GET["fin"]:0;
    $selection = $_GET["select"];
    switch($selection){
        case 2: 
       while($n1 <= $n2){
        echo "$n1";
        $n1 = $n1 + 2;
       }
        break;
    }
    
    

    
    ?>
</body>
</html>