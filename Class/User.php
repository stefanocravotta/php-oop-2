<?php

class User{
    private $name;
    private $surname;

    public function __construct($_name, $_surname){
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function setName($_name){
        $this->name = $_name;
    }

    public function setSurname($_surname){
        $this->surname = $_surname;
    }

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }
}


?>