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
    
    $re = isset($_GET["estados"])?$_GET["estados"]:1;

    switch($re) {
        case 1:
        case 3:
        case 22:
        case 13:
        case 26:
        case 21:
        echo "Você é da região Norte";
        break;
        case 5:
        case 17:
        case 16:
        case 25:
        case 19:
        case 14: 
        case 6: 
        case 9: 
        echo "Você é do Nordeste";
        break;
        case 12:
        case 8: 
        case 10: 
        case 11: 
        echo "Você é do centro-oeste";
        break;
        case 7: 
        case 12: 
        case 24: 
        case 18:
        echo "Você é do sudeste";
        break;
        case 20:
        case 23:
        case 15:
        echo "Você é do Sul";
        break;
        default:
        echo "Escolha um estado";
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>