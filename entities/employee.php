<?php
    require_once 'people.php';
    class Employee extends People {
        private $registrationNumber;
        private $department;
        private $salary;
        private $occupation;

        function getRegistrationNumber() {
            return $this->registrationNumber;
        }

        function setRegistrationNumber($value){
            $this->registrationNumber = $value;
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

    }
?>