<?php
    require_once 'employee.php';

    class EmployeeManager {
        public $Connection = null;

        public function getConnection(){
            if(is_null($this->Connection)){
                $this->Connection = mysqli_connect('localhost', 'test', 'test123', 'realisation');

                if($this->Connection){
                    $message = 'Connection Error: ' .mysqli_connect_error();
                    throw new Exception($message);
                }
            }
            return $this->Connection;
        }

        public function getAllEmployees(){
            $sqlGetData = 'SELECT * FROM employee';
            $result = mysqli_query($this->getConnection(), $sqlGetData);
            $employeesList = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
            $employees = array();
    
            foreach($employeesList as $employeeList){
                $employee = new Employee();
                $employee->setId($employeeList['id']);
                $employee->setRegistrationNumber($employeeList['registrationNumber']);
                $employee->setFirstName($employeeList['firstName']);
                $employee->setLastName($employeeList['lastName']);
                $employee->setBirthDate($employeeList['birthDate']);
                $employee->setDepartment($employeeList['department']);
                $employee->setSalary($employeeList['salary']);
                $employee->setOccupation($employeeList['occupation']);
                $employee->setPhoto($employeeList['photo']);
                array_push($employees, $employee);  
            }
            return $employees;
        }

    }
?>