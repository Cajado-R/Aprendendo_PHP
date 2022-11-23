<?php


class copo {
var $capacidade;
var $tamanho;

function esvaziar(){
    if($this >= 50){
        echo "<p>Bebendo a água</p>";

    } else {
        echo "<p>Vamos encher de água?<p>";

    }
}

function encher(){
    if ($this == 0 ){
        echo "<p>Acho que estamos com sede vamos lá encher o copo</p>";
    } else {
        echo "<p>Bom ainda parece que está cheio</p>";
    }

}
}
?>