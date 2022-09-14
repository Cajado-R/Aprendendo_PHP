<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="whilept2.php" method="get">
    <?php
    $c = 1;
    while ($c <= 5){

    
    echo "Valor $c: <input type='number' name='v$c' value='0' min='0' max='100'><br>";
     
    $c = $c + 1;
    }
    ?>
    <input type="submit" value="enviar" >
        
    </form>


</body>
</html>