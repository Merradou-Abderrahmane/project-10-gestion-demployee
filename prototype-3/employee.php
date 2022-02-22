<?php
class Employee {
    private $id;
    private $firstName;
    public $lastName;
    private $gender;
    private $birthDate;

    private function getId() {
        return $this->$id;
    }
    private function setId($value){
        $this->$id = $value;
    }

    private function getFirstName() {
        return $this->$id;
    }
    private function setFirstName($value){
        $this->$id = $value;
    }

    private function getGender() {
        return $this->$id;
    }
    private function setGender($value){
        $this->$id = $value;
    }

    private function getBirthDate() {
        return $this->$id;
    }
    private function setBirthDate($value){
        $this->$id = $value;
    }
}
?>