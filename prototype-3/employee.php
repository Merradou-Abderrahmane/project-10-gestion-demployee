<?php
    class Employee {
        private $id;
        private $firstName;
        private $lastName;
        private $gender;
        private $birthDate;

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($value){
            $this->firstName = $value;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($value){
            $this->lastName= $value;
        }

        public function getGender(){
            return $this->gender;
        }

        public function setGender($value){
            $this->gender= $value;
        }

        public function getBirthDate(){
            return $this->birthDate;
        }

        public function setBirthDate($value){
            $this->birthDate = $value;
        }
    }
?>