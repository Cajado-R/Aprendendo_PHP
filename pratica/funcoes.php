<?php
function soma(){
$v = func_get_args();
$v1 = func_num_args();
$v2 = 0;
for ($v3 = 0; $v3 < $v1; $v3++){
$v2 += $v[$v3];
} 
return $v2;
}
$v5 = soma (1, 2, 3, 4);
echo $v5;
?>
