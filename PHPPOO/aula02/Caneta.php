<?php 

class Caneta {
    var $modelo;
    var $cor; 
    var $ponta; 
    var $carga;
    var $tampada;


function rabiscar() {
if ($this -> tampada == true) {
    echo "ERRO! NÃO POSSO RABISCAR! ESTOU TAMPADA";
}else {
    echo "<p>Estou rabiscando...</p>";
}


}

function tampar(){
    $this -> tampada = true;
}

function destampar(){
    $this -> tampada = false;
}
}
?>