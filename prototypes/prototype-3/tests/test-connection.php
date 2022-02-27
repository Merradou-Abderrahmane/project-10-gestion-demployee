<?php
// test on public function , then return it private and continue ...
include '../employee.php';
$employee = new Employee();
$employee->setFirstName("Merradou");
echo $employee->getFirstName();

?>