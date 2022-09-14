<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de condição</title>
</head>
<body>
    <?php
    $a = isset($_GET["ano"])?$_GET["ano"]:"Nada inserido";
    echo "Você nasceu em $a <br>";
    $i = date("Y") - $a;
    echo "Você tem $i anos ";
    if ($i < 16 ){
        $tv = "não precisa votar";
    } 
    elseif (($i >= 16 && $i < 18) || ($i > 65)) {
         
        $tv = "tem o voto opcional";
    } 
    else {
        $tv = "tem o voto obrigatorio";
    }
    echo "Com essa idade você $tv";
    
    
    
    
    
    
    
    ?>
</body>
</html>