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
    $n = isset($_GET["num"])?$_GET["num"]:"Nada digitado";
    $o = isset($_GET["oper"])?$_GET["oper"]:1;
    switch($o){
        case 1: 
            $r = $n * 2;
            break;


        case 2: 
            $r = $n ^ 3;
            break;

        case 3: 
            $r = sqrt($n);
            break;

            default;
    }

    echo "O resultado da operação solicitada foi $r <a href=switch.html> voltar</a>"
    

    
    ?>
</body>
</html>