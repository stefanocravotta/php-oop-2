<?php

require_once __DIR__ . '/../Product.php';

class Cibo extends Product{
    private $gusto;

   public function __construct($_marchio,$_price,$_gusto){
    
    $this->gusto = $_gusto;

    parent::__construct($_marchio,$_price);

   }

   public function setGusto($_gusto){
    $this->gusto= $_gusto;
   }

   public function getGusto(){
    return $this->gusto;
   }
}

?>