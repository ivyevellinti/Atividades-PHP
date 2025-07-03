<?php

class Carro{
    public $cor; 
    public $modelo;
    public $marca;

    //MÉTODOS
    public function acelerar($modelo, $marca){
        echo"Velozes e Furiosos";
    }

    public function frear($modelo, $marca){
        echo "PARE O CARRO!!";

}
}

class CarroEletrico extends Carro {
    public $autonomia;
    public function recarregar() {
        echo "Recarregando...";
}
}

?>