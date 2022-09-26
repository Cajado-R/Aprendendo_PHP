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

$txt = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora ea optio qui. Architecto enim distinctio odio vitae. Est omnis culpa nihil necessitatibus, accusamus ipsum corporis provident? Dolorem nisi quaerat accusantium?";
$res = wordwrap($txt, 25, "<br/>");
echo ($res)
?>
</body>
</html>

