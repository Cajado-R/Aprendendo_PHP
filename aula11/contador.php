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
            while($n1 < $n2){
            echo ("\n $n1");
            $n1 += 2;
            
        }
    
        case 2: 
        while ($n2 < $n1){
            echo ("\n $n2");
            $n2 +=2;
        }
        break;

        case 4: 
            while($n1 < $n2){
                echo ("\n $n1");
                $n1 += 4;

        } 

        case 4: 
            while($n2 < $n1){
                echo ("\n $n2");
                $n2 += 4;
        } 
        break;

        case 6: 
            while($n1 < $n2){
                echo ("\n $n1");
                $n1 +=6;
        }
        case 6: 
            while($n2 < $n1){
                echo ("\n $n2");
                $n2 +=6;
        }
        break;
        case 8: 
            while($n1 < $n2){
                echo ("\n $n1");
                $n1 += 8;
        }
        case 8: 
            while($n2 < $n1){
                echo ("\n $n2");
                $n2 += 8;
        }
        break;

        case 10: 
            while($n1 < $n2){
                echo ("\n $n1");
                $n1 += 10;
        } 
        case 10: 
            while($n2 < $n1){
                echo ("\n $n2");
                $n2 += 10;
        }
        break;
    }
    
    ?>
</body>
</html>