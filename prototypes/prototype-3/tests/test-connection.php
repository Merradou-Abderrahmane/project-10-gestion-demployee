<?php
// test on public function , then return it private and continue ...
require_once '../employee.php';
$employee = new Employee();
$employee->setFirstName("Merradou");
echo $employee->getFirstName();

?>