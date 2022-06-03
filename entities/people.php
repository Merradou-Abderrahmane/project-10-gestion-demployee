<?php

class People {
    private $id;
    private $firstName;
    private $lastName;
    private $birthDate;
    private $photo;
    
    function getId(){
        return $this->id;
    }

    function setId($value) {
        $this->id = $value;
    }
 
    function getFirstName(){
        return $this->firstName;
    }

    function setFirstName($value){
        $this->firstName = $value;
    }

    function getLastName(){
        return $this->lastName;
    }

    function setLastName($value){
        $this->lastName = $value;
    }

    function getBirthDate(){
        return $this->birthDate;
    }

    function setBirthDate($value){
        $this->birthDate = $value;
    }
     
    function getPhoto(){
        return $this->photo;
    }

    function setPhoto($value){
        $this->photo = $value;
    }
}