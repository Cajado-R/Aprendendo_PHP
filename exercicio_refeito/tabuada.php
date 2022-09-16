<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada</h1>
   <h2>Selecione um número para obter a sua tabuada: </h2> 
   <?php
  echo "<form action='tabuada.php' method='get'>";
   echo "<select name='de1a10'>";
       
     $gen = 1;
     while ($gen <= 10){
   
      echo "<option  = value='$gen'>$gen</option>";
        $gen = $gen + 1;
     }
      
        echo "</select>
        <input type='submit' value='Calcular'>
    </form>";
    
      
   
    $mult = isset($_GET["de1a10"])?$_GET["de1a10"]:0;
    switch ($mult) {

        
        case 1: 
            $div = 1;
        do {
            echo "$mult X $div =". ($mult * $div);
            echo "<br>";
        $div += 1;
        } while ($div <= 10);
        break;
        case 2: 
            $div = 1;
            do {
                echo "$mult X $div =". ($mult * $div);
                echo "<br>";
                $div += 1;
            } while ($div <= 10);
            break;
        case 3: 
            $div = 1;
            do {
                echo "$mult X $div =". ($mult * $div);
                echo "<br>";
                $div += 1;
                } while ($div <= 10);    
                break;
        case 4: 
            $div = 1; 
            do{
                echo "$mult X $div =". ($mult * $div); 
                echo "<br>";
                $div += 1; 
            }while ($div <= 10);
            break;
        case 5: 
            $div = 1;
            do {
                echo "$mult X $div =". ($mult * $div);
                echo "<br>";
                $div += 1;
            }while ($div <= 10);
            break;

        case 6:
            $div = 1; 
            do{
                echo "$mult X $div =".($mult * $div);
                echo "<br>";
                $div += 1;
            }while($div <= 10);
            break;
            case 7: 
                $div = 1;
                do {
                    echo "$mult X $div =".($mult * $div);
                    echo"<br>";
                    $div += 1;
                } while ($div <= 10);
                break;
            case 7:
                $div = 1;
                do {
                    echo "$mult X $div =".($mult * $div);
                    echo "<br>";
                    $div += 1;
                } while ($div <= 10);
                break;

            case 8: 
                $div = 1;
                do {
                    echo "$mult X $div =". ($mult * $div);
                    echo "<br>";
                    $div += 1;
                } while ($div <= 10);
                break;
                    case 9: 
                        $div = 1;
                        do{
                            echo "$mult X $div =". ($mult * $div);
                            echo "<br>";
                            $div += 1;
                        }while ($div <= 10);
                        break;
                    case 10:
                        $div = 1;
                        do {
                            echo "$mult X $div =". ($mult * $div);
                            echo "<br>";
                            $div += 1;
                        } while ($div <= 10);
                        break;
    }    
  
      
      
      
      
      
      
      ?>


    
</body>
</html>