<pre>
    <?php
    
    $vet = array(16, 33, 67, 643);
    $add = array_unshift($vet, 10, 15);
    $rem = array_pop($vet);
    $add_1 = array_push($vet, 2001, 2002);
    print_r($vet);
    echo "O vetor receberá ". count($vet). " elementos"

    ?>
</pre>