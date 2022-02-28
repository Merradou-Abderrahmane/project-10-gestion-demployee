<?php
// test require the existing of an 'add employee ' function, or you might add directly from Database
require_once '../employeeManager.php';

$employeeManager = new EmployeeManager();
$employee_data = $employeeManager->getAllEmployees();

foreach($employee_data as $employee){
    echo $employee->getId();
    echo $employee->getFirstName();
    echo $employee->getLastName();
    echo $employee->getBirthDate();
    echo $employee->getGender();
}
// test connection
$connection = $employeeManager->getConnection();
if ($connection){
    echo 'Successful connection';
}

?>