<?php
require_once 'employee.php';

class EmployeeManager { 
    private $connection = null;

    private function getConnection(){
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
    
        public function editEmployee($id, $firstName, $lastName, $birthDate, $gender){
            // Update Query
            $sqlUpdateQuery = "UPDATE employees_db1 SET
                              firstName='$firstName', lastName='$lastName', birthDate='$birthDate', gender='$gender'
                              WHERE id=$id";
            // Make Query
            mysqli_query($this->getConnection(), $sqlUpdateQuery);
            
            if (mysqli_error($this->getConnection())){
                $exceptionMessage = 'Error' . mysqli_errno($this->getConnection());
                throw new Exception($exceptionMessage);
            }
                            
        }

        public function getEmployee($id){
            $sqlGetQuery = "SELECT * FROM employees_db1 WHERE id=$id";
    
            // get result
            $result = mysqli_query($this->getConnection(), $sqlGetQuery);
    
            // fetch to Associative array
            $employee_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
            $employee = new Employee();
            $employee->setId($employee_data['id']);
            $employee->setFirstName($employee_data['firstName']);
            $employee->setLastName($employee_data['lastName']);
            $employee->setBirthDate($employee_data['birthDate']);
            $employee->setGender($employee_data['gender']);
    
            return $employee;
        }
}
?>