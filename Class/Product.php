<?php 

class Product{
    private $marchio;
    private $price;

    public function __construct($marchio, $_price) {
        $this->marchio = $marchio;
        $this->price = $_price;
    }

    /* SETTER */

    public function setName($marchio){
        $this->marchio = $marchio;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }

    /* GETTER */

    public function getMarchio(){
        return $this->marchio;
    }

    public function getPrice(){
        return $this->price;
    }
}