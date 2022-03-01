<?php
// test of getAllEmployees method requires the existing of an 'add employee ' function
// or you might add employees directly from Database then access to them
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

?>