<?php

class User{
    private $name;
    private $surname;
    private $scadenza_carta;
    private $isIscritto = false;
    private $discount = 0;
    private $carta_scaduta = false;

    public function __construct($_name, $_surname , $_scadenza_carta , $_isIscritto){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->setScadenzaCarta($_scadenza_carta);
        $this->isIscritto = $_isIscritto;
        $this->setDiscount();
        $this->setCartaScaduta($_scadenza_carta);
    }

    public function setName($_name){
        $this->name = $_name;
    }

    public function setSurname($_surname){
        $this->surname = $_surname;
    }

    public function setIsIscritto($_isIscritto){
        $this->isIscritto = $_isIscritto;
    }

    public function setDiscount(){
        if($this->isIscritto === true){
            $this->discount = 20;
        }
    }

    public function setScadenzaCarta($_scadenza_carta){
        $this->scadenza_carta = date_create($_scadenza_carta);
    }

    public function setCartaScaduta($_scadenza_carta){
        if( date_create($_scadenza_carta) < date_create('now')){
            $this->carta_scaduta = true;
        }
    }


    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getIsIscritto(){
        return $this->isIscritto;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function getScadenzaCarta(){
        return $this->scadenza_carta;
    }
}


?>