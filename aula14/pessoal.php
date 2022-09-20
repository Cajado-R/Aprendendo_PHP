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



    function soma (){
        $num = func_get_args();
        $num2 = func_num_args();
        $num3 = 0;
        for ($ll = 0; $ll < $num2; $ll++){
            $num3 += $num[$ll];
        }
        return ($num3);
        
        
        
    }    

    $res = soma(1, 2, 3, 4);
        echo "A soma vale $res";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>