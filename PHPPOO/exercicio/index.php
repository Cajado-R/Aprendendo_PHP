<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copo</title>
</head>
<body>
    <?php
    
    require_once 'copo.php';
    $glass = new Copo;
    $glass -> tamanho = "30cm";

    $glass -> esvaziar();
    //print_r($glass);

    ?>
</body>
</html>