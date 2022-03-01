<?php 
require_once "../employeeManager.php";

// test insertEmployee method by setting/assigning the values required with the info we want
$employee = new Employee;
$employee->setFirstName('Merradou');
$employee->setLastName('Abderrahmane');
$employee->setBirthDate('2020/9/12');
$employee->setGender('male');

$employeeManager = new EmployeeManager();
$employeeManager->insertEmployee($employee);
?>