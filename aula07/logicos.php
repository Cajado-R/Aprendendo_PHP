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
    
    $ano = $_GET["ano"];
    $idade = 2022 - $ano;
    echo "Quem nasceu em $ano tem idade $idade anos";
    $tipo = ($idade>= 18 && $idade <65)? "Obrigatório" : "Não Obrigatorio";
    echo " E o seu voto é $tipo";
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>