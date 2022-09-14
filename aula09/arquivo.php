<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <style>
        span.texto1 {
            color: rgb(35, 229, 35);
            font-style: bolder;
        }
        span.texto2 {
            color: red;
        }
        span.texto3 {
            color: red;
        }
    </style>
</head>
<body>
   <?php
   $n1 = isset($_GET["n11"])?($_GET["n11"]):"Insira um número de 0 a 10";
   $n2 = isset($_GET["n22"])?($_GET["n22"]):"Insira um número de 0 a 10";
       $r = ($n1 + $n2) /2;
       echo "Média $r";
    if ($r >= 7 &&  $r <= 10){
        echo "<br> <span class= 'texto1'> Aprovado </span>";
    }
   elseif ($r = 5 && $r < 7 ) {
    echo "<span class= 'texto3'> <br> Em recuperação </span>";
   }
   else {
    echo " <span class= 'texto2' REPROVADO! </span>";
   }
   ?> 
</body>
</html>