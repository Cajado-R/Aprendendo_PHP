<pre>
    <?php
    $pessoa = array("nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65.3);
    
        
        foreach ($pessoa as $campo => $valor){
            echo "O valor de $campo é $valor";
        }
    ?>
</pre>