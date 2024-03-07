<?php
# quadriciclo.php
class Quadriciclo extends Veiculo{
    public function __construct(){
        $this->rodas = 4;
    }    

    public function acelerar(){
        if($this->ligado) $this->velocidade += 5;
    }
}