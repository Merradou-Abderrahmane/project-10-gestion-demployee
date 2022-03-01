<?php
require_once 'employee.php';

class EmployeeManager { 
    private $connection = null;

    public function getConnection(){
        if (is_null($this->connection)){
            $this->connection = mysqli_connect('localhost', 'test', 'test123', 'demo');

            if(!$this->connection){
                $message = 'Connection failed ' . mysqli_connect_error();
                throw new Exception($message);
            }
        }
      return $this->connection;
    }
    
    public function getAllEmployees(){
        $sqlGetData = 'SELECT id, firstName, lastName, birthDate, gender FROM employees_db1';
        $result = mysqli_query($this->getConnection(), $sqlGetData);
        $employeesList = mysqli_fetch_assoc($result);

        $employees = array();

        foreach($employeesList as $employeeList){
            $employee = new Employee();
            $employee->setId($employeeList['id']);
            $employee->setFirstName($employeeList['firstName']);
            $employee->setLastName($employeeList['lastName']);
            $employee->setBirthDate($employeeList['birthDate']);
            $employee->setGender($employeeList['gender']);
            array_push($employees, $employee);  
        }
        return $employees;
    }

    public function insertEmployee($employee){
        $firstName = $employee->getFirstName();
        $lastName = $employee->getLastName();
        $birthDate = $employee->getBirthDate();
        $gender = $employee->getGender();

        // sql insert query
        $sqlInsertQuery = "INSERT INTO employees_db1(firstName,lastName, birthDate, gender)
                           VALUES('$firstName', '$lastName', '$birthDate', '$gender')";
                           
        mysqli_query($this->getConnection(), $sqlInsertQuery);
    }
        // sql delete query
        public function deleteEmployee($id){
            $sqlDeleteQuery = "DELETE FROM employees_db1 WHERE id=$id";
            mysqli_query($this->getConnection(), $sqlDeleteQuery);
        }
}


?>