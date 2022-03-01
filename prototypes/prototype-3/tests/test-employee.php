<?php
// test the class Employee by creating a new instance , then set the first name to "Merradou"
require_once '../employee.php';
$employee = new Employee();
$employee->setFirstName("Merradou");
echo $employee->getFirstName();

?>