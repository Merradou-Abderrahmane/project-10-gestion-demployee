<?php
    require_once 'employee.php';

    class EmployeeManager {
        private $Connection = null;

        private function getConnection(){
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

        private function filterUserInput($employee){
            
            $filteredEmployee = new Employee();

            $registrationNumber = mysqli_escape_string($this->getConnection(),$employee->getRegistrationNumber());
            $firstName = mysqli_escape_string($this->getConnection(),$employee->getFirstName());
            $lastName = mysqli_escape_string($this->getConnection(),$employee->getLastName());
            $birthDate = mysqli_escape_string($this->getConnection(),$employee->getBirthDate());
            $department = mysqli_escape_string($this->getConnection(),$employee->getDepartment());
            $salary = mysqli_escape_string($this->getConnection(),$employee->getSalary());
            $occupation = mysqli_escape_string($this->getConnection(),$employee->getOccupation());
            $photo = mysqli_escape_string($this->getConnection(),$employee->getPhoto());

            $filteredEmployee->setRegistrationNumber($registrationNumber);
            $filteredEmployee->setFirstName($firstName);
            $filteredEmployee->setLastName($lastName);
            $filteredEmployee->setBirthDate($birthDate);
            $filteredEmployee->setDepartment($department);
            $filteredEmployee->setSalary($salary);
            $filteredEmployee->setOccupation($occupation);
            $filteredEmployee->setPhoto($photo);

            return $filteredEmployee;
        }
    }
?>