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
    
    $t = isset($_GET["tabuada"])?$_GET["tabuada"]:1;
    
    switch ($t){
        case 1:
            $cal = 1;
            do{
                echo " $t X $cal =" .($t * $cal);
                echo "<br>";
                $cal++;
            } while ($cal <= 10);
            break;

        case 2: 
            $cal = 1;
            do{
                echo "$t X $cal =" .($t * $cal);
                echo "<br>";
                $cal++;
            } while ($cal <= 10);
            break;
        case 3:
            $cal = 1;
            do{
                echo "$t X $cal =". ($t * $cal);
                echo "<br>";
                $cal ++;
            } while ($cal <= 10);
            break;
        case 4:
            $cal = 1;
            do {
                echo "$t X $cal =". ($t * $cal);
                $cal ++;
            } while ($cal <= 10);
            break;
        case 5:
            $cal = 1;
            do{
                echo "$t X $cal =". ($t * $cal);
                echo "<br>";
                $cal++;
            }while ($cal <= 10);
            break;
        case 6:  
            $cal = 1;
            do {
                echo "$t X $cal =". ($t * $cal);
                echo "<br>";
                $cal ++;
            }while ($cal <=10);
            break;   
        case 7:
            $cal = 1; 
            do {
                echo "$t X $cal =". ($t * $cal);
                echo "<br>";
                $cal ++;
            } while ($cal <= 10);
            break;
        case 8:
            $cal = 1;
            do{
                echo "$t X $cal =". ($t * $cal);
                echo "<br>";
                $cal ++; 
            }while($cal <= 10);
            break;

        case 9:
            $cal = 1; 
            do{
                echo "$t X $cal =". ($t * $cal);
                echo '<br>';
                $cal ++;
            } while ($cal <= 10);
            break;
        case 10:
            $cal = 1; 
            do{
                echo "$t X $cal =".($t * $cal);
                echo "<br>";
                $cal ++;
            } while ($cal <= 10);
            break;
    
    
    
    
    
    
        }
    
    
    
    ?>
    <a href="tabuada.html">Voltar</a>
</body>
</html>