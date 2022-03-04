<?php
    class Employee {
        private $id;
        private $registrationNumber;
        private $firstName;
        private $lastName;
        private $birthDate;
        private $department;
        private $salary;
        private $occupation;
        private $photo;


        function getId(){
            return $this->id;
        }

        function setId($value) {
            $this->id = $value;
        }
     
        function getRegistrationNumber() {
            return $this->registrationNumber;
        }

        function setRegistrationNumber($value){
            $this->registrationNumber = $value;
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

        function getDepartment(){
            return $this->department;
        }  

        function setDepartment($value){
            $this->department = $value;
        }

        function getSalary(){
            return $this->salary;
        }

        function setSalary($value){
            $this->salary = $value;
        }


        function getOccupation(){
            return $this->occupation;
        }

        function setOccupation($value){
            $this->occupation = $value;
        }

        function getPhoto(){
            return $this->photo;
        }

        function setPhoto($value){
            $this->photo = $value;
        }
    }
?>