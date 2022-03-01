<?php
require_once '../employeeManager.php';
// test edit method by accessing an employee in the DB through it's id
$employeeManager = new EmployeeManager();
$employeeManager->editEmployee("2", "Merradou", "Noureddine", "2020/2/12", "male");

?>