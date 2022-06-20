<?php 

require_once __DIR__ . '/../Product.php';

class Cuccia extends Product{
    private $dimensione;

    public function __construct($_marchio,$_price,$dimensione){
        $this->dimensione = $dimensione;

        parent::__construct($_marchio,$_price);
    }

    public function setDimensione($dimensione){
        $this->dimensione = $dimensione;
    }

    public function getDimensione(){
        return $this->dimensione;
    }
}

?>