<?php
// test connection on public Method , then return it private and continue ...
require_once '../employee.php';
$employee = new Employee();
$employee->setFirstName("Merradou");
echo $employee->getFirstName();

?>