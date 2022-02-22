<?php
require_once 'employee.php';
$employee = new Employee();

$employee->setFirstName("Merradou");
echo $employee->getFirstName();

$employee->lastName("Abderrahmane");
echo $employee->lastName;

?>