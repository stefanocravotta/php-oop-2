<?php

require_once __DIR__ . '/../Product.php';

class Toy extends Product{
    private $materiale;

    public function __construct($_marchio,$_price,$_materiale){
        $this->materiale = $_materiale;

        parent::__construct($_marchio,$_price);
    }

    public function setMateriale($_materiale){
        $this->materiale = $_materiale;
    }

    public function getMateriale(){
        return $this->materiale;
    }
}



?>