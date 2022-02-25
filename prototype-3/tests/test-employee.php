<?php
include '../employee.php';
$employee = new Employee();
$employee->setFirstName("Merradou");
echo $employee->getFirstName();

?>