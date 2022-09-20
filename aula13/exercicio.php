<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
    <style>
        p{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Testando seu número...</h1>
    <?php
    $nu = isset($_GET["num1"])?$_GET["num1"]:0;
    switch($nu)
    {
        case 2:
        case 3:
        case 5:
        case 7:
        case 11: 
        case 13:
        case 17: 
        case 19:
        case 23:
        case 29:
        case 31:
        case 37:
        case 41:
        case 43:
        case 47:
        case 53:
        case 59:
        case 61:
        case 67:
        case 71:
        case 73:
        case 79:
        case 83:
        case 89:
        case 97:
            {
                echo "<h2>É divisivel por 1 e por $nu</h2>";
                echo "<p>É primo!</p>";
            } break;

            default: 
            echo "Nâo é primo";
    }
    
    
    
    
    
    // 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89 e 97
    
    ?>
</body>
</html>