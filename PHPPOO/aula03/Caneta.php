<!-- 
    UML OU VISIBILIDADE
     + = PUBLICO
     - = PRIVADO
     # = PROTEGIDA
-->
<?php

class caneta{
    public $modelo;
    public $cor; 
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if ($this->tampada==true){
            echo "<p>ERRO! Creio que ainda me encontro tampada</p>";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }
    }

    public function tampar(){
        $this->tampada=true;
    }
    
    public function destampar(){
        $this->tampada=false;
    }
}
















?>